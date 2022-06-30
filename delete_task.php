<?php
include ("db.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "DELETE FROM task WHERE id=$id";
    $result=mysqli_query($connect,$query);
    if(isset($result)){
    header('LOCATION:index.php');
    }else {
        die('Query Failed');
    }

}
?>