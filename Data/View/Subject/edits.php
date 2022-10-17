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
<form action="Controller/tajoutsubjt.php" method="POST"  enctype="multipart/form-data"  class="mx-auto py-5 my-5 px-3"  style="width: 600px; border: 1px solid grey; border-radius:10px; ">
<h1 class="py-3 text-center";>Modification Subject</h1>
<div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationDefault01">Identifiant Subject</label>
      <input value="<?php echo $link[0];?>" type="id" class="form-control" name="id_subject" readonly style="outline: none; box-shadow: none;">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationDefault01">Title Subject</label>
      <input value="<?php echo $link[1];?>" type="text" class="form-control" name="title" style="outline: none; box-shadow: none;">
    </div>
    </div>

  <div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationDefault02">Date Subject</label>
      <input value="<?php echo $link[2];?>" type="Date" class="form-control" name="dats" style="outline: none; box-shadow: none;">
    </div>
  </div>

  <!--  -->
    <div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationDefault02">Time Subject</label>
      <input value="<?php echo $link[3];?>" type="Time" class="form-control" name="tims" style="outline: none; box-shadow: none;">
    </div>
  </div>

  <!--  -->
  <div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationDefault02">ID User</label>
      <input value="<?php echo $link[4];?>" type="id" readonly class="form-control" name="id_user" style="outline: none; box-shadow: none;">
    </div>
  </div>

  <!--  -->
    <div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationDefault02">ID Theme</label>
      <input value="<?php echo $link[5];?>" type="id" readonly class="form-control" name="id_theme" style="outline: none; box-shadow: none;">
    </div>
  </div>
 
  <button class="btn btn-success my-3" type="submit" name="mo" style="outline: none; box-shadow: none;">Modifier</button>
  <button class="btn btn-danger my-3" type="reset" style="outline: none; box-shadow: none;">Annuler</button>
  </form>
  
</body>
</html>