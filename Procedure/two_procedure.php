<?php
$database=mysqli_connect("localhost","root","","database");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $database->query("call add_manufacture ('$name','$address')");
}

if(isset($_POST['add_submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $manufacture_id=$_POST['manufacture_id'];
    $database->query("call add_product('$name','$price','$manufacture_id')");

}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>two procedure</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
           <h1> Manufacture table </h1>
            name: <br>
            <input type="text" name="name"> <br> <br>
            address: <br>
            <input type="text" name="address"> <br> <br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
    <br> <br>
    <form action="" method="post">
        <fieldset>
          <h1> Product Table </h1>
            name: <br>
            <input type="text" name="name"> <br> <br>
            price: <br>
            <input type="text" name="price"> <br> <br>
            Manufacture_id: <br>
            <select name="manufact" id="">
                <?php
                $manufac=$database->query("select * from manufactures");
                while(list($id,$name)=$manufac->fetch_row()){
                    echo "<option value='$id'>$name</option>";
                }
                ?>
            </select>
            <input type="submit" name="add_submit" value="add_submit">
        </fieldset>
    </form>

</body>
</html>