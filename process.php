<?php
require('connection.php');

if(isset($_POST['submit']))
{
  

  $ename = $_POST['ename'];
  $salary =$_POST['salary'];
  $gender =$_POST['gender'];
  $email = isset($_POST['email']) ? $_POST['email'] : '';


  
  $sql ="insert into employee(name,gender,email,salary)
      values('$ename' , '$gender', '$email','$salary') ";

  if ($conn->query($sql) === TRUE) {
      include('database.php');
   }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
 
}
  
?>