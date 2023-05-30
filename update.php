<?php 

    include_once 'connect.php';
    $id=$_GET['updateid'];
    if(isset($_POST['submit'])){
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "update `user` set user_id=$id, firstName='$firstName', lastName='$lastName', email='$email', password='$password' where user_id=$id"; 
        $result = mysqli_query($Connectdb, $sql);
        if ($result){
            header('location:display.php');            
        }else{
          die(mysqli_error(($Connectdb)));
        }
    }

?>


<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
    <div class='container my-5'>
        <form method="post">
            <div class="mb-3">
                <label  class="form-label">First Name</label>
                <input type="text" class="form-control" name='fName' placeholder="Enter Your first Name" autocomplete="off">
            </div>

            <div class="mb-3">
                <label  class="form-label">Last Name</label>
                <input type="text" class="form-control" name='lName' placeholder="Enter Your Last Name" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name='email' placeholder="Enter Your e-mail" autocomplete="off">
            </div>

            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" name='password' placeholder="Enter Your Password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            
        </form>
    </div>
  </body>

</html>