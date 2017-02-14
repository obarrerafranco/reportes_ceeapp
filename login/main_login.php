<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login | Reportes CEE APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="../img/plataforma/favicon.jpeg">
  </head>

  <body>
    <div class="container">

      <form class="form-signin" name="form1" method="post" action="checklogin.php">
        <div class="form-group text-center">
          <img src="../img/plataforma/logo.png" alt="Cee APP">
        </div>
        <div class="form-group text-center">
          <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Usuario" autofocus>
        </div>
        <div class="form-group text-center">
          <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Contraseña">
        </div>
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>
