<!--head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
</head-->


<?php
if (!isset($_SESSION["user"])) {
?>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Login (Welcome Back) 😊</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?controller=main">Home</a></li>
            <li class="breadcrumb-item active">login</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <body>
    <div class="login-page" style="min-height: 466px;" id="body">
      <div class="login-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center" id="articard">
            <a href="?controller=main&action=list" class="h1"><b>Man</b>Shop</a>
          </div>
          <div class="card-body" id="articard">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="?controller=user&action=loginbyMail" method="post">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="pswd">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>

                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>

              </div>
            </form>
            <div class="social-auth-links text-center mt-2 mb-3">
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
              </a>
            </div>

            <p class="mb-1">
              <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
              <a href="?controller=main&action=register" class="text-center">Register a new membership</a>
            </p>
          </div>

        </div>
      </div>
    </div>
   </body>
<?php  } else {
  include_once 'View/interface/showusr.php';
}

if (isset($_GET["error"])) {

  if ($_GET["error"] == 1) {
    echo '<script>alert("Contraseña incorrecta")</script>';
  } else if ($_GET["error"] == 2) {
    echo '<script>alert("Usuario no encontrado")</script>';
  }
}
?>