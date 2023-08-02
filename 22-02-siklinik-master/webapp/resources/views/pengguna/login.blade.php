<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cartoon Network</title>
    <link rel="shortcut icon" href="footer.jpg">
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

        <section>
            <img src="avatar.jpg" class="avatar">
            <form method="POST" action="../dashboard.blade.php">
            <table class="tengah bos">
                <tr>
                    <td><h1>Login</h1></td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Username :</label>
                        <br>
                        <input required type="text" name="username" placeholder="Masukkan username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Password">Password :</label>
                        <br>
                        <input required type="password" name="password" placeholder="Masukkan Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input required type="checkbox" name="checkbox" value="on">
                        <label for="checkbox">Saya menyetujui syarat dan ketentuan yang berlaku</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Submit" >
                    </td>
                </tr>
                <tr>
                    <td class="text"><a href="">Lupa Password ?</a></td>
                </tr>
                <tr>
                    <td>
                        <p>Belum punya akun?,Silahkan <a href="sign_up.php">Sign up</a></p> 
                    </td>
                </tr>
            </table>
            </form>
        </section>

        <footer>
            <div class="footer-content">
                <div class="copyright">
                    <p style="font-size: smaller;">&copy; 2016 turner. all rights reserved.</p>
                </div>
                <div class="call">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </footer>
</body>
</html>