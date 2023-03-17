<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Website</title>
</head>
<body>
<center><form method="post" action="/MyPrj/process.php">
  <table border="2" heigth='300' width='300'>
    <tr>
      <td>Emp name</td>
      <td><input type="text" name="ename"
        placeholder="Enter Emp Name"  /></td>
    </tr>
    <tr>
      <td>gender</td>
      <td>
      <input type="radio" name="gender" 
        value="male" required>male</input>
      <input type="radio" name="gender" 
        value="female" required>female</input>
      </td>
    </tr>
    <tr>
      <td>Enter Emp salary</td>
      <td><input type="text" name="salary" required></td>
    </tr>
    <tr>
        <td>Enter Emp Email</td>
        <td><input type="text" name="email" required/></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="submit"></td>
      <td><a href="/MyPrj/database.php">Show Data</a></td>
    </tr>
 </table>
</form>
</center>
</body>
</html>
<!--<?php include('database.php'); 
?>!-->
<!-- method="post" action=="process.php" !-->