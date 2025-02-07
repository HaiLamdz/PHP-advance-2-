<?php
    interface Borrowable{
        public function borrow(Book $book);
        public function returnItem(Book $book, $returnBook);
    }
?>