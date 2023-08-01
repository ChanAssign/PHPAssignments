<?php

session_start();
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
        <h4> Student Edit 
          <a href="index.php" class="btn btn-danger float-end"> Back </a>
</h4>
      </div>
                
                <div class="card-body">
                  <?php

                  include('message.php');
                  ?>
                  <?php

                  if(isset($_GET['id'])){
                    $student_id = mysqli_real_escape_string($con,$_GET['id']);
                    $query= "SELECT * FROM students WHERE id='$student_id' ";
                    $query_run= mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0){

                        $student= mysqli_fetch_array($query_run);
                        ?>
                       
                    <form action="code.php" method="POST">

                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
                    <div id="frm">
  <div class="row">
    
      <label for="name" class="form-label">Student's Name</label>
      <input type="text" class="form-control" name = "name" value="<?= $student['name']; ?>" id="name" placeholder="Name">
  </div>
          <div class="form-group">
            
    <label for="email">Student Email address</label>
    <input type="email" class="form-control" name="email" id="email" value="<?= $student['email']; ?>" aria-describedby="emailHelp" placeholder="Enter email">
            
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" value="<?= $student['password']; ?>" id="password" placeholder="Password">
     <div class="form-text"> Your password must be 8-20 characters long and must not contain spaces, special characters, or emoji.</div>
  </div>
          <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" value="<?= $student['address']; ?>" id="address" placeholder="1234 Main St">
  </div>
            
  <div class="row">
    <div class="col">
      <label for= "phNumber" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" name="phNumber" value="<?= $student['phNumber']; ?>" id="phNumber" placeholder="Phone Number">
      <div class="form-text">Number must be 10 digits long</div>
    </div>
    <div class="col">
       <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" name="city" value="<?= $student['city']; ?>" id="city" placeholder="City">
    </div>
  </div>
          </br>       
<div class="form-check form-check-inline">
  <p>WHICH SUBJECT ARE YOU STUDYING?</p>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">PHP</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">CSS</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
  <label class="form-check-label" for="inlineRadio3">COMMUNICATION</label>
</div>
         <div class="form-check form-check-inline">   
             <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">MATH</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">RELATIONAL DATABASE</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
  <label class="form-check-label" for="inlineRadio3">JAVA</label>
</div>
            <br>
            <br>
          <div class="form-group">
      <label for="grades" class="form-label">Overall Grades</label>
      <input type="number" class="form-control" name="grades" value="<?= $student['grades']; ?>" id="grades" placeholder="Grades">
          </div>
          <br>
            <div class="form-group">
  <label for="exampleFormControlTextarea1" class="form-label"> Special Message</label>
  <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
            <br>
            <div class="mb-3">
         <button type="update" name="update_student" class="btn btn-primary">Update</button>
         
                    </div>
          </div> 

                    </form>
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