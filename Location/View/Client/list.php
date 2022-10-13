
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <script src="Script/scripts.js">confirmation</script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
</head>
<body>
<form method="GET" action="?page=listcli" style="margin-top: 10px; margin-left: 41%;">
        <input type="hidden" name="page" value="listcli">
        <input type="text" name="key" style="border-radius: 20px;outline:none;border:none;background:beige; height:30px;">
        <button type="submit" class="btn btn-info">Search</button>
</form>
    <h1 class="text-center py-5">liste Client</h1>
    <button type="button" class="btn btn-danger" style="margin-left: 237px; margin-bottom: 10px;"><a href="?page=addcli">Ajout Client</a></button>

                <table class="table table-condensed table-hover mx-auto" style="width: 1000px; background: yellow;">

                    <tr class="text-center text-light bg-dark" style="width: 600px;">
                        <th>idc</th>
                        <th>Nom</th>
                        <th>prenom</th>
                        <th>Addresse</th>
                        <th>Ville</th>
                        <td>Modifier</td>
                        <td>Supprimer</td>
                    </tr>
                    <?php
                        while ($tab = mysqli_fetch_row($list)) {
                            echo "<tr  class='text-center' style='color:black;'>
                                    <td>$tab[0]</td>
                                    <td>$tab[1]</td>
                                    <td>$tab[2]</td>
                                    <td>$tab[3]</td>
                                    <td>$tab[4]</td>

                                    <td><a href='?page=editcli&ok=$tab[0]' class='btn btn-primary'>Modifier</a></td>
                                    <td><a onclick = 'return confirmation();' class='btn btn-danger' href='Controller/client.php?ok=$tab[0]'>suppimer</a></td>
                                 </tr>";
                                 }
                    ?>
                </table>


    </div>
    <?php
    require_once ('footer.php');
  ?> 
</body>
</html>