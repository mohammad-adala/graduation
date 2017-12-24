<?php
include("config.php");
include ("header.php");



define("someUnguessableVariable", "anotherUnguessableVariable");

if (!isset($_SESSION['username']) != '') {
    header("Location: Login2.php");
    exit; // stop further executing, very important
}
if (!empty($_POST)) {
    if (isset($_POST['gname'])) {
        $conn = $db;
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "INSERT INTO `groups`( group_id, group_name, student1,student2,student3,student4) VALUES
                 ('" . rand(0, 5000) . "','" . $_POST['gname'] . "','" . $_POST['s1'] . "','" . $_POST['s2'] . "','" . $_POST['s3'] . "','" . $_POST['s4'] . "')";
        $error = "";

        if ($conn->query($sql) === TRUE) {
            echo ""
            . "<div class='alert'>
  <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
  done
</div>";
        } else {
            $error = $conn->error;
            echo $error;
        }

        $conn->close();
    }
}
?>
<html>

    <head>
        <title>Home Page</title>
        <link href="indexcss.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">

    </head>

    <body bgcolor = "#FFFFFF">

        <table class="content">
            <tr>
                <td colspan="4">
                    <div>

                    </div>
                </td>
            </tr>
            <tr class="forms">

                <td></td>
                <td>
                    <form method="POST" action="">
                        <h2>Create Group</h2><br/>
                        <input name="gname" placeholder="Group name" value="" /><br/><br/>
                        <input name="s1" placeholder="Student 1" value=""  /><br/><br/>
                        <input name="s2" placeholder="Student 2" value="" /><br/><br/>
                        <input name="s3" placeholder="Student 3" value="" /><br/><br/>
                        <input name="s4" placeholder="Student 4" value="" /><br/><br/><br/>
                        <button type="submit" value="" >Create Group</button> 

                    </form>
                </td>
                <td></td>
                <td>
                    <form action="createproject.php" method="POST">
                        <h2>Create Project</h2><br/>
                        <input name="pname" placeholder="Project name" value="" /><br/><br/>
                        <textarea name="desc" type="text" placeholder="Project Descreption" value="" style="font-size: 16px; font-family: cursive; width: 197px; height: 150px;" ></textarea><br/><br/>
                        <input name="group" placeholder="Group name" value="" /><br/><br/>
                        <input name="max_stu" placeholder="maximum" value="" /><br/><br/><br/>
                      
                        <button type="submit" value="" >Create Project</button>
                    </form>
                </td>
                <td></td>
            </tr>
        </table>


    </body>
</html>