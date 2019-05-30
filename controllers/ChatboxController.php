<?php

namespace Controller;

use Model\ChatboxModel;

namespace Controller;

class ChatboxController{
  public function page(){
    if(!empty($_POST['message'])) {

        //VARIABLES

        $name       = $_SESSION['user']['name'];
        $message    = htmlspecialchars($_POST['message']);

        $add = new ChatboxModel;
        $send=$add->send($name, $message);
        
    }
    include_once 'views/chatbox_view.php';
  }
}