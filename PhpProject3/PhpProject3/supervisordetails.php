<?php
include "config.php";
session_start();
echo $_SESSION['username'];
if (!empty($_POST)) {


    // Create connection
    $conn = $db;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $fuln = $_POST['fname'] . " " . $_POST['mname'] . " " . $_POST['lname'];
    echo $fuln;
    $sql = "INSERT INTO `user_details_supervisor`(`fullname`, `degree`, `major`, `specific_major`, `phon_num`,  `max_project`, `username`) VALUES
                ('" . $fuln . "','" . $_POST['degree'] . "','" . $_POST['major'] . "','" . $_POST['smajor'] . "','" . $_POST['phone'] . "','" . $_POST['maxp'] . "','" . $_SESSION['username'] . "')";
    $error = "";

    if ($conn->query($sql) === TRUE) {


        header("Location: index.php");
    } else {
        $error = $conn->error;
        echo "$error";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>SignUp ..... Done  </h3><br/>
        <h3>Please fill in your supervisor information.</h3><br/>

        <form action="" method="POST">

            <input type="text" name="fname" placeholder="First Name" value=""><br/>
            <input type="text" name="mname" placeholder="Middle Name" value=""><br/>
            <input type="text" name="lname" placeholder="Last Name" value=""><br/>
            <input type="text" name="degree"  placeholder="Degree"> <br/>
            <input type="text" name="phone" placeholder="Phone Number" value=""><br/>
            <input type="text" name="major" placeholder="Major" value=""><br/>
            <input type="text" name="smajor" placeholder="Specific Major" value=""><br/>
            <input type="text" name="maxp" placeholder="Maximum Projects" value=""><br/>
            <br/>
            <input type="submit" value="Finish up"><br/>



        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
