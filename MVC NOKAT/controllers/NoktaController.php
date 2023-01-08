<?php

class NoktaController{

    //Methode
    public function index($page){
        include 'views/'.$page.'.php';
    }

}