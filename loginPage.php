<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shourtcut icon" href="Images/MCH_logo.ico">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <script src="js1.js"></script>
        <title>loginPage</title>
        <style>

        </style>
    </head>
    <body>
    <nav>
                <div class="navbar" id="navbar" align="center" style="font-size:0.7em;padding-top: -5px;">
                    <a href="HomePage.php" class="homeBtn active" >
                        <img src="Images/logo.png" width="16px" id="logo"/>
                        Home
                    </a>
                    <a href="RegPage.php" >Register</a>
                    <a href="loginPage.php" class="active">LogIn</a>
                    <a href="aboutUs.php" >About</a>
                
                </div>
            </nav>

        <br> <br>

        <div class="loginContainer">
            <style type="text/css">

                .login-box {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 400px;
                    padding: 40px;
                    transform: translate(-50%, -50%);
                    background: rgba(0,0,0,.5);
                    box-sizing: border-box;
                    box-shadow: 0 15px 25px rgba(0,0,0,.6);
                    border-radius: 10px;
                }

                .login-box h2 {
                    margin: 0 0 30px;
                    padding: 0;
                    color: #fff;
                    text-align: center;
                }

                .login-box .user-box {
                    position: relative;
                }

                .login-box .user-box input {
                    width: 100%;
                    padding: 10px 0;
                    font-size: 16px;
                    color: #fff;
                    margin-bottom: 30px;
                    border: none;
                    border-bottom: 1px solid #fff;
                    outline: none;
                    background: transparent;
                }
                .login-box .user-box label {
                    position: absolute;
                    top:0;
                    left: 0;
                    padding: 10px 0;
                    font-size: 16px;
                    color: #fff;
                    pointer-events: none;
                    transition: .5s;
                }

                .login-box .user-box input:focus ~ label,
                .login-box .user-box input:valid ~ label {
                    top: -20px;
                    left: 0;
                    color: #03e9f4;
                    font-size: 12px;
                }

                .login-box form button {
                    position: relative;
                    display: inline-block;
                    padding: 10px 20px;
                    color: #03e9f4;
                    font-size: 16px;
                    text-decoration: none;
                    text-transform: uppercase;
                    overflow: hidden;
                    transition: .5s;
                    margin-top: 40px;
                    letter-spacing: 4px;
                    border-radius: 20px;
                    background-color: transparent;
                }

                .login-box button:hover {
                    background: #03e9f4;
                    color: rgb(0, 0, 0);
                    border-radius: 9px;
                    box-shadow: 0 0 5px #03e9f4,
                                0 0 25px #03e9f4,
                                0 0 50px #03e9f4,
                                0 0 100px #03e9f4;
                }

                
            </style>

            <div class="login-box">
                <h2>Login</h2>
                <form action="LoginHandler.php" method="post">
                    <div class="user-box">
                        <input type="text" name="UsernameText" required="">
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="PasswordText" required="">
                        <label>Password</label>
                    </div>
                    <button onclick="window.location.href='RegPage.php';">
                        Register
                    </button>
                  
                    <button type="submit" name="submitBtn">
                        LogIn
                    </button>
                </form>
            </div>
        </div>

    </body>
</html>
