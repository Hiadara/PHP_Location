
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <title>Document</title>
</head>
<body>
<form  action="Controller/mess.php" method="POST" class="mx-auto py-3 my-3 px-3" style="  border-radius:10px; border: 1px solid wheat;  border: 1px solid black; width: 450px; height: 515px; padding-top: 10px;">
    <h1 class="py-3 text-center";>Ajout Message</h1>
<!--  -->


    <div class="col-md-12 mb-6">
      <label for="validationDefault02">Titre du Message</label>
      <input type="text" class="form-control" name="title" required style="outline: none; box-shadow: none;" placeholder="Tite du MS">
    </div>

    <div class="col-md-12 mb-6">
      <label for="validationDefault02">Date du message</label>
      <input type="Date" class="form-control" name="dates" required style="outline: none; box-shadow: none;" >
    </div>

  <!--  -->

    <div class="col-md-12 mb-6">
      <label for="validationDefault02">Temps du message</label>
      <input type="Time" class="form-control" name="timess" required style="outline: none; box-shadow: none;" >
    </div>

    <div class="col-md-12 mb-6">
      <label for="validationDefault02">Text du Message</label>
      <input type="text" class="form-control" name="texts" required style="outline: none; box-shadow: none;" placeholder="Text du MS">
    </div>

<!--  -->


    <div class="col-md-12 mb-12">
      <label>Id Theme</label>
      <select readonly style="box-shadow: none; outline: none;" name="id_user" class="form-control">
          <?php 
            require_once 'Model/db.php';
            require_once 'Model/userss.php';
            $requets = listusers();
            while ($tab = mysqli_fetch_row($requets)){
            echo "<option value='$tab[0]'> $tab[0]</option>";
          }
            
        ?>
      </select>
    </div>

  <!--  -->


    <div class="col-md-12 mb-6">
      <label>Id Subject</label>
      <select readonly style="box-shadow: none; outline: none;" name="id_subject" class="form-control">
          <?php 
            require_once 'Model/db.php';
            require_once 'Model/submode.php';
            $requets = listsubject();
            while ($tab = mysqli_fetch_row($requets)){
            echo "<option value='$tab[0]'> $tab[0]</option>";
          }  
        ?>
      </select>
    </div>

      <button class="btn btn-success my-3 mx-3" type="submit" name="aj" style="outline: none; box-shadow: none;">Ajouter</button>
      <button class="btn btn-danger my-3" type="reset" style="outline: none; box-shadow: none;">Annuler</button>
  </form>
  
</body>
</html>