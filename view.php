<?php
require_once('./config/DbConfig.php');
$db=new Operations();
$result=$db->view_record();
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
        <div class="col">
<div class="card mt-5">
    <div class="card-header">
        <h1 class="text-center text-dark">Employees Record</h1>
        <button class="btn btn-success"><a href="Index.php" class="text-light" style="text-decoration: none"> Add Employee  </a>  </button>
    </div>
  <div class="card-body">
      <?php
      $db->display_message();
      $db->display_message();
      ?>
      <table class="table table-bordered">
          <tr>
              <td style="width:10%">ID</td>
              <td style="width:20%">First Name</td>
              <td style="width:20%">Last Name</td>
              <td style="width:25%">Email</td>
              <td style="width:20%">Password</td>
              <td style="width: 20% colspan=2">Operations</td>
          </tr>
          <tr>
              <?php
              while ($data=mysqli_fetch_assoc($result)){
?>
                  <td><?php echo $data['id'] ?></td>
                  <td><?php echo $data['FirstName'] ?></td>
                  <td><?php echo $data['LastName'] ?></td>
                  <td><?php echo $data['Email'] ?></td>
                  <td><?php echo $data['Password'] ?></td>
              <td><a href="edit.php?U_ID=<?php echo $data['id'];?>" class="btn btn-success">Edit</a></td>
              <td>   <a href="del.php?D_ID=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
                  <td><a href="View.php?V_ID=<?php echo $data['id'];?>" class="btn btn-primary">View</a> </td>
          </tr>
          <?php
          }
          ?>
      </table>
  </div>
</div>
        </div>
    </div>
    </div>
</body>
</html>