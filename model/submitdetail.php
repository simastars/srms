<?php
if (isset($_POST['fname'])) {
    require("./conn.php");
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $oname = $_POST["oname"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $religion = $_POST["religion"];
    $state = $_POST["state"];
    $lga = $_POST["lga"];
    $caddress = $_POST["caddress"];
    $haddress = $_POST["haddress"];
    $bgroup = $_POST["bgroup"];
    $disability = $_POST["disability"];
    $sponsor = $_POST["sponsor"];
    $nextofkin = $_POST["nextofkin"];
    $kinphone = $_POST["kinphone"];
    $kinrel = $_POST["kinrel"];
    $kinaddress = $_POST["kinaddress"];
    // $regno=$_POST['regno'];
    $regno = '';
    // $level = $_POST['level'];
    $level = "1";
    try {

        $sql = "INSERT INTO studentbio VALUES(:sn,:fname, :lname, :oname,:gender,:phone,:email,:dob,:lga,:states,:religion,:caddress,:haddress,:bgroup,:disability,:sponsor,:nextofkin,:kinphone,:kinrel,:kinaddress,:regno,:levels,:profilepic)";
        $stmt = $conn->prepare($sql);
        $params = array(
            ':sn' => 0,
            ':fname' => $fname,
            ':lname' => $lname,
            ':oname' => $oname,
            ':gender' => $gender,
            ':phone' => $phone,
            ':email' => $email,
            ':dob' => $dob,
            ':lga' => $lga,
            ':states' => $state,
            ':religion' => $religion,
            ':caddress' => $caddress,
            ':haddress' => $haddress,
            ':bgroup' => $bgroup,
            ':disability' => $disability,
            ':sponsor' => $sponsor,
            ':nextofkin' => $nextofkin,
            ':kinphone' => $kinphone,
            ':kinrel' => $kinrel,
            ':kinaddress' => $kinaddress,
            ':regno' => $regno,
            ':levels' => $level,
            ':profilepic' => ''
        );
        // $stmt->bindParam($params);
        if ($stmt->execute($params)) {
            echo "Student Has succesfully been added";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
