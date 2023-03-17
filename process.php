<?php
require('connection.php');

if(isset($_POST['submit']))
{
  

  $ename = isset($_POST['ename']) ? $_POST['ename'] : "New Emp";
  $salary =isset($_POST['salary']) ? $_POST['salary'] : 15000;
  $gender =isset($_POST['gender']) ? $_POST['gender'] : '';
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