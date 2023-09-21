<?php
session_start();
if (isset($_POST['email'])) {
    require("conn.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $output='';
    try {
        // $deleteValue = $_POST["email"]; // Replace with the value you want to match and delete
        $sql = "SELECT * FROM admin WHERE username = :mail AND password = :password";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":mail", $email, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $rowCount = $stmt->rowCount();

            if ($rowCount > 0) {
                $record = $stmt->fetch();
                $_SESSION['loggedin']=true;
                echo "true";
            } else {
                $output = "record-error";
            }
        } else {
            $output= "Error executing the DELETE query.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    echo $output;
}
