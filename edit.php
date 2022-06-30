<?php
include('db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id =$id";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];
    }
}

    if(isset($_POST['update'])){
        $id=$_GET['id'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        echo $id;
        echo $title;
        echo $description;
        $query="UPDATE task set title='$title',description='$description' WHERE id=$id";
        $result=mysqli_query($connect,$query);
        header("Location:index.php");

    }
?>

<?php include('includes/header.php') ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo$id?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Update Title" class="form-control" value="<?php echo $title ?>"> </input>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" rows="2" class="form-control"><?php echo $description ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update"> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>




<?php include('include/footer.php') ?>