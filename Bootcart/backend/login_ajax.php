<?php 
  include 'conn.php';
  $data=$_POST;
  $username=$data['username'];
  $password=$data['password'];
  $sql = "select * from login where username='$username' and password='$password'";
  $result =$conn->query($sql);
  $row = $result->fetch_assoc();
  if($row){
      session_start();
      $_SESSION['id']=$row['id'];
      $_SESSION['username']=$row['username'];
      echo'success';
  }

?>