<?php

session_start();

require 'database.php';


if(isset($_POST['del_student'])){

    $student_id= mysqli_real_escape_string($con,$_POST['del_student']);
    $query= "DELETE FROM students WHERE id='$student_id' ";
    $query_run= mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']= "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message']= "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['update_student'])){

    $student_id= mysqli_real_escape_string($con,$_POST['student_id']);
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $phNumber = mysqli_real_escape_string($con,$_POST['phNumber']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $grades = mysqli_real_escape_string($con,$_POST['grades']);

    $query= "UPDATE students SET name='$name', email='$email', password='$password',address='$address',phNumber='$phNumber',city='$city',grades='$grades' WHERE id='$student_id' ";

    $query_run= mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']= "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message']= "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }
    
}

if(isset($_POST['save_student'])){

    $filename= $_FILES["uploadfile"]["name"];
    $tempname= $_FILES["uploadfile"]["tmp_name"];
    $folder= "uploads/".$filename;
    move_uploaded_file($tempname,$folder);


    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $phNumber = mysqli_real_escape_string($con,$_POST['phNumber']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $grades = mysqli_real_escape_string($con,$_POST['grades']);




    if($name!= "" &&  $email!= "" &&  $password!= "" &&  $address!= "" &&  $phNumber!= "" && $city!= "" && $grades!= "" && strlen($phNumber)==10 && strlen($grades)==2 && is_numeric($phNumber) && is_numeric($grades) ){

    $query="INSERT INTO students(std_img,name,email,password,address,phNumber,city,grades) VALUES('$folder','$name','$email','$password','$address','$phNumber','$city','$grades')";

    $query_run= mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']= "Student Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message']= "Student Not Created";
        header("Location: index.php");
        exit(0);
    }
    
}
  else{
        $_SESSION['message']= "Fill out the all the fields Correctly as per the below instructions. Thank You!";
        header("Location: create.php");
        exit(0);
    }
    
}
?>