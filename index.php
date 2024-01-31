<?php
include 'config.php';

  session_start();

  if(isset($_SESSION["username"])){
      header("Location:dashboard.php");
  }
?>

<html lang="en" dir="ltr">
<title>Patient Management</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

</head>
  <body style="background-color:#746AB0">
      <div class="container">
        <br>
        <br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-sm-8 jumbotron" style="border-radius:30px;">
        <center>  <img src="images/childcare.png" height="170px"; width="170px"></center>
          <br>
          <form action="login.php" method="post">
          <input  class="form-control" type="text" name="username" placeholder="Username" required><br>
          <input  class="form-control" type="password" name="password" placeholder="Password" required><br>
          <button  class="btn btn-primary" type="submit" name="login" style="background-color: #288BA8">Login</button><br><br>
      </form>

</form>

      </div>

      </div>
      <div class="col-md-2"></div>

    </div>

    </body>
</html>
