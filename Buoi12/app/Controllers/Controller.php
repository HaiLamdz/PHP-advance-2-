<?php

namespace App\Controllers;

use eftec\bladeone\BladeOne;

class Controller
{
    protected $blade;
    public function __construct()
    {
        $views = ROOT_PATH . '/views'; // Thư mục chứa file .blade.php
        $cache = ROOT_PATH . '/cache'; // Thư mục chứa file cache
        // Chú ý: nên sử dụng biến môi trường
        // Ví dụ: ROOT_PATH=C:/xampp/htdocs/WD19311/B10/

        $this->blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
    }
}
