<?php
require_once('./config/DbConfig.php');
$db=new Operations();
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
                    <h1>Registration Form</h1>
                </div>
                <?php $db->Store_Record();?>
                    <div class="card-body">
                        <form method="post">
                            <input type="text" name="First" placeholder="FirstName" class="form-control mb-2" required>
                            <input type="text" name="Last" placeholder="LastName" class="form-control mb-2" required>
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2" required>
                            <input type="password" name="Password" placeholder="Password" class="form-control mb-2" required>
                    </div>
                <div class="card-footer">
                    <button class="btn btn-success" name="btn_save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
