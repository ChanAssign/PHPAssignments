<?php

include ('includes/header.php');
require 'database.php';
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
        <h4> View Student's Details
          <a href="index.php" class="btn btn-danger float-end"> Back </a>
</h4>
      </div> 
                <div class="card-body">
               
                  <?php

                  if(isset($_GET['id'])){
                    $student_id = mysqli_real_escape_string($con,$_GET['id']);
                    $query= "SELECT * FROM students WHERE id='$student_id' ";
                    $query_run= mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0){

                        $student= mysqli_fetch_array($query_run);
                        ?>
                       
                    

                    
                    <div id="frm">
  <div class="row">
    
      <label for="name" class="form-label"><b>Student's Name</b></label>
      
      <p class="form-control">
      <?= $student['name']; ?>
      </p>
  </div>
          <div class="form-group">
            
    <label for="email"><b>Student Email address</b></label>
    <p class="form-control">
      <?= $student['email']; ?>
      </p>
     
  </div>
  <div class="form-group">
    
    <label for="password"><b>Password</b></label>
    <p class="form-control">
      <?= $student['password']; ?>
      </p>
    
  </div>
          <div class="form-group">
    <label for="address"><b>Address</b></label>
    <p class="form-control">
      <?= $student['address']; ?>
      </p>
  </div>
            
  <div class="row">
    <div class="col">
      <label for= "phNumber" class="form-label"><b>Phone Number</b></label>
      <p class="form-control">
      <?= $student['phNumber']; ?>
      </p>
      
    </div>
    <div class="col">
       <label for="city" class="form-label"><b>City</b></label>
       <p class="form-control">
      <?= $student['city']; ?>
      </p>
    </div>
  </div>
      
            <br>
          <div class="form-group">
      <label for="grades" class="form-label"><b>Overall Grades</b></label>
      <p class="form-control">
      <?= $student['grades']; ?>
      </p>
          </div>
          <br>
          <label class="form-label" for="customFile"><b>Image </b></label>
          <p class="form-control">
            <?= $student['std_img']; ?>
      </p>
        

                    
                    <?php
                    }
                    else{
                        echo "<h4> No Such Id Found</h4>";
                    }

                  }
                  ?>
                  </div></div></div></div>

   </main>
   <?php
   include ('includes/footer.php');
   ?>