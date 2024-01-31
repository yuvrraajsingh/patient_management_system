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

$sql="select * from `customerInfo` where `id`= $id ";

$result=mysqli_query($conn, $sql);

if($result){

    if($row = mysqli_fetch_assoc($result))
     {
         $id=$row['id'];
         $mobile=$row['mobile'];
         $customer=$row['customer'];
         $address=$row['address'];
         $age=$row['age'];
         $gender=$row['gender'];
         $birthWt=$row['weight_birth'];
         $height=$row['height'];
         $headcircum=$row['headcircum'];
         $admissiondt=$row['admission_date'];
         $admissionwt=$row['admission_weight'];
         $dischargedt=$row['discharge_date'];
         $dischargewt=$row['discharge_weight'];
         $diagnosis=$row['diagnosis'];
         $caseSummary=$row['caseSummary'];
         $treatmentGiven=$row['treatmentGiven'];
         $dlc_p=$row['dlc_p'];
         $dlc_l=$row['dlc_l'];
         $dlc_m=$row['dlc_m'];
         $dlc_b=$row['dlc_b'];
         $dlc_e=$row['dlc_e'];
         $tlc=$row['tlc'];
         $bp=$row['bp'];
         $hb=$row['hb'];
         $widalTest=$row['widalTest'];
         $urineReport=$row['urineReport'];
         $bloodUrea=$row['bloodUrea'];
         $serumCreatinine=$row['serumCreatinine'];
         $lft=$row['lft'];
         $stool=$row['stool'];


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
<title>Patient Management</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body >
<br>

<center>
<button onclick="window.print();" class="btn btn-primary" id="print-btn" style="width: 100px;"><i class="fa fa-print" aria-hidden="true"></i></button>
</center>
<div class=" container">

<header>
  <h1 class="text-center" style="color:#61308b;font-size: 4rem;">Patient Management System</h1>
</header>
</div>
<br>
<div class="container">
<div class="row">
<div class="col-lg-5">

</div>
<div class="col-lg-2"></div>
<div class="col-lg-5"> <h5 style="text-align: right; color:#61308b">Yuvraj Singh Chandi</h5>
      <h6 style="text-align: right; color:#61308b">6280689454</h6>
      <h6 style="text-align: right; color:#61308b">Reg. No. EP. 17491 Dt. 7.2.77</h6>
</div>

      </div>
</div>
<hr>
      <br>

    <div class="container">
      <h2 style="text-align:center"><u><b>DISCHARGE SLIP</u></b></h2>
    </div>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
      Patient id: &nbsp&nbsp<b>RKHY/C/<?php echo $id ?></b><br>
      Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><?php echo $customer ?></b><br>
      Age  &nbsp :&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp<b><?php echo $age ?></b><br>
      Gender: &nbsp&nbsp&nbsp<b><?php echo $gender ?></b><br>
      Address: &nbsp&nbsp<b><?php echo $address ?></b><br>
     Weight at Birth: &nbsp&nbsp&nbsp<b><?php echo $birthWt ?></b><br>
     Height/Lenght: &nbsp&nbsp&nbsp<b><?php echo $height ?></b><br>

    </div>
    <div class="col-md-4 " >
      Admission Date: &nbsp&nbsp<b><?php echo $admissiondt ?></b><br>
      Discharge Date: &nbsp&nbsp<b><?php echo $dischargedt ?></b><br>
      Weight at Admission: &nbsp&nbsp<b><?php echo $admissionwt ?></b><br>
      Weight at Discharge: &nbsp&nbsp<b><?php echo $dischargewt ?></b><br>
      Head Circumference: &nbsp&nbsp<b><?php echo $headcircum ?></b>

    </div>
    </div>
    <br>
    <br>
    <div class="row">
<div class="col-md-12">
  Diagnosis &nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><?php   echo $diagnosis ?></b>

</div>

    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        Case Summary : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><?php   echo $caseSummary ?></b>

      </div>
    </div>
    <br>

    <div class="row">
<div class="col-md-12">
  Treatment Given :&nbsp&nbsp&nbsp&nbsp&nbsp<h5><b><?php   echo $treatmentGiven ?></b></h5>
</div>
    </div>
    <br>

    <div class="row">
<div class="col-md-3">
  <h5><b><u>INVESTIGATIONS</u></b></h5>
  <table>
    <tr>
 <th><u>TLC:</b></u>&nbsp&nbsp<?php echo $tlc ?></b></td>
 </th>

    <tr>
    <th><b><u>DLC</u></b></th>
   </tr>
   <tr>
<td>Pol# &nbsp&nbsp <b><?php echo $dlc_p ?></b></td>
   </tr>
   <tr>
<td>Lym# &nbsp&nbsp <b> <?php echo $dlc_l ?></b></td>
   </tr>
   <tr>
<td>Mon# &nbsp&nbsp <b><?php echo $dlc_m ?></b></td>
   </tr>
   <tr>
<td>Bas# &nbsp&nbsp <b><?php echo $dlc_b ?></b></td>
   </tr>
   <tr>
<td>Eos# &nbsp&nbsp <b><?php echo $dlc_e ?></b></td>
   </tr>
   <tr>
     <td>
  Widal Test: <b><?php echo $widalTest ?></b>
     </td>
   </tr>
  </table>

</div>
<div class="col-md-9">
  <table>
    <tr>
      <td>
        Hb: <b><?php echo $hb ?></b>
      </td>
    </tr>
    <tr>
      <td>
                BP: <b><?php echo $bp ?></b>
      </td>
    </tr>
    <tr>
      <td>
                Blood Urea: <b><?php echo $bloodUrea ?></b>
      </td>
    </tr>

    <tr>
      <td>
                Urine C/E: <b><?php echo $urineReport ?></b>
      </td>
    </tr>
    <tr>
      <td>
                Serum Creatinine: <b><?php echo $serumCreatinine ?></b>
      </td>
    </tr>
    <tr>
      <td>
                Stool C/E: <b><?php echo $stool ?></b>
      </td>
    </tr>
    <tr>
      <td>
                LFT: <b><?php echo $lft ?></b>
      </td>
    </tr>

  </table>
</div>
    </div>
    </div>
</body>

</html>
