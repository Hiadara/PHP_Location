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
    <title>Student Edit</title>
  </head>
  <body>


    <div class="container mt-5">
      <!--  -->

      <?php include('message.php'); ?>

      <!--  -->
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey !</strong> I am Haidara Cherif. I wish you Welcome
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <!--  -->


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Student Edit
                <a href="index.php" class="btn btn-danger float-end">BACK</a>
              </h4>
            </div>
            <!--  -->
              <div class="card-body">
                <!--  -->
                  <?php
                    if (isset($_GET['id']))
                    {
                      $student_id = mysqli_real_escape_string($con, $_GET['id']);
                      //echo $student_id = $_GET['id'];
                      $query = "SELECT * FROM students WHERE id='$student_id' ";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                        $students = mysqli_fetch_array($query_run);
                        ?>
                        <form action="code.php" method="POST">
                          <label>Id Student</label>
                          <input type="id" name="student_id" value="<?= $students['id']; ?> " readonly class="form-control">
                        </form>
                        <?php
                      }

                      else{
                        echo "<h4>N Such Id Found</h4>";
                      }

                    }
                  ?>
                <!--  -->
                <form action="code.php" method="POST">
                  <!--  -->
                  <div class="mb-3">
                    <label>Student Name</label>
                    <input type="text" name="name" value="<?= $students['name']; ?>" class="form-control">
                  </div>
                  <!--  -->

                  <div class="mb-3">
                    <label>Student Email</label>
                    <input type="email" name="email" value="<?= $students['email']; ?>" class="form-control">
                  </div>
                  <!--  -->

                  <div class="mb-3">
                    <label>Student Phone</label>
                    <input type="text" name="phone" value="<?= $students['phone']; ?>" class="form-control">
                  </div>
                  <!--  -->

                  <div class="mb-3">
                    <label>Student Course</label>
                    <input type="text" name="course" value="<?= $students['course']; ?>" class="form-control">
                  </div>
                  <!--  -->

                  <!--  -->
                  <div class="mb-3">
                    <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
                  </div>
                  <!--  -->

                </form>
              </div>
            <!--  -->
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>