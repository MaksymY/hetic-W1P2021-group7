<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?php ucfirst($page) ?>Penpal</title>
</head>
<body>

    <?php include_once 'views/includes/header.php'?>
    <div class="text-center"> 
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
            <label for="Email" class="sr-only">Adresse mail</label>
            <input type="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="Password" class="sr-only">Mot de passe</label>
            <input type="password" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
        </form>
        <p><a href="index.php?page=inscrire">s'inscrire</a></p>
    </div>


    <?php include_once 'views/includes/footer.php'?>

</body>
</html>