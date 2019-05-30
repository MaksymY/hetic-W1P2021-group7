<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?php ucfirst($page) ?>Penpal</title>
</head>
<body>

    <?php include_once 'views/includes/header.php'?>

    <div class="container marketing">

        <div class="row text-center">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/images/proposer.jpg"  role="img">
                <h2>Etape 1</h2>
                <p>Postez votre annonce</p>
            </div>
        <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/images/discuter.png"  role="img">
                <h2>Étape 2</h2>
                <p>Envoyez/Recevez des proposition</p>
        </div>
        <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/images/Voyagez.jpg"  role="img">
                <h2>Étape 3</h2>
                <p>Voyagez !</p>
        </div>
    </div>

    <section class="jumbotron text-center">
        <div class="container">
        <h1 class="jumbotron-heading">Crée une annonce</h1>
        <p class="lead text-muted">Crée votre annonce d'echange de logement.</p>
            <a href="index.php?page=create" class="btn btn-danger my-2">Crée mon annonce</a>
        </div>
    </section>

    <?php 
        foreach($list AS $categorie)
        {
            echo'<div class="row">';
            echo'<div class="col-md-12">';
            echo'<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';
                echo'<div class="col p-4 d-flex flex-column position-static">';
                echo'<strong class="d-inline-block mb-2 text-primary">' . $categorie['city'] . '</strong>';
                echo'<h3 class="mb-0">' . $categorie['name'] . '</h3>';
                echo'<div class="mb-1 text-muted">' . $categorie['date']  . '</div>';
                echo'<p class="card-text mb-auto">' . $categorie['description'] . '</a>';
                echo'</div>';
                echo'<button><a href="index.php?page=chatbox">Chattez</a></button>';
                echo'<div class="col-auto d-none d-lg-block">';
                echo'<img class="bd-placeholder-img" width="250" height="250" src="assets/images/Tokyo.jpg">';
                echo'</div>';
            echo'</div>';
            echo'</div>';

        }
    ?>
    <?php include_once 'views/includes/footer.php'?>
 
</body>
</html>