<?php
     #require_once '';
     #require_once '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <title>Document</title>
</head>
<body>
<form  action="Controller/client.php" method="POST" class="mx-auto py-5 my-5 px-3" style=" height: auto; width: 600px; border-radius:10px; border: 1px solid grey; ">
<h1 class="py-3 text-center";>Ajout Client</h1>
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Nom</label>
      <input type="text" class="form-control" name="nom" required style="outline: none; box-shadow: none;">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Prenom</label>
      <input type="text" class="form-control" name="prenom" required style="outline: none; box-shadow: none;">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Addresse</label>
      <input type="text" class="form-control" name="address" required style="outline: none; box-shadow: none;">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Ville</label>
      <input type="text" class="form-control" name="ville" required style="outline: none; box-shadow: none;">
    </div>
  </div>

   
  <button class="btn btn-success my-3" type="submit" name="aj" style="outline: none; box-shadow: none;">Ajouter</button>
  <button class="btn btn-danger my-3" type="reset" style="outline: none; box-shadow: none;">Annuler</button>
  </form>
  <?php
    require_once ('footer.php');
  ?>
</body>
</html>