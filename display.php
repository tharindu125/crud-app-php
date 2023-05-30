<?php  

 include 'connect.php';

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
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a></button>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Password</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                
                    $sql = " select * from `user`";
                    $result = mysqli_query($Connectdb, $sql);
                    if ($result){
                        while ($row = mysqli_fetch_assoc($result)){
                            $id = $row['user_id'];
                            $fName = $row['firstName'];
                            $lName = $row['lastName'];
                            $email = $row['email'];
                            $password = $row['password'];
                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$fName.'</td>
                                <td>'.$lName.'</td>
                                <td>'.$email.'</td>
                                <td>'.$password.'</td>
                                <td>
                                    <button class = "btn btn-primary"><a href = "update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                    <button class = "btn btn-danger"><a href = "delete.php?deleteid='.$id.'" class = "text-light">Delete</a></button>
                                </td>
                            </tr>';
                        }
                    }

                ?>
               
              
            </tbody>
        </table>
    </div>
  </body>

</html>