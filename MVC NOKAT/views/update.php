<?php

//update
if(isset($_POST['edit'])){
    $data = new NoktaController();
    $edit_nokta  = $data->updateNokta();
}else{
    Redirect::To(BASE_URL);
}