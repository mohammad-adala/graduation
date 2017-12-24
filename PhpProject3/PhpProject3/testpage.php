<?php
include "config.php";
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
<?php


session_start();


    // username and password sent from form 

    
    $sql = "select id from test where id='1'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);
 
    // If result matched $myusername and $mypassword, table row must be 1 row

  
?>  <script>
        function sos()
        {
        document.getElementById('f1').style.display= 'none' ; 
        document.getElementById('f2').style.display='';
        document.getElementById('x').style.display='none';
        document.getElementById('xx').style.display='';
            
        }
        function soso()
        {
        document.getElementById('f1').style.display= '' ; 
        document.getElementById('f2').style.display='none';
        document.getElementById('x').style.display='';
        document.getElementById('xx').style.display='none';
            
        }
        </script>
        <form id="f1" name="f1" method="POST" style="display: none ;">
            
            <input type="text" name="s" value="s" size="50" readonly="readonly" /><br/>
            <input type="text" name="ss" value="ss" size="50" readonly="readonly" /><br/>
            <input type="text" name="sss" value="sss" size="50" readonly="readonly" /><br/>
            
        </form>
        <form id="f2" name="f2">
            <input type="text" name="c" value="c" size="50"  /><br/>
            <input type="text" name="cc" value="cc" size="50"  /><br/>
            <input type="text" name="ccc" value="ccc" size="50"  /><br/>
            
        </form>
        
        <input id="x" type="submit" value="switch" name="x" onclick="sos()" />
        <input id="xx" type="submit" value="switch" name="xx" style="display: none ;" onclick="soso()" />
        
       







        




    </body>
</html>
