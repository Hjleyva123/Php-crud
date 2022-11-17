<?php

require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student Edit</title>
  </head>

  <body>

       <div class="container mt-5">

       

         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>  STUDENT VIEW DETAILS
                           <a href="index.php"class="btn btn-danger float-end">BACK</a>
                        </h4>
                        </div>
        
                     <div class="card-body">

                     <?php
                     if(isset($_GET['id']));
                  {
                      $saladaga_id= mysqli_real_escape_string($con, $_GET["id"]);
                      $query="SELECT * FROM saladaga WHERE id='$saladaga_id' ";
                      $query_run= mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                        $saladaga_id=mysqli_fetch_array($query_run);
                       
                      ?>
                            

                                 
                      </div>
                                <div class="mb-3">
                                    <label>Student Name</label>
                                    <p class="form-control">
                                       <?=$saladaga_id['name'];?>

                                    </p>



                                </div>

                                <div class="mb-3">
                                    <label>Student Email</label>
                                    <p class="form-control">
                                       <?=$saladaga_id['email'];?>

                                    </p>
                                    
                                </div>

                                <div class="mb-3">
                                    <label>Student Number</label>
                                    <p class="form-control">
                                       <?=$saladaga_id['number'];?>

                                    </p>
                                    
                                </div>

                                <div class="mb-3">
                                    <label>Student Course</label>
                                    <p class="form-control">
                                       <?=$saladaga_id['course'];?>

                                    </p>
                                 
                                  </div>

                                
                                
                         
                          <?php
                      }
                        else
                      {
                        echo "<h4>No Such Id Found</h4>";
                      }
                  }
                  ?>

                    </div>
                </div>
            </div>
         </div>
      </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>