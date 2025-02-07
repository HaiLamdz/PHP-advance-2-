<?php
    class Novel extends Book{
        public function setRent(){
            echo $this->rent += ($this->rent * 0.1);
        }
    }
?>