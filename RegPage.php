<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shourtcut icon" href="Images/MCH_logo.ico">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="js1.js"></script>
    <title>RegisterPage</title>
</head>
<body>
<nav>
                <div class="navbar" id="navbar" align="center" style="font-size:0.7em;padding-top: -5px;">
                    <a href="HomePage.php" class="homeBtn" >
                        <img src="Images/logo.png" width="16px" id="logo"/>
                        Home
                    </a>
                    <a href="RegPage.php" class="active">Register</a>
                    <a href="loginPage.php">LogIn</a>
                    <a href="aboutUs.php" >About</a>
                
                </div>
            </nav>
<br> <br>

<br> <br>
<div class="registerContainer">
            

    <style>

        .reg-box {
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

        .reg-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .reg-box .user-box {
            position: relative;
        }

        .reg-box .user-box input,select {
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
        .reg-box .user-box label {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }

        .reg-box .user-box input:focus ~ label,
        .reg-box .user-box input:valid ~ label,
        .reg-box .user-box select:focus ~ label,
        .reg-box .user-box select:valid ~ label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

        .reg-box form button {
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

        .reg-box button:hover {
            background: #03e9f4;
            color: rgb(0, 0, 0);
            border-radius: 9px;
            box-shadow: 0 0 5px #03e9f4,
                        0 0 25px #03e9f4,
                        0 0 50px #03e9f4,
                        0 0 100px #03e9f4;
        }

    </style>




    <div class="reg-box">
        <h2>Register</h2>
        <form action="RegHandler.php" method="post">
          <div class="user-box">
            <input type="text" id="fnameBox" name="fnameBox" required=""/>
            <label>First Name</label>
          </div>
          <div class="user-box">
            <input type="text" id="lnameBox" name="lnameBox" required="">
            <label>Last Name</label>
          </div>
          <div class="user-box">
            <input type="text" id="emailBox" name="emailBox" required="">
            <label>Email</label>
          </div>
          <div class="user-box">
            <select id="roleDropdown" name="roleDropdown" required="">
                <!-- <option value="blank" ></option> -->
                <option value="Employee">Employee</option>
                <option value="Customer">Customer</option>
                <option value="Admin">Admin</option>
                
            </select>
            
            <label>Role</label>
          </div>
          <div class="user-box">
            <input type="tel" id="contactNumberBox" name="contactNumberBox" required=""/>
            <label>Contact Number</label>
          </div>
          <div class="user-box">
            <input type="password" id="passwordBox" name="passwordBox" required=""/>
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="password" id="passwordBox2" name="passwordBox2" required=""/>
            <label>Confirm Password</label>

            <script>
                // p1 = document.getElementById(passwordBox).value;
                // p2 = document.getElementById(passwordBox2).value;

                // if (p1!=p2){
                //     alert("Password is doesn't match...\nPlease enter correct password");
                // }
            </script>

          </div>
          <button type="submit" name="submitBtn">
            Register
          </button>
        </form>
      </div>

      
      
</div>
</body>
</html>
