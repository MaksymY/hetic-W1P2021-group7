<?php
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])
    && !empty($_POST['password_confirm'])){

        //VARIABLES
        $pseudo       = $_POST['pseudo'];
        $email        = $_POST['email'];
        $password     = $_POST['password'];
        $pass_confirm = $_POST['password_confirm'];

        // TEST SI PASSWORD = PASSWORD_CONFIRM
        if($password != $password_confirm){
            header('location:');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?php ucfirst($page) ?>Penpal</title>
</head>
<body>

    <?php include_once 'views/includes/header.php'?>

        <h1>S'inscrire !</h1>
        <p>Bienvenue sur Penpal</p>

        <form method="post" action="inscrire_view.php" >
            <div class="form-group">
                <label for="name">Pseudo</label>
                <input type="name" name="pseudo" class="form-control" placeholder="Pseudo">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" name="password_confirm" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <p><a href="index.php?page=connect">Déjà inscrit</a></p>

    <?php include_once 'views/includes/footer.php'?>

</body>
</html>