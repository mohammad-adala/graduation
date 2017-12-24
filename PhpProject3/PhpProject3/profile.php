<?php 
include "header.php";
include "config.php";


if(!isset($_SESSION['username'])){
     header("Location: Login2.php");
    exit;
}
$sql = "select * from user_details_student where username='" . $_SESSION["username"] . "'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $array = explode(" ", $row['fullname']);
    echo "<table id='t1'>
            <tr>
                <td>
                    FullName :
                </td>
                <td>
                    ". $row['fullname'] ."
                </td>
            </tr>
            <tr>
                <td>
                    E-Mail :
                </td>
                <td>
                   ".  $row['email'] ."
                </td>
            </tr>
            <tr>
                <td>
                    Collage :
                </td>
                <td>
                    ".  $row['collage'] ."
                </td>
            </tr>
            <tr>
                <td>
                    Department :
                </td>
                <td>
                    ".  $row['department'] ."
                </td>
            </tr>
              <tr>
                <td>
                   <input type='submit' value='Edit Profile' name='edit' onclick='swtof()'/>
                </td>
               
            </tr>
 
            
        </table><br/>    
            
";
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

  
//
//    $sql = "select username from users where username='" . $_POST["username"] .
//            "' and password='" . $_POST["password"] . "'";
//    $result = mysqli_query($db, $sql);
//    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//
//
//    $count = mysqli_num_rows($result);
//
//    // If result matched $myusername and $mypassword, table row must be 1 row
//
//    if ($count == 1) {
//
//        $_SESSION['username'] = $_POST["username"];
//
//        header("location: index.php");
//    } else {
//        $error = "Your Login Name or Password is invalid";
//    }
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
        <form id="f1" action="" method="post" style="display: none;" >
            <input type="text" name="fname" placeholder="First Name" value="<?php echo $array[0]; ?>"><br/>
            <input type="text" name="mname" placeholder="Middle Name" value="<?php echo $array[1]; ?>"><br/>
            <input type="text" name="lname" placeholder="Last Name" value="<?php echo $array[2]; ?>"><br/>
            <input type="text" name="email" placeholder="E-mail" value="<?php echo $row['email']; ?>"> <br/>
            <input type="text" name="collage" placeholder="collage Name" value="<?php echo $row['collage']; ?>"><br/>
            <input type="text" name="department" placeholder="department Name" value="<?php echo $row['department']; ?>"><br/> 
            
            <br/>
            
            
            <br/>   <br/>   <br/>
            <input type="submit" value="Save" onclick="swtot()"><br/>
            
        </form>
        <script>
            function swtof(){
                document.getElementById('t1').style.display = "none" ;
                document.getElementById('f1').style.display = "";
            }
            function swtot(){
                document.getElementById('t1').style.display = "" ;
                document.getElementById('f1').style.display = "none";
            }
        </script>
        
       
        <?php
        // put your code here
        ?>
    </body>
</html>
