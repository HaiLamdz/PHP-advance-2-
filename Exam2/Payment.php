<?php
    class Payment{
        protected Coures $coures;
        protected Account $account;
        protected $price;
        protected $status;
        protected $date;

        public function __construct(Coures $coures, Account $account , $date, $status = 'unsucsessful'){
            $this->coures = $coures;
            $this->account = $account;
            $this->date = $date;
            $this->status = $status;
            $this->price = $coures->getPrice();
        }

        public function orderDetail(){
               echo   $this->coures->getName() .'</br> account: ' . $this->account->getName() .' </br>price: ' . $this->price . '</br> status: ' . $this->status .'</br> date: ' . $this->date;
        }
    }
?>