<?php

namespace Controller;

use Model\Connect;
class ConnectController{
    public function page(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
    
            $email = $_POST['email'];
            $password = $_POST['password'];


        }
        $request = new Connect;
        $pull = $request->pull($email, $password);

        include_once 'views/connect_view.php';
    } 
}