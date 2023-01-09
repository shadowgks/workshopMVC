<?php

class NoktaController{
    //Methode
    function getAllNokat(){
        $nokat = Nokat::getAll();
        return $nokat;
    }

    function addNokta(){
        if(isset($_POST['add'])){
            $data = array(
                'name' => $_POST['nokta'],            
            );

            $add = Nokat::add($data);
            if($add === true){
                echo 'good';
            }else{
                echo 'faild';
            }
        }
    }
}