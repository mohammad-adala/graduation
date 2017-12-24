<?php
include("config.php");
include "getid.php";




define("someUnguessableVariable", "anotherUnguessableVariable");

if (!isset($_SESSION['username'])) {
    header("Location: Login2.php");
    exit; // stop further executing, very important
}
if (!empty($_POST)) {
    if (isset($_POST['pname'])) {
        $conn = $db;
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       
        $sql = "INSERT INTO `project`(`id`, `name`, `desc`, `max_std`, `group_id`) VALUES
                 ('" . rand(0, 5000) . "','" . $_POST['pname'] . "','" . $_POST['desc'] . "','" . $_POST['max_stu'] . "','" . getid($_POST['s3']).  "')";
        $error = "";

        if ($conn->query($sql) === TRUE) {
         
            header("Location: index.php");
        } else {
            $error = $conn->error;
            echo $error;
        }

        $conn->close();
    }
}
?>