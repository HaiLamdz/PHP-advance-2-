<?php
class Menber extends Person implements Borrowable
{
    protected $membershipType;
    protected $borrowedItems = [];
    protected $borrowLimit;
    protected $borrowHistory = [];

    public function __construct($name, $membershipType)
    {
        parent::__construct($name);
        $this->membershipType = $membershipType;
        if ($membershipType == "VIP") {
            $this->borrowLimit = 10;
        } else {
            $this->borrowLimit = 5;
        }
    }


    public function getName()
    {
        return $this->name;
    }
    public function getLimit()
    {
        echo $this->borrowLimit;
    }

    public function borrow(Book $book)
    {
        if (count($this->borrowedItems) >= $this->borrowLimit) {
            echo "Không thể mượn " . $book->getName() . ". Quá giới hạn mượn của bạn.<br/>";
            return;
        }
        foreach ($this->borrowedItems as $borrowedItem) {
            if ($borrowedItem->getCodeISBN() === $book->getCodeISBN()) {
                echo "Sách " . $book->getName() . " đã được mượn.<br/>";
                return;
            }
        }
        if ($book->getStock() < 1) {
            echo "Sách này đã hết còn sách.<br/>";
            return;
        }
        $this->borrowedItems[] = $book;
        $book->updateStockBorrow();
        $this->borrowHistory[] = [
            'codeISBN' => $book->getCodeISBN(),
            'startDate' => date('Y-m-d'),
            'endDate' => date('Y-m-d', strtotime('+5 days')),
            'returnDate' => null
        ];
        echo "Mượn Sách " . $book->getName() . " Thành Công<br/>";
    }

    public function returnItem(Book $book, $returnBook)
    {
        foreach ($this->borrowedItems as $key => $borrowedItem) {
            if ($borrowedItem->getCodeISBN() === $book->getCodeISBN()) {
                unset($this->borrowedItems[$key]);
                $book->updateStockReturn();

                foreach ($this->borrowHistory as $history) {
                    if ($history['codeISBN'] === $book->getCodeISBN() && $history['returnDate'] === null) {
                        $history['returnDate'] = $returnBook;
                        $endDate = strtotime($history['endDate']);
                        if (strtotime($returnBook) > $endDate) {
                            $soNgayTre = floor((strtotime($returnBook) - $endDate) / 86400);
                            $tienPhat = $soNgayTre * 2000;
                            echo "Trả Sách " . $book->getName() . " Thành Công. Số Tiền Bị Phạt Do Trả Muộn " . $soNgayTre . " Ngày là:" . number_format($tienPhat) . "vnđ<br/>";
                            return;
                        } else {
                            echo "Trả Sách " . $book->getName() . " Thành Công<br/>";
                            return;
                        }
                    }
                }
            }
        }
        echo "Sách này không có trong danh sách mượn của bạn.<br/>";
    }

    public function getTotalRent()
    {
        $total = 0;
        foreach ($this->borrowedItems as $key => $borrowItem) {
            $total += $borrowItem->getRent();
        }
        echo "Tổng Số Tiền Thuê Các Cuốn Sách Là: " . number_format($total) . "vnđ";
    }
}
