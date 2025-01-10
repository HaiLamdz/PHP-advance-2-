<?php
    class ATM{
        private $STK;
        private $maPin;

        public function changePass($newPass){
            if(strlen(($newPass) < 8)){
                $this->maPin = $newPass;
            }
        }

    }
    $atm = new ATM;

    $atm->changePass('123'); //
?>