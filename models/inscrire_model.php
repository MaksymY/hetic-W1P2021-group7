<?php
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])
    && !empty($_POST['password_confirm'])){

        //VARIABLES
        $pseudo       = $_POST['pseudo'];
        $email        = $_POST['email'];
        $password     = $_POST['password'];
        $pass_confirm = $_POST['password_confirm'];

        // TEST SI PASSWORD = PASSWORD_CONFIRM
        if($password != $pass_confirm){
            echo("le de passe n'est pas identique");
        }else{
            $req = Database::$pdo->prepare('INSERT INTO user(name, mail, password)VALUES(?,?,?)');
            $res = $req->execute(array($pseudo,$email,$password));
            var_dump($res);
        }
    }
?>