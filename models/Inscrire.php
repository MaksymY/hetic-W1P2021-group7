<?php

    namespace Model;

    class Inscrire{
      public function send($pseudo, $email, $password, $pass_confirm){
        if($password != $pass_confirm){
            echo("le mot de passe n'est pas identique");
        }else{
          $req = Database::$pdo->prepare('INSERT INTO user(name, mail, password)VALUES(?,?,?)');
          $res = $req->execute(array($pseudo,$email,$password));
        }
    }
} 


    

