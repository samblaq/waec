<?php
    include("session.php");
    include("databaseconnection.php");
    if (isset($_SESSION['Waec_ID'])) {
        header("Location: index.php");
        exit();
    }

    if (isset($_POST['login'])) {
        
        function sanitize($data){
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
        }

        if (empty($_POST['username']) || empty($_POST['password'])) {
            $errorlogin = "Invalid Username or Password";
        }else{
            $username = sanitize($_POST['username']);
            $password = sanitize($_POST['password']);

            $sql = "SELECT * FROM Admin where username = '$username'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($username == $row['username'] && $password == $row["Password"]) {
                        //Initia;izing session variables.
                        @session_start();
                        $_SESSION['Waec_Username'] = $row['username'];
                        $_SESSION['Waec_FullName'] = $row['Fname'] . " " . $row['Lname'];
                        $_SESSION['Waec_ID'] = $row['ID'];
                        $_SESSION['Waec_Fname'] = $row['Fname'];

                        $name = $row['Fname'] . " " . $row['Lname'];
                        $action = 'User has Logged-in';
                        //setting up the local timezone
                        date_default_timezone_set('UTC');
                        $date = date("Y-m-d H:i:s");
                        $sql2 = "INSERT INTO log (Username,Action,Dates) values ('$name','$action','$date')";
                        $conn->query($sql2);

                        // Redirecting To Other Page
                            header("location:admin.php"); 
                            exit();
                    } else {
                        $errorlogin = "Invalid Username or Password";
                    }
                }
            }else{
                $errorlogin = "Invalid Username or Password";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Waec | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="img/logo.png">
        <style type="text/css">
            body,html{ 
                  background: url(img/wallpaper.jpg); 
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover;
                }
        </style>
    </head>
    <body>
        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="index.php" method="post">
                <div class="body bg-gray">
                    <center>
                        <?php 
                            if (isset($errorlogin)) {
                                echo "<br><span style='color:red;'>$errorlogin</span><br>";
                            }
                        ?>
                    </center>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" name= "login" class="btn bg-olive btn-block">Sign me in</button>
                </div>
            </form>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>