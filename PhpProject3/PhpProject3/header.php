


<html>

    <head>
        <title>Login Page</title>
        <link href="indexcss.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">

    </head>

    <body bgcolor = "#FFFFFF">
        <table class="page">
            <tr class="state">
                <td>
                    <div class="welcome">Welcome : <?php 
                    session_start();
                    echo $_SESSION['username'] ?> </div>
                    <div class="out"> <a href="logout.php">logout</a></div>
                </td>

            </tr> <!--  -->
            <tr >
                <td id="headerlogo">
                    <div ><br/> <br/> <br/> logo here <br/> <br/> <br/> </div>
                </td>
            </tr> <!--  -->
            <tr>
                <td>
                    <ul class="bar">
                        <li><a href="index.php">Home page</a></li>
                        <li><a href="search.php">Search</a></li>
                        <li><a href="requests.php">Requests</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="helppage.php">Help</a></li>
                    </ul>
                </td></tr> <!--  -->
            <tr></tr> <!--  -->
        </table>



    </body>
</html>

