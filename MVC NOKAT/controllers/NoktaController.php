<?php

class NoktaController{
    //Methodes CRUD
    //read
    function getAllNokat(){
        $nokat = Nokat::getAll();
        return $nokat;
    }

    //create
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

    //delete
    function deleteNokta(){
        if(isset($_POST['delete'])){
            $id = $_POST['id_nokta'];
            $delete = Nokat::delete($id);
            if($delete === true){
                echo 'delete good';
            }else{
                echo 'delete faild';
            }
        }
    }

    //update
    function updateNokta(){
        if(isset($_POST['edit'])){
            $data = array(
                'id' => $_POST['id_nokta'],
                'name' => $_POST['nokta']
            );

            $update = Nokat::update($data);
            if($update === true){
                echo 'update succefully';
            }else{
                echo 'update faild';
            }
        }
    }
}