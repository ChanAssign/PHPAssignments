<?php
	require_once('database.php');
	$res = $database->read();
?>
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
      <style>
        footer{
    margin-bottom:0;
    padding-bottom:0;
    margin-top:500px;
}
        </style>
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
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>#</th>
				<th>Full Name</th>
				<th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Grades</th>
			</tr>
			<?php
				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
						<td><?php echo $r['email'] ?></td>
            <td><?php echo $r['password'] ?></td>
            <td><?php echo $r['address'] ?></td>
            <td><?php echo $r['phNumber'] ?></td>
            <td><?php echo $r['city'] ?></td>
            <td><?php echo $r['grades'] ?></td>
					</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>
<section class="">
  <!-- Footer -->
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
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2), margin-bottom:0;">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">CRUDInPHP.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
</body>
</html>
