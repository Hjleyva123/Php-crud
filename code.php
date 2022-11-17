<?php
session_start();
require 'dbcon.php';


if(isset($_POST['delete_student']))
{
 $saladaga_id=mysqli_real_escape_string($con,$_POST['delete_student']);

 $query= "DELETE FROM saladaga WHERE id ='$saladaga_id'";
 $query_run=mysqli_query($con, $query);

 if($query_run)
{
    $_SESSION['message']= "STUDENT DELETED SUCCESSFULLY";
    header("Location: index.php");
    exit(0);
}
else
{
    $_SESSION['message']= "STUDENT NOT DELETED ";
    header("Location: index.php");
    exit(0);
}

}

if(isset($_POST['update_student']))
{
    $saladaga_id= mysqli_real_escape_string($con, $_POST['saladaga_id']);
    $name   = mysqli_real_escape_string($con, $_POST['name']);
    $email  = mysqli_real_escape_string($con, $_POST['email']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE  saladaga SET name='$name', email='$email', number='$number', course='$course'
     WHERE id='$saladaga_id' ";


     $query_run=mysqli_query($con, $query);

     if($query_run)
    {
        $_SESSION['message']= "STUDENT UPDATED SUCCESSFULLY";
        header("Location: index.php");
        exit(0);
    }

    else
    {
        $_SESSION['message']= "STUDENT NOT UPDATED ";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['save_student']))
{
    $name   = mysqli_real_escape_string($con, $_POST['name']);
    $email  = mysqli_real_escape_string($con, $_POST['email']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    
    $query= "INSERT INTO saladaga (name, email, number, course) VALUES
    ('$name','$email','$number','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)

    {
        $_SESSION['message']= "STUDENT CREATED SUCCESSFULLY";
        header("Location: leyva-create.php");
        exit(0);
    }


    else
    {
        $_SESSION['message']= "STUDENT NOT CREATED ";
        header("Location: leyva-create.php");
        exit(0);

    }


}
?>