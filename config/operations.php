<?php
 require_once('./config/DbConfig.php');
 $db=new Operations();
class Operations extends DbConfig
{
    //store record
    public function Store_Record()
    {
        global $db;
        if (isset($_POST['btn_save'])) {
            $FirstName = $db->check($_POST['First']);
            $LastName = $db->check($_POST['Last']);
            $Email = $db->check($_POST['Email']);
            $Password = $db->check($_POST['Password']);
            if ($this->insert_record($FirstName, $LastName, $Email, $Password)) {
                echo '<div class="alert alert-success">Your Record has been Saved :)</div>';
            } else {
                echo '<div class="alert alert-danger">Failed </div>';
            }
        }
    }
//insert record
    function insert_record($a, $b, $d, $e)
    {
        global $db;
        header('Location:view.php');
        $query = "insert into employees1(FirstName,LastName,Email,Password)values('$a','$b','$d','$e')";
        $result = mysqli_query($db->connection, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


//view record
    public function view_record()
    {

        global $db;
        $query = "select * from employees1";
        $result = mysqli_query($db->connection,$query);
        return $result;
    }
//Get Particular Record
public function get_record($id){
        global $db;
        $sql="select * from employees1 where id='$id'";
        $data=mysqli_query($db->connection,$sql);
return $data;
    }
//Update Record
public function update()
{
    global $db;

    if (isset($_POST['btn_update'])) {
        $id = $db->check($_POST['ID']);
        $FirstName = $db->check($_POST['First']);
        $LastName = $db->check($_POST['Last']);
        $Email = $db->check($_POST['Email']);
        $Password = $_POST['Password'];
        $sql = "UPDATE  employees1 set FirstName='$FirstName',LastName='$LastName',Email='$Email',Password='$Password' where id='$id'";
        $result = mysqli_query($db->connection, $sql);
        header('Location:view.php');
        if ($this->update_record($id, $FirstName, $LastName, $Email, $Password)) {
            $this->set_messsage('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
        } else {
            $this->set_messsage('<div class="alert alert-danger"> something went wrong</div>');
        }
    }
}


//set session message
public function set_message($msg)
       {
            if (!empty($msg)) {
                $_SESSION['Message'] = $msg;
            } else {
                $msg = "";
            }
        }

//Display session message
public function display_message()
        {
            if (isset($_SESSION['Message'])) {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        }
        public function Delete_Record($id)
        {
            global $db;
            header('location:view.php');
            $query = "delete from employees1 where ID='$id'";
            $result = mysqli_query($db->connection, $query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
}
?>