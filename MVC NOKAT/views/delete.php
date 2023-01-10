<?php

//delete
if(isset($_POST['delete'])){
    $data = new NoktaController();
    $delete_nokta = $data->deleteNokta();
}