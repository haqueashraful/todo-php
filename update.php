<?php

include 'connect.php';

$id=$_GET['id'];

$sql="SELECT * FROM `phptest` WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "UPDATE `phptest` SET `name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

    <title>Php test</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
        <!-- Name -->
        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
        <div class="row mb-3">
                <div class="col-sm-12">
                    <input name="name" type="text" value="<?php echo $name; ?>"  class="form-control" autocomplete="off" id="inputName3">
                </div>
            </div>
        <!-- Email -->
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <input name="email" type="email" value="<?php echo $email; ?>" class="form-control" autocomplete="off" id="inputEmail3">
                </div>
            </div>
            <!-- Mobile -->
            <label for="inputMobile3" class="col-sm-2 col-form-label">Mobile</label>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <input name="mobile" type="phone" value="<?php echo $mobile; ?>" class="form-control" autocomplete="off" id="inputMobile3">
                </div>
            </div>
            <!-- Password -->
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <input name="password" type="password" value="<?php echo $password; ?>" class="form-control" autocomplete="off" id="inputPassword3">
                </div>
            </div>
            <div class=" w-100 d-flex align-items-center justify-content-center">
            <button name="submit" type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>


</body>

</html>