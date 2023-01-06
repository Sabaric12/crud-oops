<?php
require_once('./config/DbConfig.php');
$db=new Operations();
if(isset($_GET['D_ID'])){
    global $db;
$ID=$_GET['D_ID'];
$sql="Delete from employees1 where Id=$ID";
if($db->Delete_Record($ID)){
$this->set_message('<div class="alert alert-danger">Your Record Has Been Deleted:</div>');

}
else{
    $this->set_message('<div class="alert alert-danger">Something went Wrong</div>');
}
}
?>