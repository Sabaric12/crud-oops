<?php
require_once('./config/DbConfig.php');
$db=new Operations();
$db->update();
$id=$_GET['U_ID'];
$result=$db->get_record($id);
$data=mysqli_fetch_assoc($result);
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
                    <h1>Update Record</h1>
                </div>
                <?php $db->Store_Record();?>
                <div class="card-body">
                    <form method="post">
                        <input type="hidden" name="ID" value="<?php echo $data['id']?>">
                        </div>
                        <div class="form-group">
                            <label>FirstName</label>
                        <input type="text" name="First" placeholder="FirstName" class="form-control mb-2" required value="<?php echo $data['FirstName'] ?>">
                        </div>
                        <div class="form-group">
                        <label>LastName</label>
                        <input type="text" name="Last" placeholder="LastName" class="form-control mb-2" required value="<?php  echo $data['LastName'] ?>">
                        </div>
                <div class="form-group">
                            <label>Email</label>
                        <input type="email" name="Email" placeholder="Email" class="form-control mb-2" required value="<?php  echo $data['Email'] ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                        <input type="password" name="Password" placeholder="Password" class="form-control mb-2" required value="<?php  echo $data['Password'] ?>">
                </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_update">Update</button>
                        </div>
                </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>
