<?php
$db=mysqli_connect("localhost","root","","database");
if(isset($_POST['btnsubmit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $db->query("call data_add1('$name','$email','$contact','$address')");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
       name: <br>
       <input type="text" name="name"> <br> <br>
       email: <br>
       <input type="email" name="email"> <br> <br>
       contact: <br>
       <input type="text" name="contact"><br> <br>
      address: <br>
      <input type="text" name="address"> <br> <br>
      <input type="submit" name="btnsubmit" value="Submit">
    </form>

   
</body>
</html>