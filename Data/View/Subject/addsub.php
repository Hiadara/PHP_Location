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

<form  action="Controller/tajoutsubjt.php" method="POST" class="mx-auto py-5 my-5 px-3" style=" height: 490px; width: 450px; border-radius:10px; border: 1px solid grey; ">
<h1 class="py-3 text-center">Ajout Subjection</h1>

<!--  -->
  <div class="form-row">
    <div class="col-md-12 mb-6">
      <label for="validationDefault02">Subject Title</label>
      <input type="text" class="form-control" name="title" required style="outline: none; box-shadow: none;">
    </div>
  </div>
  <!--  -->

  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Date Subect</label>
      <input type="Date" class="form-control" name="dats" required style="outline: none; box-shadow: none;">
    </div>
  </div>
  <!--  -->

  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Time Subject</label>
      <input type="Time" class="form-control" name="tims" required style="outline: none; box-shadow: none;">
    </div>
  </div>
  <!--  -->

   <div class="form-row">
    <div class="col-md-12 mb-12">
      <label>Id User</label>
     <select readonly style="box-shadow: none; outline: none;" name="id_user" class="form-control">
            <?php 
              require_once 'Model/db.php';
              require_once 'Model/userss.php';
              $requete = listusers();
              while ($tab = mysqli_fetch_row($requete)){
              echo "<option value='$tab[0]'> $tab[0]</option>";
            }
            
        ?>
          </select>
    </div>
  </div>

  <!--  -->


  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label>Id Theme</label>
      <select readonly style="box-shadow: none; outline: none;" name="id_theme" class="form-control">
          <?php 
            require_once 'Model/db.php';
            require_once 'Model/theme.php';
            $requets = listthems();
            while ($tab = mysqli_fetch_row($requets)){
            echo "<option value='$tab[0]'> $tab[0]</option>";
          }
            
        ?>
      </select>
    </div>
  </div>


   
  <button class="btn btn-success my-3" type="submit" name="aj" style="outline: none; box-shadow: none;">Ajouter</button>
  <button class="btn btn-danger my-3" type="reset" style="outline: none; box-shadow: none;">Annuler</button>
  </form>
 
</body>
</html>