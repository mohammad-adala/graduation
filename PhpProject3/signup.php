  <?php
  session_start();
  
  if (!empty($_POST)) {
        $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projects";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $a = $_POST['usertype'];
    echo $a;
    $sql = "INSERT INTO `users`( id, username, password, usertype) VALUES
                 ('" . rand(0, 5000)  . "','" . $_POST['username'] . "','" . $_POST['password'] .  "','" . $_POST['usertype'] . "')";
    $error = "";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username']=$_POST['username'];
        if($a == 1)
        header("Location: studentdetails.php");
        if($a == 2)
        header("Location: supervisordetails.php");
    } else {
        $error = $conn->error;
        echo "$error";
    }

  $conn->close();}

// put your code here
        ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="signup">   
            <h1>Sign Up for Free</h1>

            <form action="" method="post">

                <div class="top-row">


                    <div class="field-wrap">
                        <label>
                            Username<span>*</span>
                        </label>
                        <input type="text" name="username" required autocomplete="off"/>
                    </div>
                </div>



                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Repeat Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        <input type="radio" name="usertype" value="1" > Student<br>
                         <input type="radio" name="usertype" value="2"> Supervisor<br>
                    </label>

                </div>

                <button type="submit" >Sign-up</button>

            </form>

        </div>


      
    </body>
</html>
