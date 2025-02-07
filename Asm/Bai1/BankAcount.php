<?php
class BankAcount
{
    protected $accountNumber;
    protected $nameAccount;
    protected $balance;
    protected $pin;

    public function __construct($accountNumber, $nameAccount, $balance, $pin)
    {
        $this->accountNumber = $accountNumber;
        $this->nameAccount = $nameAccount;
        $this->balance = $balance;
        $this->pin = $pin;
    }

    public function deposit($amount, $accountNumber, $pin)
    {
        if ($this->accountNumber === $accountNumber && $this->pin === $pin) {
            if ($amount > 99999) {
                $this->balance += $amount;
                echo "Nạp tiền thành công. </br> Số dư hiện tại trong tài toản là: " . $this->balance . '</br>';
                // die;
            } else {
                echo "Số Tiền Nạp Ít Nhất 100.000vnd";
                die;
            }
        } else {
            echo "Số Tài Khoản Hoặc Mật Khẩu Chưa Đúng";
            die();
        }
    }

    public function withdraw($amount, $accountNumber, $pin)
    {
        if ($this->accountNumber === $accountNumber && $this->pin === $pin) {
            if ($amount < $this->balance) {
                $this->balance -= $amount;
                echo "Rút tiền thành công. </> Số dư hiện tại trong tài toản là: " . $this->balance . '</br>';
                // die
            } else {
                echo "Số Dư Không Đủ";
                die;
            }
        } else {
            echo "Số Tài Khoản Hoặc Mật Khẩu Chưa Đúng";
            die();
        }
    }

    public function getBalance($accountNumber, $pin)
    {
        if ($this->accountNumber === $accountNumber && $this->pin === $pin) {
            echo "Số Dư Hiện Tại Trong Tài Khoản: " . $this->balance . '</br>';
        } else {
            echo "Số Tài Khoản Hoặc Mật Khẩu Chưa Đúng";
            die();
        }
    }

    public function getDetail()
    {
        echo "Thông Tin Tài Khoản: </br>
                Số Tài Khoản: " . $this->accountNumber . "</br>
                Tên Tài Khoản: " . $this->nameAccount . "</br>
                Số Dư Hiện Tại: " . $this->balance;
    }
}
