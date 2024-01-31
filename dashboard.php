<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("Location:index.php");
  }
?>
<?php


include 'config.php';
include 'navbar.php';

?>
<?php
?>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Patient Management</title>
      <link rel="icon" type="image/x-icon" href="images/favicon.ico">
      <style>
              .dashboard__box{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
               
              }
      </style>
</head>

<body>
<br>
<br>
    <div class="container-fluid App">
      <div class="jumbotron" style="background-color: #746AB0;">
        <div class="row">
          <div class="col-md-4"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_tutvdkg0.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
</div>
          <div class="col-md-6 dashboard__box"><a href="form.php"><button type="button" class="btn" style=" font-weight: bold;background-color: #2a9ed9;width:400px">Patient-Child</button></a>
      <br>
      <br>
      <a href="motherinfo.php"><button type="button"  class="btn" style=" font-weight: bold;background-color: #2a9ed9;width:400px">Patient-Mother</button></a>
    </div>
          <div class="col-md-6"></div>
        </div>
      

        </div>
  </div>

</body>
</html>
