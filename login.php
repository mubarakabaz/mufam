<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Area</title>

  <meta name="description" content="just-login, bootstrap, bootstrap-5, openlayers, open-layers">
  <meta name="keywords" content="">

  <!-- Font Monsterrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Login CSS -->
  <link rel="stylesheet" href="assets/css/loginStyle.css">

</head>

<body>

  <!-- form Login -->
  <div class="main">
    <div class="container signup" id="signup">
      <form action="#" method="POST" id="signup-form" class="form">
        <h2 class="title-form title">Buat Akun Baru</h2>
        <div class="icons-form">
          <a href="https://www.facebook.com" class="icons-form"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com" class="icons-form"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com" class="icons-form"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span class="span-form">silahkan masukkan data anda dengan benar</span>
        <input type="text" class="input-form" placeholder="Nama Depan">
        <input type="text" class="input-form" placeholder="Nama Belakang">
        <input type="email" class="input-form" placeholder="namaanda@gmail.com">
        <input type="password" class="input-form" placeholder="Password">
        <button class="button-form button submit">SIGN UP</button>
      </form>
    </div>

    <div class="container signin" id="signin">
      <form action="#" method="POST" id="signin-form" class="form">
        <h2>Selamat datang kembali,</h2>
        <div class="icons-form">
          <a href="https://www.facebook.com" class="icons-form"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com" class="icons-form"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com" class="icons-form"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>silahkan masukkan data anda dengan benar</span>
        <input type="email" class="input-form" placeholder="namaanda@gmail.com">
        <input type="password" class="input-form" placeholder="password">
        <button class="button-form button submit">SIGN IN</button>
        <a href="#" class="link-form">Lupa kata sandi?</a>
      </form>
    </div>
    
    <div class="switch" id="switch">
      <div class="circle-switch"></div>
      <div class="circle-switch t-circle-switch"></div>
      <div class="switch-container" id="signin-switch">
        <h2 class="switch-title title">Sudah memiliki akun ?</h2>
        <p class="desc-switch desc">Silahkan masuk dengan akun anda, agar tetap terhubung dengan kami.</p>
        <button class="switch-button button switch-btn">SIGN IN</button>
      </div>

      <div class="switch-container is-hidden" id="signup-switch">
        <h2 class="switch-title title">Belum punya akun ?</h2>
        <p class="desc-switch desc">Silahkan buat akun baru, agar tetap terhubung dengan kami.</p>
        <button class="switch-button button switch-btn">SIGN UP</button>
      </div>
    </div>
  </div>
  <!-- end form login -->

  <!-- Splash Screen -->
  <div id="splash">
    <div class="anim">
      <div id="loader">
        <svg version="1.1" width="60px" height="70px" viewBox="0 0 60 70">
          <defs>
            <filter id="f1" x="0" y="0">
              <feGaussianBlur in="SourceGraphic" stdDeviation="2" />
            </filter>
          </defs>
          <g id="airplane">
            <path fill="#fff" d="M0.677,20.977l4.355,1.631c0.281,0.104,0.579,0.162,0.88,0.16l9.76-0.004L30.46,41.58c0.27,0.34,0.679,0.545,1.112,0.541
          h1.87c0.992,0,1.676-0.992,1.322-1.918l-6.643-17.439l6.914,0.002l6.038,6.037c0.265,0.266,0.624,0.412,0.999,0.418l1.013-0.004
          c1.004-0.002,1.684-1.012,1.312-1.938l-2.911-7.277l2.912-7.278c0.372-0.928-0.313-1.941-1.313-1.938h1.017
          c-0.375,0-0.732,0.15-0.996,0.414l-6.039,6.039h-6.915l6.646-17.443c0.354-0.926-0.33-1.916-1.321-1.914l-1.87-0.004
          c-0.439,0.004-0.843,0.203-1.112,0.543L15.677,17.24l-9.765-0.002c-0.3,0.002-0.597,0.055-0.879,0.16L0.678,19.03
          C-0.225,19.36-0.228,20.637,0.677,20.977z" transform="translate(44,0) rotate(90 0 0)" />
          </g>
          <g id="shadow" transform="scale(.9)">
            <path fill="#2d2d2d" fill-opacity="0.5" d="M0.677,20.977l4.355,1.631c0.281,0.104,0.579,0.162,0.88,0.16l9.76-0.004L30.46,41.58c0.27,0.34,0.679,0.545,1.112,0.541
      		h1.87c0.992,0,1.676-0.992,1.322-1.918l-6.643-17.439l6.914,0.002l6.038,6.037c0.265,0.266,0.624,0.412,0.999,0.418l1.013-0.004
      		c1.004-0.002,1.684-1.012,1.312-1.938l-2.911-7.277l2.912-7.278c0.372-0.928-0.313-1.941-1.313-1.938h1.017
      		c-0.375,0-0.732,0.15-0.996,0.414l-6.039,6.039h-6.915l6.646-17.443c0.354-0.926-0.33-1.916-1.321-1.914l-1.87-0.004
      		c-0.439,0.004-0.843,0.203-1.112,0.543L15.677,17.24l-9.765-0.002c-0.3,0.002-0.597,0.055-0.879,0.16L0.678,19.03
      		C-0.225,19.36-0.228,20.637,0.677,20.977z" transform="translate(64,30) rotate(90 0 0)" filter="url(#f1)" />
          </g>
        </svg>
      </div>
    </div>
  </div> <!-- end splash -->


  <!-- JS Login -->
  <script src="assets/js/login.js"></script>
  <script id="rendered-js">


  </script>
  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>

</body>

</html>