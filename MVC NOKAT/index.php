<?php
//autoload
require_once 'autoload.php';
//header
require_once './views/includes/header.php';

$obj = new HomeController();
$array_pages = ['home','update','delete','add'];

if(isset($_GET['pages'])){
    if(in_array($_GET['pages'], $array_pages)){
        $page = $_GET['pages'];
        $obj->index($page);
    }else{
        include 'views/includes/404.php';
    }
}else{
    include 'views/home.php';
}


//footer
require_once './views/includes/footer.php';
