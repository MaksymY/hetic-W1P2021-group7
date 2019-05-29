<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './includes/head.php'?>
    <title><?php ucfirst($page)?>Penpal</title>
</head>
<body>
    <?php include_once './includes/header.php'?>
    <h1>Chattez</h1>
    <main class="chatBox">
        <div class="msgs">

        </div>
        <div class="form">
            <form method ="POST" action="">
                <input type="text" name="messages" placeholder="message">
                <button type="submit" name="send">Envoyer</button>
            </form>
        </div>
    </main>
    <?php include_once './includes/footer.php'?>
</body>
<script>

        setInterval("messages()", 1500);
        function messages() {
            $(".msgs").load("chatbox_messages_views.php")
        }

</script>
</html>