<?php
require_once('./config/DbConfig.php');
$db=new Operations();
$db->view_record();
$id=$_GET['V_ID'];
$result=$db->get_record($id);
$data=mysqli_fetch_assoc($result);
$FirstName=$data['FirstName'];
$LastName=$data['LastName'];
$Email=$data['Email'];
$Password=$data['Password'];
if(isset($_POST['view_btn'])){
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $password=$_POST['password'];
    $sql="update employees1 set id=$id,FirstName='$FirstName',Lastname='$LastName',Email='$Email',password='$password' where id=$id";
    $result=mysqli_query($db,$sql);
    if($result){
//echo "viewed successfully";

    }else{
        die(mysqli_query($db));
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Crud Operations in the Php using OOPS</title>
</head>
<body class="bg-dark">
<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>View Record</h1>
                </div>
                <?php $db->Store_Record();?>
                <div class="card-body">
                    <button class="btn btn-success btn-sm my-5"><a href="view.php" class="text-light" style="text-decoration:none">Back</a></button>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><?php echo $id; ?></th>
                            <td>'<?php echo $FirstName; ?> '</td>
                            <td>' <?php echo $LastName; ?>'</td>
                            <td>'<?php echo $Email; ?>'</td>
                            <td>'<?php echo $Password; ?>'</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
