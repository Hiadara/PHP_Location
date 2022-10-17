<?php

  session_start();
  require 'dbcon.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <!--  -->
      <div class="container my-4">
        <!--  -->
          <?php include('message.php');?>
        <!--  -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Student Details</h4>
                <a href="Student-create.php" class="btn btn-primary float-end">Add Students</a>
              </div>
              <!--  -->
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <!--  -->
                      <tbody>
                        <?php
                            $query = "SELECT * FROM students ";
                            $query_run= mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                              foreach($query_run as $students)
                              {
                              ?>
                                <tr>
                                  <td><?= $students ['id']; ?></td>
                                  <td><?= $students ['name']; ?></td>
                                  <td><?= $students ['email']; ?></td>
                                  <td><?= $students ['phone']; ?></td>
                                  <td><?= $students ['course']; ?></td>
                                  <td>
                                    <a href="student-view.php?id=<?= $students ['id']; ?>" class="btn btn-success btn-sm">View</a>
                                    <a href="student-edit.php?id=<?= $students ['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <form action="code.php" method="POST" class="d-inline">
                                      <button type="submit" name="delete_student" value="<?= $students['id'];?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i>Delete</button>
                                    </form>
                                  </td>
                                </tr>
                                <?php
                              }
                            }
                            else
                            {
                              echo "There no record found on the database";
                            }
                        ?>
                        <tr>
                          <th></th>
                        </tr>
                      </tbody>
                    <!--  -->
                  </table>
                </div>
              <!--  -->
            </div>
          </div>
        </div>
      </div>
    <!--  -->



  <?php
    require_once 'footer.php';
  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>