<?php
if (isset($_POST['email'])) {
    require("conn.php");
    $email = $_POST["email"];
    $output='';
    try {
        // $deleteValue = $_POST["email"]; // Replace with the value you want to match and delete
        $sql = "SELECT * FROM studentbio WHERE mail = :deleteValue OR phone = :deleteValue";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":deleteValue", $email, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $rowCount = $stmt->rowCount();

            if ($rowCount > 0) {
                $record = $stmt->fetch();
                // var_dump($record);
                // echo "Student is deleted successfully.";
                $output .='<table class="table table-bordered table-dark">
                <tbody>
                <tr>
                    <th scope="row">Registration Number</th>
                    <td data-field="regno">'.$record['regno'].'</td>
                    <td>Current Level</td>
                    <td data-field="currentLevel">'.$record['currentLevel'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Full Name</th>
                    <td data-field="fname">'.$record['fname'].'</td>
                    <td data-field="sname">'.$record['sname'].'</td>
                    <td data-field="oname">'.$record['oname'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Gender</th>
                    <td data-field="dob">'.$record['gender'].'</td>
                    <th>Phone Number</th>
                    <td data-field="phone">'.$record['phone'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td data-field="mail">'.$record['mail'].'</td>
                    <th>D.O.B</th>
                    <td data-field="dob">'.$record['dob'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">State</th>
                    <td data-field="state">'.$record['state'].'</td>
                    <th>L.G.A</th>
                    <td data-field="placeofbirth">'.$record['placeofbirth'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Religion</th>
                    <td data-field="religion">'.$record['religion'].'</td>
                    <th>Blood G</th>
                    <td data-field="bloodgroup">'.$record['bloodgroup'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Disability</th>
                    <td data-field="disability">'.$record['disability'].'</td>
                    <th>Sponsor</th>
                    <td data-field="sponsor">'.$record['sponsor'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Home Address</th>
                    <td colspan="3" data-field="homeaddress">'.$record['homeaddress'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Contact Address</th>
                    <td colspan="3" data-field="contactaddress">'.$record['contactaddress'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Next of Kin Name</th>
                    <td data-field="nk_name">'.$record['nk_name'].'</td>
                    <th>Phone Number</th>
                    <td data-field="nk_phone">'.$record['nk_phone'].'</td>
                  </tr>
                  <tr>
                  <th>Relationship</th>
                    <td data-field="nk_relationship">'.$record['nk_relationship'].'</td>
                    <th scope="row">Next of Kin Address</th>
                    <td data-field="nk_address">'.$record['nk_address'].'</td>
                  </tr>
                </tbody>
              </table>';

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
