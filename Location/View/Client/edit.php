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
<form action="controller/client.php" method="POST"  enctype="multipart/form-data"  class="mx-auto py-5 my-5 px-3"  style="width: 600px; border: 1px solid grey; border-radius:10px; ">
<h1 class="py-3 text-center";>Modification Client</h1>
<div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationDefault01">Identifiant</label>
      <input value="<?php echo $link[0];?>" type="text" class="form-control" name="idc" readonly style="outline: none; box-shadow: none;">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nom</label>
      <input value="<?php echo $link[1];?>" type="text" class="form-control" name="nom" style="outline: none; box-shadow: none;">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Prenom</label>
      <input value="<?php echo $link[2];?>" type="text" class="form-control" name="prenom" style="outline: none; box-shadow: none;">
    </div>
   
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Addresse</label>
      <input value="<?php echo $link[3];?>" type="text" class="form-control" name="address" style="outline: none; box-shadow: none;">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault04">Ville</label>
      <input value="<?php echo $link[4];?>" type="text" class="form-control" name="ville" style="outline: none; box-shadow: none;">
    </div>
  
  </div>
 
  <button class="btn btn-success my-3" type="submit" name="mo" style="outline: none; box-shadow: none;">Modifier</button>
  <button class="btn btn-danger my-3" type="reset" style="outline: none; box-shadow: none;">Annuler</button>
  </form>
  
  <?php 
    require_once 'footer.php';
  ?>
</body>
</html>