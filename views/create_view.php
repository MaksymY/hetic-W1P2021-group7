<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?php ucfirst($page) ?>Penpal</title>
</head>
<body>
  <?php include_once 'views/includes/header.php'?>

  <div class="text-center">
    <div class="form-inscrire">
        <h1 class="h3 mb-3 font-weight-normal">Création de l'annonce</h1> 
        <form method="post" action="?page=home" >
            <div class="form-group">
                <label for="name">Pseudo</label>
                <input type="name" name="pseudo" class="form-control" placeholder="Damien">
            </div>
            <div class="form-group">
                <label for="city">city</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Kiev" value="<?php echo $city; ?>">
                <span class="help-inline"><?php echo $cityError; ?></span>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Un appartement  de bonne qualité je cherche un échange de préférence à ..." value="<?php echo $description; ?>">
                <span class="help-inline"><?php echo $descriptionError; ?></span>
            </div>
            <div class="form-group">
                <label for="image">Mettez une image de votre logement:</label>
                <input type="file" id="image" name="image">
                <span class="help-inline"><?php echo $imageError; ?></span>
            </div>
            <button type="submit" class="btn btn-danger">Create</button>
        </form>
    </div>
</div>

</body>
</html>