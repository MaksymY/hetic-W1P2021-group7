<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?php ucfirst($page) ?>Penpal</title>
</head>
<body>

    <?php include_once 'views/includes/header.php'?>

        <h1>Connectez Vous</h1>

        <form method="post" action="inscrire_view.php" >
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Connection</button>
        </form>

        <p><a href="index.php?page=inscrire">s'inscrire</a></p>


    <?php include_once 'views/includes/footer.php'?>

</body>
</html>