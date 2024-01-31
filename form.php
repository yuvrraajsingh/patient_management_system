<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("Location:index.php");
  }
?>
<?php


include 'config.php';
include 'navbar.php';
error_reporting(0);

?>
<?php
?>
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
    <div class="jumbotron mt-5">
      <form action="update.php" method="post" class="form-check">
      <div class="row">
        <div class="col-md-3">
          <input type='number' class="form-control" name="mobile" id="mobile" required placeholder="Enter Mobile Number"></input>
        </div>
        <div class="col-md-3">
          <input type='text' class="form-control" name="customer" id="patient" required placeholder="Patient Name"></input>
        </div>
        <div class="col-md-3">
        <input type="text" class="form-control" name="age" id="result" placeholder="Age: Eg. 2 Years & 6 Months"/>
        </div>
        <div class="col-md-3">
          <input type='radio' value='male' name='gender'></input>Male
          <input type='radio' value='female' name='gender'></input>Female
          <input type='radio' value='others' name='gender'></input>Others
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <input type='text' class="form-control" name="address" id="address" placeholder="Address" required></input>
        </div>
        <div class="col-md-3">
        <input type='float' class="form-control" name="weightatbirth" id="weightatbirth" placeholder="Weight at Birth" required></input>
        </div>
        <div class="col-md-3">
          <input type='float' class="form-control" name="height" id="height" placeholder="Height"></input>
        </div>
        <div class="col-md-3">
          <input type='text' class="form-control" name="headcircum" id="height" placeholder="Head Circumferance" required></input>
        </div>

      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <input type='text' class="form-control" name="widalTest" id="widaltest" required placeholder="Widal Test"></input><br>
          <input type='text' name="stool" class="form-control" id="stool" required placeholder="Stool C/E"></input><br>

        </div>


        <div class="col-md-3">
          <input type='text' class="form-control" name="bp" id="bp" required placeholder="BP"></input><br>
          <input type='text' class="form-control" name="hb" id="hb" required placeholder="Hb"></input><br>



        </div>
        <div class="col-md-3">
          <input type='text' name="serumCreatinine" class="form-control" id="serumcreatanine" required placeholder="Serum Creatinine"></input><br>
          <input type='text' name="lft" class="form-control" id="lft" required placeholder="LFT"></input><br>

        </div>
        <div class="col-md-3">
          <input type='text' name="urineReport" class="form-control" id="urineReport" required placeholder="Urine C/E"></input><br>
          <input type='text' name="bloodUrea" class="form-control" id="bloodUrea" required placeholder="Blood Urea"></input><br>

        </div>


      </div>
      <div class="row">
        <div class="col-md-3" style="border:1px solid black; border-radius:10px;">
          <h5 class="text-center"><b>INVESTIGATION</b></h5>
          <h6>DLC</h6>
           <input  type="text" class="form-control" name="dlc_p" placeholder="Polymorphs" required><br>
           <input type="text" class="form-control" name="dlc_l" placeholder="Lymphocytes" required><br>
           <input type="text" class="form-control" name="dlc_m" placeholder="Monocytes" required><br>
           <input type="text" class="form-control" name="dlc_b" placeholder="Besophytes" required><br>
           <input type="text" class="form-control" name="dlc_e" placeholder="Eosnophill" required><br>
                          <h6>TLC</h6><input  type="text" class="form-control" name="tlc" placeholder="TLC" required><br>
        </div>
        <div class="col-md-3">
                <h6>Date of Admission</h6>  <input type='date' name="admission" class="form-control" id="admission" required></input><br>
               <input type='float' name="weightadmission" class="form-control" id="weightadmission" required placeholder="Weight at Admission"></input><br><br>
              <h6>Date of Discharge</h6>  <input type='date' name="discharge" class="form-control" id="discharge" required></input><br>
               <input type='float' name="weightdischarge" class="form-control" id="weightdischarge" required placeholder="Weight at Discharge"></input>
        </div>
        <div class="col-md-6">
        <input type='text' class="form-control" name="diagnosis" id="diagnosis" required placeholder="Diagnosis" style="height:100px"></input><br>
        <input type='text' class="form-control" name="caseSummary" id="casesummary" required placeholder="Case Summary" style="height:100px"></input><br>
        <input type='text' class="form-control" name="treatmentGiven" id="treatment" required placeholder="Treatment Given" style="height:100px"></input><br>

        <button type="submit" class="btn btn-primary" style="width: 200px;  border-radius:20px;"><h3>Save</h3></button>
        </div>


      </div>

      </div>
      </form>
    </div>
  </div>


</body>
</html>
