<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Halaman Login</title>
    <style>h1{
                color:blue;
                font-family: 'Roboto', sans-serif;
                position: relative;
            }
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                color: black;
                font-size: 14px;
                font-family: 'Open Sans', sans-serif;
            }
            .btn{
                background-color: blue;
                border: none;
                color: white;
                font-family: 'Open Sans', sans-serif;
                margin-top: 10px;
                border-radius: 5px;
            }
            .wrapper{
                display: grid;
                place-items: center;
                background-color: #B6BBC4;
                width: 35%;
                padding: 20px;
                border-radius: 20px;
                margin-top: 15%;
            }
            .remember-forgot{
                accent-color: blue;
            }
            .input-box{
                padding-top: 10px;
                caret-color: blue;
            }
            .btn a{
            text-decoration: none;
            color: white;
            }
            .btn:hover{
            background-color: #6DB9EF;
            color: black;
            }
            .register-link{
                color: blue;
            }
            .register-link:hover{
                color: #6DB9EF;
            }
    </style>
</head>
<body>
    <div class="wrapper">
    <h1>Login</h1>
<form>
        <div class="form-box login">
                <form action="" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <td><input type= "text" name="username" placeholder="username"></td>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <td><input type= "password" name="password" placeholder="password"></td>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                </div>
                <button type="submit" class="btn" value="login"><a href="index">Login</a>
                </button>
                <div class="login-register">
                    <p>Don't have an account?<a 
                        href="register" class="register-link">Sign up</a></p>
                </div>
</form>
</body>
</html>