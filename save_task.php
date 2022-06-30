<?php include('db.php'); ?>
<?php 
   
   if(isset($_POST['save_task'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $query="INSERT INTO task(title,description) VALUES('$title','$description')";
    $result=mysqli_query($connect,$query);
    if(!$result){
        die('Querry failded');
    }
    $_SESSION['message']='Task saved';
    $_SESSION['message_color']="success";
    header('Location:index.php');

}

?>