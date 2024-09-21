<?php
include'connect.php';
if(isset($_GET['deleteNo'])){
    $No=$_GET['deleteNo'];

    $sql="delete from crud where No=$No";
    $result=mysqli_query($con, $sql);
    if($result){
       // echo"Deleted successfully";
       header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}

?>