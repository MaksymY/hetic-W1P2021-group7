<?php 
namespace Model;

$query = Database::$pdo->query("SELECT * FROM messages ORDER BY id DESC");

while ($msg= $query->fetch()) {?>
           <b><?= $msg['name'] ?></b> : <span class = "message"><?= $msg['message'] ?> <br>
       <?php }  ?> 


