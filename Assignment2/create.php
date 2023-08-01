<?php
session_start();
include ('includes/header.php');

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
        <h4> Student Add 
          <a href="index.php" class="btn btn-danger float-end"> Back </a>
</h4>
      </div>
                
                <div class="card-body">
                  <?php



                  include('message.php');
                  ?>
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div id="frm">
  <div class="row">
    
      <label for="name" class="form-label">Student's Name</label>
      <input type="text" class="form-control" name = "name" id="name" placeholder="Name">
  </div>
          <div class="form-group">
            
    <label for="email">Student Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
     <div class="form-text"> Your password must be 8-20 characters long and must not contain spaces, special characters, or emoji.</div>
  </div>
          <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
  </div>
            
  <div class="row">
    <div class="col">
      <label for= "phNumber" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" name="phNumber" id="phNumber" placeholder="Phone Number">
      <div class="form-text">Number must be 10 digits long</div>
    </div>
    <div class="col">
       <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" name="city" id="city" placeholder="City">
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
      <input type="number" class="form-control" name="grades" id="grades" placeholder="Grades">
      <div class="form-text">Number must be 2 digits long</div>
          </div>
          <br>
            <div class="form-group">
  <label for="exampleFormControlTextarea1" class="form-label"> Special Message</label>
  <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<br>
<label class="form-label" for="customFile">Image </label>
<input type="file" name="uploadfile" class="form-control" required id="customFile" />
            <br>
         <div class="mb-3">
         <button type="submit" name="save_student" class="btn btn-primary">Sign Up</button>
         
                    </div>
                    <div class="log">
        <p> Already have an account? 
        <a href="login.php" id="login" style="color:blue; text-decoration:underline;font-size: 16px;"> Login here</a><p>
</div>
          </div> 
 
          
        </form>
        
                </div></div></div></div>
           

   </main>
   <?php
   
   include ('includes/footer.php');
   ?>