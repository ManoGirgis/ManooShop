<!--head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
</head-->

<div class="content-wrapper">
<?php
    if (!isset($_SESSION["User.name"])) {
    ?>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Login (Welcome Back) 😊</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <body>
  

      <!--form action="?controller=Dashboard&action=showuser"-->
      <form action="?controller=user&action=loginbyMail" method="post">
        <div class="mb-3 mt-3">
        Email:
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
          Password:
          <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-check mb-3">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">login</button>
      </form>
  </body>

<?php  }
else {include_once 'View/interface/showusr.php';}

if(isset($_GET["error"])){

if($_GET["error"] == 1)
{
    echo '<script>alert("Contraseña incorrecta")</script>';
}
else if($_GET["error"] == 2)
{
    echo '<script>alert("Usuario no encontrado")</script>';
}
  
}
?>