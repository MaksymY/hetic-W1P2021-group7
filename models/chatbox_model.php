<?php

// Chatbox model page

// Form send messages

if(isset($_POST['send'])) {
    if(isset($_POST['message'])) {
        if(!empty($_POST['message'])) {
            if(strlen($_POST['message'])<=500) {

                $message = htmlspecialchars($_POST['message']);
                $req = Database::$pdo->prepare('INSERT INTO messages(name, message)VALUES(?,?)');
                $req->execute(array($_SESSION['user']['name'], $message));

            } else {
                $error = "Votre message doit faire moins de 500 caractères !";
            }
        } else {
            $error = "Vous devez entrer un message !";
        }
    }
}

// Recovery all messages 
$msgs = $bdd->query("SELECT * FROM messages ORDER BY id DESC");

// Call view 
include_once "./views/chatbox_view.php";

?> 