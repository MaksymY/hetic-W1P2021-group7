<?php 
namespace Model;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    
    include_once 'views/includes/head.php'?>
    <title><?php ucfirst($page)?>Penpal</title>
</head>
<body>
    <?php include_once 'views/includes/header.php'?>

    <h1>Chattez</h1>
    <main class="chatBox">
        <div class="msgs">
        <?php 
        
        $query = Database::$pdo->query("SELECT * FROM messages ORDER BY id DESC");
        while ($msg= $query->fetch()) {?>
            <b><?= $msg['name'] ?></b> : <span class = "message"><?= $msg['message'] ?> <br>
        <?php } ?>

        </div>
        <div class="form">
            <form method ="POST" action="">
                <input type="text" name="message" placeholder="message">
                <button type="submit" name="send">Envoyer</button>
            </form>
        </div>
    </main>
    <?php include_once 'views/includes/footer.php'?>
    
</body>
<script>

        setInterval("messages()", 1500);
        function messages() {
            $(".msgs").load("./chatbox_messages_views.php");
        }

</script>
</html>