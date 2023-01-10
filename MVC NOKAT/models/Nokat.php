<?php

class Nokat{

    //read
    static function getAll(){
        $stm = db::connectDB()->prepare('SELECT * FROM nokat');
        $stm->execute();
        return $stm->fetchAll();
    }

    //create
    static function add($data){
        $stm = DB::connectDB()->prepare("INSERT INTO `nokat`(`name`) VALUES (?)");
        $exe = $stm->execute([$data['name']]);
        if($exe){
            return true;
        }else{
            return false;
        }
    }

    //delete
    static function delete($id){
        $stm = DB::connectDB()->prepare("DELETE FROM nokat WHERE id = ?");
        $exe = $stm->execute([$id]);
        if($exe){
            return true;
        }else{
            return false;
        }
    }
}

