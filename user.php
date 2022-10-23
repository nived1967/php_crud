<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $hobbies = $_POST['hobbies'];

$sql = "insert into `crud` (name,phoneno,email,hobbies) values('$name','$phoneno','$email','$hobbies')";
$result=mysqli_query($con,$sql);

if($result)
{
    header('location:display.php');
}
else{
    die(mysqli_error($con));
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
   <div class="container my-5">

   <form method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
  </div>
  <div class="mb-3">
    <label for="phonenumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="phonenumber" name="phoneno">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
  </div>
  <div class="mb-3">
    <label for="hobbies" class="form-label">Hobbies</label>
    <input type="text" class="form-control" id="hobbies" aria-describedby="hobbies" name="hobbies">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

   </div>
  </body>
</html>