<?php
if (isset($_POST['email'])) {
    require("conn.php");

    $email = $_POST["email"];
    
    try {

        // $deleteValue = $_POST["email"]; // Replace with the value you want to match and delete

        $sql = "DELETE FROM studentbio WHERE mail = :deleteValue OR phone = :deleteValue";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":deleteValue", $email, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $rowCount = $stmt->rowCount();

            if ($rowCount > 0) {
                echo "Student is deleted successfully.";
            } else {
                echo "No student with ".$email." email/phone has been deleted.";
            }
        } else {
            echo "Error executing the DELETE query.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
