<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title> CRUD in OOP PHP | Create & Read</title>
        <meta name="Chanpreet" content="Website using php">
        <meta name="description" content="Showing database using php">
        <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
        <link rel="stylesheet" href="styles.css">
      <script src="./js/myScript.js"></script>
</head>
<body>
    <header>
         <img src="img/logo of php.jpeg"  alt="logo for cars" height=90 width=120>
         <div class="anchor">
         <nav>
            <ul>
            <li> <a href="index.php">Home</a></li>
		    <li> <a href="view.php">View</a></li>
           </ul>
</nav>
</div>
    </header>

    <main>
      <img class="image" src="img/programm.jpg"  alt="Car Image" />
      <div class="Txt">
        <h1> CRUD IN OOP PHP</h1>
      </div>
      
        <form method="post" >
          <div id="frm">
  <div class="row">
    <div class="col">
      <label for="fname" class="form-label">Student's First Name</label>
      <input type="text" class="form-control" name = "fname" id="fname" placeholder="First name">
    </div>
    <div class="col">
       <label for="lname" class="form-label">Student's Last Name</label>
      <input type="text" class="form-control" name = "lname" id="lname" placeholder="Last name">
    </div>
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
          </div>
          <br>
            <div class="form-group">
  <label for="exampleFormControlTextarea1" class="form-label"> Special Message</label>
  <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
            <br>
            <div class="form-group">
						 <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit">
					 </div>
          </div> 
</form>
<div class="form-group submit-message">
           <?php
					 	require_once('database.php');
             if(isset($_POST) & !empty($_POST)){
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$email = $_POST['email'];
              $password = $_POST['password'];
              $address = $_POST['address'];
              $phNumber = $_POST['phNumber'];
              $city = $_POST['city'];
              $grades = $_POST['grades'];
							$res   = $database->create($fname, $lname, $email,$password,$address, $phNumber,$city,$grades);
							if($res){
								echo "<p>Successfully inserted data</p>";
							}else{
								echo "<p>Failed to insert data</p>";
							}
						}
					 ?>
        </div>
</main>

  
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
     
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
  </footer>
  <!-- Footer -->
</section>

</body>
</html>
   