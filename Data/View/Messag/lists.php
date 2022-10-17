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
    <form method="GET" action="?page=listmess" style="margin-top: 10px; margin-left: 41%; width: 300px;">
        <input type="hidden" name="page" value="listmess">
        <input type="text" name="key" style="border-radius: 20px;outline:none;border:none;background:beige; height:30px;">
        <button type="submit" class="btn btn-info">Search</button>
    </form>

    <div>

    <h1 class="text-center py-5">Liste Message</h1>
    <button class="btn btn-primary my-3 bg-white" type="submit" name="aj" style="outline: none; box-shadow: none;"><a href="?page=admesages">Ajout Message</a></button>  
                <table class="table table-condensed table-hover mx-auto"  style="background: #708567;">  
                    <tr class="text-center text-light bg-dark" style="width: 10px;">
                        <th>Id Message</th>
                        <th>Title Message</th>
                        <th>Date Message</th>
                        <th>Times Message</th>
                        <th>Text Message</th>
                        <th>Id User</th>
                        <th>ID Subject</th>
                        <td>Edit</td>
                        <td>Dell</td>
                    </tr>
                    <?php
                    $list = listmess();
                        while ($tab = mysqli_fetch_row($list)) {
                            echo "<tr  class='text-center' style='color: lightsalmon ; font-family: Agency FB; font-weight: bolder; font-size: 20px;'>
                                    <td>$tab[0]</td>
                                    <td>$tab[1]</td>
                                    <td>$tab[2]</td>
                                    <td>$tab[3]</td>
                                    <td>$tab[4]</td>
                                    <td>$tab[5]</td>
                                    <td>$tab[6]</td>
                                    

        <td><a href='?page=editmessage&ok=$tab[0]' class='btn btn-primary'><i class='far fa-edit'></i></a></td>
        <td><a onclick = 'return confirmation();' class='btn btn-danger' href='Controller/mess.php?ok=$tab[0]'><i class='far fa-trash-alt'></i></a></td>
                                    
    </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>