<?php

session_start();
include ('includes/header.php');

require 'database.php';
?>



  <div class="container mt-4">
  <?php

     include('message.php');
  ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4> Student Details
            <a href="create.php" class="btn btn-primary float-end">Add Student</a>
            </h4>
          </div>
          <div class="card-body">

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID </th>
                <th> Image </th>
                <th>Name </th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Grades</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $query= "SELECT * FROM students";
              $query_run= mysqli_query($con,$query);

              if(mysqli_num_rows($query_run)>0){

                foreach($query_run as $student)
                {
                  ?>
                  <tr>
                <td><?= $student['id']; ?></td>
                <td><img src=" <?= $student['std_img']; ?> " width=100px height=100px  ></td>
                <td><?= $student['name']; ?></td>
                <td><?= $student['email']; ?></td>
                <td><?= $student['password']; ?></td>
                <td><?= $student['address']; ?></td>
                <td><?= $student['phNumber']; ?></td>
                <td><?= $student['city']; ?></td>
                <td><?= $student['grades']; ?></td>
                <td>
                <a href="view.php?id=<?= $student['id']; ?>" class="btn btn-info btnbhgfx-sm"> View</a>
                  <a href="edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm"> Edit</a>
                  
                  <form action="code.php" method="POST" class="d-inline">
                  <button type="submit" name="del_student" value= "<?= $student['id']; ?>" class="btn btn-danger btn-sm"> Delete</button>
 
                </form>

              </tr>
              <?php
                }
              }
              else{
                echo "<h5> No Record Found</h5>";
              }

              ?>
              
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer  class="text-center text-white " style="background-color: #0a4275;margin-top:500px;">
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
  