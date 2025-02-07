<?php
    class Comic extends Book{
        public function setRent(){
            echo $this->rent -= ($this->rent * 0.05);
        }
    }
?>