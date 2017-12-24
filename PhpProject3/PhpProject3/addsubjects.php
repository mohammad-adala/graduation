<?php
include "config.php";

 session_start();
 echo $_SESSION['username'];
  if (!empty($_POST)) {
       

    // Create connection
    $conn = $db ; 
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    echo $fuln;
    $sql = "INSERT INTO `subjects`VALUES
                ('" .$_SESSION['username'] ."','" .$_POST['sub'] . "')";
    $error = "";
    
   if ($conn->query($sql) === TRUE) {
       
        
        header("Location: addsubjects.php");
        
    } else {
        $error = $conn->error;
        echo "$error";
    }

  $conn->close();}
  
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
        <div style="display: block ; float: contour; align-self: center ;">
            <form action="" method="post">
            <input type="text" name="sub" placeholder="Subject" value="" /><br/>
            <input type="submit" name="addsub" value="Add Subject" /> <br/>
        </form>
        <button type="submit"  onclick="window.location = 'index.php'">Finish</button>
        </div>
            <?php
        // put your code here
        ?>
    </body>
</html>
