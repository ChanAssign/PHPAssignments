<?php

  $con = mysqli_connect("localhost", "root", "", "mydb");

  // to ensure that the connection is made
  if (!$con)
  {
      die("Connection failed!" . mysqli_connect_error());
  }

 
  
  ?>