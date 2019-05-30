<?php

// Recovery all messages 
$bdd= new PDO("mysql:host=localhost;dbname=Penpal;charset=utf8", "root", "");
// $req = Database::$pdo->prepare('INSERT INTO messages(name, message)VALUES(?,?)');
$msgs = $bdd->query("SELECT * FROM messages ORDER BY id DESC");

?>

<?php while ($msg= $msgs->fetch()) {?>
    <b><?= $msg['name'] ?></b> : <span class = "message"><?= $msg['message'] ?> <br>
<?php } ?>

