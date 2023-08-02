<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Iconscout CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="form-login">
                <img class="del" src="assets/img/dfadfa.png">
                <form action="#">

                    <div class="titlee">
                        <span class="titlee">Email</span>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <!-- <i class="uil uil-user"></i> -->
                    </div>
                    <div class="titlee">
                        <span class="titlee">Password</span>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Enter your password" required>
                        <!-- <i class="uil uil-padlock icon"></i> -->
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <!-- <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text" >Remember me</label> -->
                        </div>

                        <a href="#" class="text">Forget password ?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Login" required>
                    </div>

                </form>
                <!-- 
                <div class="login-signup">
                    <span class="text"></span>
                </div> -->
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script>
        window.location = $(".input-field button").data(index.html);
    </script>

</body>

</html>