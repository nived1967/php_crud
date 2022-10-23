<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">

    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Email</th>
      <th scope="col">Hobbies</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);

    if($result)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $name=$row['name'];
            $phoneno=$row['phoneno'];
            $email=$row['email'];
            $hobbies=$row['hobbies'];

            echo '
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$phoneno.'</td>
            <td>'.$email.'</td>
            <td>'.$hobbies.'</td>
            <td>
                <button class="btn btn-success"><a href="update.php?updateId='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteId='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>
            ';
        }
    }

    ?>
  </tbody>
</table>

    </div>
</body>
</html>