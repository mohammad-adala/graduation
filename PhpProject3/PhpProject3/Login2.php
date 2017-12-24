<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "select username from users where username='" . $_POST["username"] .
            "' and password='" . $_POST["password"] . "'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {

        $_SESSION['username'] = $_POST["username"];

        header("location: index.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Login & Sign Up Form Concept</title>


<!--        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>-->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/style.css">


    </head>

    <body style="background-image: url('07.jpg') ; background-repeat: repeat;">


        <div class="cotn_principal" >
            <div class="cont_centrar">
                <img src="ccc.png" alt="" width="170" height="170"  > <br/>
                <h1 style="color: whitesmoke ; font-family: cursive;">iProject</h1>
                <div style="width: 650px; height: 150px; background-color: #006666; opacity: 0.5; border-bottom: 2px;border-bottom-color: white; border-radius: 5px; border-style: groove;" ><p style="color: white; font-family: cursive; font-size: 20px;">iProject is a website that helps students find supervisors for graduation project, it also can help supervisors find students as well , the purpose of this website is to make an easy connection between students and supervisors in order to ease the first stage of graduation year .</p></div>
                
                <div class="cont_login">
                    <div class="cont_info_log_sign_up">
                        <div class="col_md_login">
                            <div class="cont_ba_opcitiy">

                                <h2>LOGIN</h2>  
                                <p>Login into your account is required to access the full functions on this site.</p> 
                                <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                            </div>
                        </div>
                        <div class="col_md_sign_up">
                            <div class="cont_ba_opcitiy">
                                <h2>SIGN UP</h2>


                                <p>If you don't have account ,you can always sign up for free .</p>

                                <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                            </div>
                        </div>
                    </div>


                    <div class="cont_back_info">
                        <div class="cont_img_back_grey">
                            <img src="Reg.jpg"/>

                        </div>

                    </div>
                    <div class="cont_forms" >
                        <div class="cont_img_back_">
                            <img src="Reg.jpg"/>

                        </div>
                        
                        <form class="cont_form_login" action="" method="POST">
                            <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
                            <h2>LOGIN</h2>
                            <input type="text" name="username" placeholder="Username" />
                            <input type="password" name="password" placeholder="Password" />
                            <input type="submit" value="Login" class="btn_login" onclick="cambiar_login()">
                        </form> 



                        <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                        <h2>SIGN IN</h2>
                        <form action="signup.php" method="POST" class="cont_form_sign_up">
                            <input type="text" name="username" placeholder="Username" />
                            <input type="password" name="password" placeholder="Password" />
                            <input type="password" name="repass" placeholder="Confirm Password" />
                            <label class="container">Student
                                <input type="radio" name="user_type" value="1">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Supervisor
                                <input type="radio" name="user_type" value="2">
                                <span class="checkmark"></span>
                            </label>
                            <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>

        <script  src="js/index.js"></script>

    </body>
</html>
