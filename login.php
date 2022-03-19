<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | LazulaIot.xyz</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!-- Background Cover -->
    <img src="assets/img/cover.jpg" alt="" class="bg-cover-img">
    <div class="container">
        <div class="login-content">
            <form action="">
                <h2>Login Form</h2>
                <div class="input-container email">
                    <div class="icon">
                    <i class="fas fa-at"></i>
                    </div>
                    <div class="input">
                        <h5>Email</h5>
                        <input type="email" id="emailLogin" class="input">
                    </div>
                </div>
                <div class="input-container password">
                    <div class="icon">
                    <i class="fas fa-key-skeleton"></i>
                    </div>
                    <div class="input">
                        <h5>Password</h5>
                        <input type="password" id="passwdLogin" class="input">
                    </div>
                </div>

                <a href="#" class="lupa-sandi">Lupa sandi?</a>
                <button type="submit" class="btn-login" id="btnLogin">Login</button>
            </form>
        </div>

        <div class="daco">
            <img src="assets/img/daco.png" alt="">
        </div>
    </div>

    <script src="assets/js/login.js"></script>
</body>
</html>