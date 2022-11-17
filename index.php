<?php

session_start();
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

    <title>CRUD MAKING...</title>
  </head>
  <body>
    
  <div class="container mt-4">

  <?php include('message.php');
   ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student Details</h4>
            <a href="leyva-create.php"class="btn btn-primary float-end ">Add Students </a>
          </div>
          <div class="card-body">

            <table class="table table -bordered table-striped">
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
            <tbody>
              <?php
              $query="SELECT * FROM saladaga";
              $query_run= mysqli_query($con, $query);  

              if (mysqli_num_rows( $query_run) > 0)
              {
              foreach($query_run as $saladaga)
                {
                  
                  ?>
                 <tr>
                    <td><?=$saladaga['id' ]; ?></td>
                    <td><?=$saladaga['name' ]; ?></td>
                    <td><?=$saladaga['email' ]; ?></td>
                    <td><?=$saladaga['number' ]; ?></td>
                    <td><?=$saladaga['course' ]; ?></td>
                    <td>
                      <a href="leyva-view.php?id=<?=$saladaga['id'];?>"class="btn btn-info btn sm">View</a>
                      <a href="leyva-edit.php?id=<?=$saladaga['id'];?>"class="btn btn-success btn sm">Edit</a>
                      <form action="code.php" method="POST" class="d-inline">
                            <button type="submit"name="delete_student" value="<?=$saladaga['id'];?>" class="btn btn-danger btn sm">Delete</a>

                      </form>
                    </td>
                   </tr>
                  <?php               
                }
              }
              else
              {
                echo "<h5>No Record Found </h5>";
              }
            ?>

                
              </tbody>
            </table>

            
         </div>
        </div>
      </div>
    </div>
  </div>
   
 

  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>