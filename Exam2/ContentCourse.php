<?php
    class ContentCourse{
        protected Coures $course;
        protected $content;

        public function __construct(Coures $course, $content){
            $this->course = $course;
            $this->content = $content;
        }

        public function getContent($coures){
            echo $coures . ' Content: ' . $this->content;
        }
    }
?>