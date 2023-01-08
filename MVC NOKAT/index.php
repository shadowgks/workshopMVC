<?php
require_once 'controllers/NoktaController.php';

$obj = new NoktaController();

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