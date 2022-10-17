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
<form  action="Controller/tajoutheme.php" method="POST" class="mx-auto py-5 my-5 px-3 mx-3" style=" background: #F1C020; height: 360px; width: 380px; border-radius:10px; border: 1px solid grey; ">
  <h1 class="py-3 text-center">Ajout Theme</h1>

  <!--  -->
   <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Nom du Theme</label>
      <input type="text" class="form-control" name="name" required style="outline: none; box-shadow: none;" placeholder="Name Theme">
    </div>
  </div>

  <!--  -->
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">Description du Theme</label>
      <input type="text" class="form-control" name="description" required style="outline: none; box-shadow: none;" placeholder="Description Theme">
    </div>
  </div>

  <!--  -->
    <div class="form-row">
    <div class="col-md-12 mb-12">
      <label>Id Message</label>
      <select readonly style="box-shadow: none; outline: none;" name="id_message" class="form-control">
          <?php 
            require_once 'Model/db.php';
            require_once 'Model/mes.php';
            $requets = listmess();
            while ($tab = mysqli_fetch_row($requets)){
            echo "<option value='$tab[0]'> $tab[0]</option>";
          }
            
        ?>
      </select>
    </div>
  </div>
   <!--  -->
    <button class="btn btn-success my-3" type="submit" name="aj" style="outline: none; box-shadow: none;">Ajouter</button>
    <button class="btn btn-danger my-3" type="reset" style="outline: none; box-shadow: none;">Annuler</button>
  </form>
 
</body>
</html>