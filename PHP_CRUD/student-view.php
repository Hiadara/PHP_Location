<?php
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

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey !</strong> I am Haidara Cherif. I wish you Welcome
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <!--  -->


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Student View Details
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

                  <!--  -->
                  <div class="mb-3">
                    <label>Student Name</label>
                    <p class="form-control" readonly>
                      <?= $students['name'];?>
                    </p>
                  </div>
                  <!--  -->

                  <div class="mb-3">
                    <label>Student Email</label>
                     <p class="form-control">
                      <?= $students['email']; ?>
                    </p>
                  </div>
                  <!--  -->

                  <div class="mb-3">
                    <label>Student Phone</label>
                     <p class="form-control">
                      <?= $students['phone']; ?>
                    </p>
                  </div>
                  <!--  -->

                  <div class="mb-3">
                    <label>Student Course</label>
                     <p class="form-control">
                      <?= $students['course']; ?>
                    </p>
                  </div>
                  <!--  -->

              </div>
            <!--  -->
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>