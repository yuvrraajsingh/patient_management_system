<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("Location:index.php");
  }
?>
<?php
include 'config.php';
?>
<?php

if(isset($_GET['printid'])){
 $id = $_GET['printid'];

$sql="select * from `mothers` where `m_id`= $id ";

$result=mysqli_query($conn, $sql);

if($result){

    if($row = mysqli_fetch_assoc($result))
     {
        $id=$row['m_id'];
        $mobile=$row['mobile'];
        $name=$row['name'];
         $address=$row['address'];
         $age=$row['age'];
         $diagnosis=$row['diagnosis'];
         $procedur=$row['procedur'];
         $intraoperationfind=$row['intraOperationFinding'];
         $postoperationperiod=$row['postOperationPeriod'];
         $treatment=$row['treatment'];
         $admission=$row['admission_dt'];
         $discharge=$row['discharge_dt'];
     }
    }
}
?>

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="search.js" ></script>
    <title>Patient Management</title>
      <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
<br>
<center>
<button onclick="window.print();" class="btn btn-primary" id="print-btn" style="width: 100px;"><i class="fa fa-print" aria-hidden="true"></i></button>
</center>
<div class=" container">

<img src="images/raikhyheader.png" style="width: 100%;">
</div>
<br>

<div class="container">
<div class="row">
    <div class="col-lg-5">
    </div>
     <div class="col-lg-2"></div>
     <div class="col-lg-5">
     <h5 style="text-align: right; color:#61308b"># 10-A, Model Town, Patiala- 147001 </h5>
      <h6 style="text-align: right; color:#61308b">Contact: 0175-2309832</h6>
      <h6 style="text-align: right; color:#61308b">Mob: 6280532988</h6>
     </div>
</div>
    </div>
      <br>
      <hr>

            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h3 style="text-align:center;"> <u>DISCHARGE SLIP</u></h3>
                </div>
              </div>
            </div>

  <div class="container">
<div class="row">

  <div class="col-md-4">
    <h5 style="text-align: left;">Name: <?php echo $name ?></h5>
    <h5 style="text-align: left;"> Age: <?php echo $age ?></h5>

  </div>
  <div class="col-md-4">

  </div>
  <div class="col-md-4">
    <h5 style="text-align: right;">Date of Admission : <?php echo $admission ?></h5>
    <h5 style="text-align: right;">Date of Discharge : <?php echo $discharge ?></h5>
  </div>
</div>


  </div>
    </div>
    <br>
    </div>
    <br>
    <br>
    <div class="container">
    <div class="row">
<div class="col-md-12">
    <h5 style="text-align: left;">Diagnosis : <?php echo $diagnosis ?></h5>
  </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container">
  <div class="row">
<div class="col-md-12">
  <h5 style="text-align: left;">Procedure : <?php echo $procedur  ?></h5>
</div>
  </div>
</div>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<h5 style="text-align: left;">Intra Operation Finding : <?php  echo $intraoperationfind ?></h5>
</div>
</div>
</div>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<h5 style="text-align: left;">Post Operation Period : <?php echo $postoperationperiod ?></h5>
</div>
</div>
</div>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<h5 style="text-align: left;">Treatment on Discharge : <?php echo $treatment ?></h5>
</div>
</div>
</div>


<footer>
  <div class="container" style=" margin-top:650px">
    <div class="row">
      <div class="col-md-9">
<h6 style="text-align:left;">OPD Timings : 09:00 AM to 07:00 PM</h6>
<h6 style="text-align:left;">Sunday OPD Closed</h6>
</div>
<div class="col-md-3">
<div style="background-color:blue; border-radius:20px" class="text-light text-center">
  Emergency 24 Hours
</div>
</div>
</div>
</div>
</footer>
</body>

</html>
