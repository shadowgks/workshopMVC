<?php

//create
if(isset($_POST['add'])){
    $data = new NoktaController();
    $add_nokta = $data->addNokta();
}else{
    Redirect::To(BASE_URL);
}
