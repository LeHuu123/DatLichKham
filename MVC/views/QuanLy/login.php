<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/Public/css/login.css">
    <link rel="stylesheet" href="">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="http://localhost/BTL_Dat_Lich_Kham/upload_files/wave.png">
    <div class="container">
        <div class="img">
            <img src="http://localhost/BTL_Dat_Lich_Kham/upload_files/backgroundLogin.png">
        </div>
        <div class="login-content">
            <div class="login-flex">

                <form class="form_login" action="http://localhost/BTL_Dat_Lich_Kham/Home/checkLogin" method="POST">
                    <div class="img_avt">
                        <img class="image_avatar" src="http://localhost/BTL_Dat_Lich_Kham/upload_files/avatar_login.png">
                    </div>
                    <h2 class="title">Welcome</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input" name="username">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input" name="password">
                        </div>
                    </div>
                    <a class="Forgot" href="#">Forgot Password?</a>
                    <input type="submit" class="btn" value="Login" name="btnLogin">
                </form>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="http://localhost/BTL_Dat_Lich_Kham/Public/js/login.js"></script>
</body>

</html>