<?php
include("config.php");
include ("header.php");



define("someUnguessableVariable", "anotherUnguessableVariable");

if (!isset($_SESSION['username']) != '') {
    header("Location: login.php");
    exit; // stop further executing, very important
}
?>
<html>

    <head>
        <title>Login Page</title>
        <link href="indexcss.css" rel="stylesheet" type="text/css"/>
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
                        <input name="s1" placeholder="Student 1" value="" /><br/><br/>
                        <input name="s2" placeholder="Student 2" value="" /><br/><br/>
                        <input name="s3" placeholder="Student 3" value="" /><br/><br/>
                        <input name="s4" placeholder="Student 4" value="" /><br/><br/><br/>
                        <button type="submit" value="" >Create Group</button> 

                    </form>
                </td>
                <td></td>
                <td>
                    <form>
                        <h2>Create Project</h2><br/>
                        <input name="pname" placeholder="Project name" value="" /><br/><br/>
                        <textarea name="desc" type="text" placeholder="Project Descreption" value="" style="font-size: 16px; font-family: cursive; width: 197px; height: 150px;" ></textarea><br/><br/>
                        <select style="width: 200px ; height: 30px ; font-size: 16px; font-family: cursive;">
                            <option>- Select Group -</option>
                            <option>a</option>
                            <option>b</option>

                        </select><br/><br/><br/>
                        <button type="submit" value="" >Create Project</button>
                    </form>
                </td>
                <td></td>
            </tr>
        </table>


    </body>
</html>