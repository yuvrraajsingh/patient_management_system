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

if(isset($_GET['updateid'])){
 $id = $_GET['updateid'];
$sql="select * from `customerInfo` where `id`= $id ";

$result=mysqli_query($conn, $sql);

if($result){

    if($row = mysqli_fetch_assoc($result))
     {
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
<?php
if(isset($_POST['update']))
{
  $mob= $_POST['mobile'];
  $cus= $_POST['customer'];
  $ag = $_POST['age'];
  $gen = $_POST['gender'];
  $add = $_POST['address'];
  $wab=  $_POST['weightatbirth'];
  $hei = $_POST['height'];
  $head = $_POST['headcircum'];
  $widal = $_POST['widalTest'];
  $sto = $_POST['stool'];
$bloodp=   $_POST['bp'];
$hymo=   $_POST['hb'];
$serc=   $_POST['serumCreatinine'];
$lf=   $_POST['lft'];
$urin=   $_POST['urineReport'];
$bloodu =  $_POST['bloodUrea'];
$dp=   $_POST['dlc_p'];
$dl=   $_POST['dlc_l'];
$dm=   $_POST['dlc_m'];
$db=   $_POST['dlc_b'];
$de=   $_POST['dlc_e'];
$tl=   $_POST['tlc'];
$admi=   $_POST['admission'];
$admiw =  $_POST['weightadmission'];
$disc=   $_POST['discharge'];
$disw =  $_POST['weightdischarge'];
$diag=   $_POST['diagnosis'];
$case=   $_POST['caseSummary'];
$treatment=   $_POST['treatmentGiven'];


    $query = "UPDATE `customerInfo` SET `mobile`='$mob',`customer`='$cus',`age`='$ag',`gender`='$gen',`address`='$add',`weight_birth`='$wab',`height`='$hei',`headcircum`='$head',`admission_date`='$admi',`admission_weight`='$admiw',`discharge_date`='$disc',`discharge_weight`='$disw',`diagnosis`='$diag',`caseSummary`='$case',`treatmentGiven`='$treatment',`dlc_p`='$dp',`dlc_l`='$dl',`dlc_m`='$dm',`dlc_b`='$db',`dlc_e`='$de',`tlc`='$tl',`bp`='$bloodp',`hb`='$hymo',`widalTest`='$widal',`urineReport`='$urin',`bloodUrea`='$bloodu',`serumCreatinine`='$serc',`lft`='$lf',`stool`='$sto' WHERE `customerInfo`.`id` = $id";

    $data= mysqli_query($conn, $query);

    if ($data) {
echo("<script>location.href = 'list.php';</script>");
    }

} ?>
<html lang="en">
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

    <title>Patient Management</title>
      <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
  <div class="container">
    <div class="jumbotron">
      <form  action="" method="post" class="form-check">
          <div class="row">
        <div class="col-md-3">
          <p>Mobile No.</p><input type='number'  value="<?php echo $mobile; ?>" class="form-control" name="mobile" id="mobile"placeholder=""></input>
        </div>
        <div class="col-md-3">
        <p>Name</p>  <input type='text' class="form-control" name="customer" id="patient" value="<?php echo $customer; ?>" placeholder=""></input>
        </div>
        <div class="col-md-3">
        <p>Age</p><input type="text" class="form-control" name="age" id="result" value="<?php echo $age; ?>" placeholder=""/>
        </div>
        <div class="col-md-3">
          <p>Gender</p>
          <input type='text' class="form-control" name='gender' value="<?php echo $gender; ?>"></input>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
        <p>Address</p>  <input type='text' class="form-control" name="address" id="address" value="<?php echo $address; ?>" placeholder=""></input>
        </div>
        <div class="col-md-3">
          <p>Weight at Birth</p>
        <input type='float' class="form-control" name="weightatbirth" id="weightatbirth" value="<?php echo $birthWt; ?>" placeholder=""></input>
        </div>
        <div class="col-md-3">
          <p>Lenght / Height</p>
          <input type='float' class="form-control" name="height" id="height" value="<?php echo $height; ?>" placeholder=""></input>
        </div>
        <div class="col-md-3">
          <p>Head Circumference</p>
          <input type='text' class="form-control" name="headcircum" id="height" value="<?php echo $headcircum; ?>" placeholder=""></input>
        </div>

      </div>
      <br>
      <div class="row">
        <div class="col-md-3"><p>Widal Test</p>
          <input type='text' class="form-control" name="widalTest" id="widaltest" value="<?php echo $widalTest; ?>" placeholder=""></input><br>
          <p>Stool C/E</p><input type='text' name="stool" class="form-control" id="stool" value="<?php echo $stool; ?>" placeholder=""></input><br>

        </div>


        <div class="col-md-3"><p>BP</p>
          <input type='text' class="form-control" name="bp" id="bp" value="<?php echo $bp; ?>" placeholder=""></input><br>
          <p>Hb</p><input type='text' class="form-control" name="hb" id="hb" value="<?php echo $hb; ?>" placeholder=""></input><br>



        </div>
        <div class="col-md-3"><p>Serum Creatinine</p>
          <input type='text' name="serumCreatinine" class="form-control" id="serumcreatanine" value="<?php echo $serumCreatinine; ?>" placeholder=""></input><br>
        <p>LFT</p>  <input type='text' name="lft" class="form-control" id="lft" value="<?php echo $lft; ?>" placeholder=""></input><br>

        </div>
        <div class="col-md-3"><p>Urine C/E</p>
          <input type='text' name="urineReport" class="form-control" id="urineReport" value="<?php echo $urineReport; ?>" placeholder=""></input><br>
        <p>Blood Urea</p>  <input type='text' name="bloodUrea" class="form-control" id="bloodUrea"  value="<?php echo $bloodUrea; ?>" placeholder=""></input><br>

        </div>


      </div>
      <div class="row">
        <div class="col-md-3" style="border:1px solid black; border-radius:10px;">
          <h5 class="text-center"><b>INVESTIGATION</b></h5>
          <h6><u>DLC</u></h6>
           <p>P</p><input  type="text" class="form-control" name="dlc_p" value="<?php echo $dlc_p; ?>" placeholder=""><br>
          <p>L</p> <input type="text" class="form-control" name="dlc_l" value="<?php echo $dlc_l; ?>" placeholder=""><br>
          <p>M</p> <input type="text" class="form-control" name="dlc_m" value="<?php echo $dlc_m; ?>" placeholder=""><br>
          <p>B</p> <input type="text" class="form-control" name="dlc_b" value="<?php echo $dlc_b; ?>" placeholder=""><br>
          <p>E</p> <input type="text" class="form-control" name="dlc_e" value="<?php echo $dlc_e; ?>" placeholder=""><br>
                          <h6>TLC</h6><input  type="text" class="form-control" name="tlc" value="<?php echo $tlc; ?>" placeholder=""><br>
        </div>
        <div class="col-md-3">
                <h6>Date of Admission</h6>  <input type='date' name="admission" class="form-control" id="admission" value="<?php echo $admissiondt; ?>"></input><br>
               <p>Weight at Admission</p><input type='float' name="weightadmission" class="form-control" id="weightadmission" value="<?php echo $admissionwt; ?>" placeholder=""></input><br><br>
              <h6>Date of Discharge</h6>  <input type='date' name="discharge" class="form-control" id="discharge" value="<?php echo $dischargedt; ?>" placeholder=""></input><br>
               <p>Weight at Discharge</p><input type='float' name="weightdischarge" class="form-control" id="weightdischarge" value="<?php echo $dischargewt; ?>" placeholder=""></input>
        </div>
        <div class="col-md-6">
          <p>Diagnosis</p>
        <input type='text' class="form-control" name="diagnosis" id="diagnosis" value="<?php echo $diagnosis; ?>" placeholder="" style="height:100px"></input><br>
        <p>Case Summary</p><input type='text' class="form-control" name="caseSummary" id="casesummary" value="<?php echo $caseSummary; ?>" placeholder="" style="height:100px"></input><br>
        <p>Treatment Given</p>  <input type='text' class="form-control" name="treatmentGiven" id="treatment" value="<?php echo $treatmentGiven; ?>" placeholder="" style="height:100px"></input><br>

        <button type="submit" name="update" class="btn btn-primary" style="border-radius:20px;"><h3>Update</h3></button>



        </div>


      </div>

      </div>
      </form>




    </div>
  </div>


</body>
</html>
