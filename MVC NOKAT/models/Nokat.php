<?php

class Nokat{
    static function getAll(){
        $stm = db::connectDB()->prepare('SELECT * FROM nokat');
        $stm->execute();
        return $stm->fetchAll();
    }
    static function add($data){
        $stm = DB::connectDB()->prepare("INSERT INTO `nokat`(`name`) VALUES (?)");
        $exe = $stm->execute([$data['name']]);
        if($exe){
            return true;
        }else{
            return false;
        }
    }
}

