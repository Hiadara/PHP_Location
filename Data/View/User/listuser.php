 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <script src="Script/scripts.js">confirmation</script>
    <meta charset="UTF-8">
    <script type="text/javascript" src="Script/scripts.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
   
</head>
<body>
   <form method="GET" action="?page=listusers" style="margin-top: 10px; margin-left: 41%;">
        <input type="hidden" name="page" value="listusers">
        <input type="text" name="key" style="border-radius: 20px;outline:none;border:none;background:lightskyblue; height:30px;">
        <button type="submit" class="btn btn-info">Search</button>
    </form>

    <div>

    <h1 class="text-center py-5">Liste Utilisateur</h1>

    <button type="button" class="btn btn-success"  style="  margin-left: 3px; margin-bottom: 10px;"><a href="?page=adusers">Ajout Client</a></button>

                <table class="table table-condensed table-hover mx-auto"  style="background: darkred;">
                    <tr class="text-center text-light bg-dark" style="width: 200px;">
                        <th>Id User</th>
                        <th>Phone User</th>
                        <th>Town User</th>
                        <th>Password User</th>
                        <th>Name User</th>
                        <th>Firstname User</th>
                        <th>Email User</th>
                        <td>Edit</td>
                        <td>Dell</td>
                    </tr>
                    <?php
                    $list = listusers();
                        while ($tab = mysqli_fetch_row($list)) {
                            echo "<tr  class='text-center' style='color: yellow ; font-family: Time New Roman;'>
                                    <td>$tab[0]</td>
                                    <td>$tab[1]</td>
                                    <td>$tab[2]</td>
                                    <td>$tab[3]</td>
                                    <td>$tab[4]</td>
                                    <td>$tab[5]</td>
                                    <td>$tab[6]</td>

        <td><a href='?page=editusers&ok=$tab[0]' class='btn btn-primary'><i class='far fa-edit'></i></a></td>
        <td><a onclick = 'return confirmation();' class='btn btn-danger' href='Controller/samauser.php?ok=$tab[0]'><i class='far fa-trash-alt'></i></a></td>
                                    
    </tr>";
                                 }
                    ?>
        </table>
    </div>
      <?php
    require_once 'footer.php';
  ?>
</body>
</html>