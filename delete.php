<?php 

    include 'connect.php';
    if (isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "delete from `user` where user_id = $id";
        $result = mysqli_query($Connectdb, $sql);
        if($result){
            header('location:display.php');  
        }else{
            die(mysqli_error($Connectdb));
        }
    }

?>