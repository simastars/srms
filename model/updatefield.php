<?php
if(isset($_POST['field'])){
    require("./conn2.php");
    $field=$_POST['field'];
    $value=$_POST['value'];
    $email = $_POST['email'];
    if(!empty($email)){
        $sql = "UPDATE studentbio SET $field='$value' WHERE mail='$email'";
        $query = $conn->query($sql);
        if($query){
            echo "success";
        }else{
            echo $mysqli->error;
        }
    }
    // echo $email;
    
}