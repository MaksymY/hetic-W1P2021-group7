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
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
        <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
        <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
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