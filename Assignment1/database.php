<?php
  
  class Database{
    
    private $connection;
    
    function __construct(){
      
      $this->connect_db();
    }
    
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'mydb');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
      }
    }
    public function create($fname,$lname,$email,$password,$address, $phNumber,$city,$grades){
      $sql = "INSERT INTO student (fname, lname, email,password,address, phNumber,city,grades) VALUES ('$fname', '$lname', '$email','$password','$address', '$phNumber','$city','$grades')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read($id=null){
		    $sql = "SELECT * FROM student";
		    if($id){
          $sql .= " WHERE id=$id";
        }
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>
