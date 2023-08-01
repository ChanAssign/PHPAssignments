<?php
session_start();
include ('includes/header.php');
require 'database.php';


if(isset($_POST['logged_in'])){

    
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    
    if(!empty($email) && !empty($password)){
        $query = "SELECT * FROM students WHERE email = '$email' ";
        $query_run= mysqli_query($con,$query);


        if($query_run){
            if($query_run && mysqli_num_rows($query_run)>0){

                $user_data= mysqli_fetch_assoc($query_run);

                if($user_data['password']== $password){
                    header("location: index.php");
                    die;
                }

            }
        }
        echo "<script type='text/javascript'> alert('Wrong Email and Password you have entered') </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Wrong Email and Password you have entered') </script>";
    }
}
?>




<main>
      <img class="image" src="img/programm.jpg"  alt="Car Image" />
      <div class="Txt">
        <h1> CRUD IN OOP PHP</h1>
      </div>
  <div class="container">
    <div class="row">
      <div class="col md-12">
        <div class="card">
          <div style="margin-top:100px;margin-left: 40px;margin-right: 40px;"class="card-header mb-0">
        <h4> LOGIN HERE 
          <a href="index.php" class="btn btn-danger float-end"> Back </a>
</h4>
      </div>
                
                <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                <div id="frm">
                <div class="form-group">
            
            <label for="email"> Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    
            
          </div>
          <div class="form-group">
            
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            
          </div>
          <br>
          <input class="btn btn-primary" name="logged_in" type="submit" value="Login" />
          <br><br>
          <div class="log">
        <p> Not have an account? 
        <a href="create.php" id="login" style="color:blue; text-decoration:underline;font-size: 16px;"> Sign up here</a><p>
</div>
          </div> 
 
          
        </form>
        
                </div></div></div></div>

                <footer  class="text-center text-white " style="background-color: #0a4275;margin-top:50px;">
    <!-- Grid container -->
    <div style="margin-top:30px;" class="container p-4 pb-0">
     
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <button type="button" class="btn btn-outline-light btn-rounded">
            Sign up!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">CRUDInPHP.com</a>
    </div>
    <!-- Copyright -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </footer>
  <!-- Footer -->
</section>

</body>
</html>
  






