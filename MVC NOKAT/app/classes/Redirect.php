<?php

class Redirect{
    static function To($page){
        header('location:'.$page);
    }
}