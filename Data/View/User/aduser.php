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
<form  action="Controller/samauser.php" method="POST" class="mx-auto py-5 my-5 px-3" style=" background: #33A2EC; height: 540px; width: 480px; border-radius:10px; border: 1px solid grey; ">
  <h1 class="py-3 text-center">Ajout Utilisateur</h1>

  <!--  -->
   <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Telephone Utilisateur</label>
      <input type="text" class="form-control" name="telephone" required style="outline: none; box-shadow: none;" placeholder="Telephone">
    </div>
  </div>

  <!--  -->
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Ville Utilisateur</label>
      <input type="text" class="form-control" name="villeuser" required style="outline: none; box-shadow: none;" placeholder="Ville">
    </div>
  </div>

  <!--  -->
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Mot de passe Utilisateur</label>
      <input type="password" class="form-control" name="password" required style="outline: none; box-shadow: none;" placeholder="password">
    </div>
  </div>

  <!--  -->
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Nom de l'Utilisateur</label>
      <input type="text" class="form-control" name="name" required style="outline: none; box-shadow: none;" placeholder="name">
    </div>
  </div>

  <!--  -->
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Prénom de l'utilisteur</label>
      <input type="text" class="form-control" name="firstname" required style="outline: none; box-shadow: none;" placeholder="firstname">
    </div>
  </div>

  <!--  -->
   <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Email de l'utilisteur</label>
      <input type="text" class="form-control" name="email" required style="outline: none; box-shadow: none;" placeholder="email">
    </div>
  </div>

   <!--  -->
    <button class="btn btn-success my-3" type="submit" name="aj" style="outline: none; box-shadow: none;">Ajouter</button>
    <button class="btn btn-danger my-3" type="reset" style="outline: none; box-shadow: none;">Annuler</button>
  </form>

    <?php
    require_once 'footer.php';
  ?>
 
</body>
</html>