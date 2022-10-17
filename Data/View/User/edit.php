<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
   <script type="text/javascript" src="Script/modify.js"></script>
    <title>Document</title>
</head>
<body>
<form action="Controller/samauser.php" method="POST"  enctype="multipart/form-data"  class="mx-auto py-5 my-5 px-3"  style="width: 600px; border: 1px solid grey; border-radius:10px; ">
<h1 class="py-3 text-center";>Page de Modification User</h1>
<div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationDefault01">Identifiant User</label>
      <input value="<?php echo $link[0];?>" type="id" class="form-control" name="id_user" readonly style="outline: none; box-shadow: none;">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Telephone User</label>
      <input value="<?php echo $link[1];?>" type="text" class="form-control" name="telephone" style="outline: none; box-shadow: none;">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Ville User</label>
      <input value="<?php echo $link[2];?>" type="text" class="form-control" name="villeuser" style="outline: none; box-shadow: none;">
    </div>
   
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Password User</label>
      <input value="<?php echo $link[3];?>" type="password" class="form-control" name="password" style="outline: none; box-shadow: none;">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault04">Name User</label>
      <input value="<?php echo $link[4];?>" type="text" class="form-control" name="name" style="outline: none; box-shadow: none;">
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationDefault04">Firstname User</label>
      <input value="<?php echo $link[5];?>" type="text" class="form-control" name="firstname" style="outline: none; box-shadow: none;">
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationDefault04">email</label>
      <input value="<?php echo $link[6];?>" type="text" class="form-control" name="email" style="outline: none; box-shadow: none;">
    </div>
  
  </div>
 
  <button class="btn btn-success my-3" type="submit" name="mo" style="outline: none; box-shadow: none;">Modifier</button>
  <button class="btn btn-danger my-3" type="reset" style="outline: none; box-shadow: none; "href="?page=listusers" >Annuler</button>


  </form>
  <?php
    require_once 'footer.php';
  ?>
</body>
</html>