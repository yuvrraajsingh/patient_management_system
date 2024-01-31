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

    <title>Patient Management</title>
      <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>

    <div class="container-fluid App">
      <div class="jumbotron">
        <form action="updatefemales.php" method="post" class="form-check">
         <table class="mainform">

           <tbody>

            <!-- Name -->
            <tr>
             <td colspan='1'><input type='number' class="form-control" name="mobile" id="mobile" required placeholder="Enter Mobile Number"></input></td>
             <td colspan='1'><input type='text' class="form-control" name="name" id="patient" required placeholder="Patient Name"></input></td>
             <td colspan='1'><input type='text' class="form-control" name="address" id="address" placeholder="Adress" required></input></td>
             <td colspan='1'><input type="text" class="form-control" name="age" id="result" placeholder="Age"/></td>


            <!-- DOB -->
             <tr>

             <td colspan='2'><input type='text' class="form-control" name="diagnosis" id="diagnosis" placeholder="Diagnosis"></input></td>
             <td colspan='2'><input type='text' class="form-control" name="procedur" id="procedur" placeholder="Procedure"></input></td>

            </tr>


           <tr>
             <td colspan='2'><input type='text' class="form-control" name="intraoperationfind" id="intraoperationfind" required placeholder="Intra Operation Finding"></input></td>
             <td colspan='2'><input type='text' class="form-control" name="postoperationperiod" id="postoperationperiod" required placeholder="Post Operation Period"></input></td>

            </tr>
           <tr>
             <td colspan='4'><input type='text' class="form-control" name="treatmentondischarge" id="treatmentondischarge" required placeholder="Treatment Given on Discharge"></input></td>
            </tr>
            <tr>


              <td colspan="1"> Admission Date<input type='date' name="admission_dt" class="form-control" id="admission" required></input></td>
              <td colspan="1"> Discharge Date<input type='date' name="discharge_dt" class="form-control" id="discharge" required></input></td>

            </tr>
      </tbody>
      </table>

      <button type="submit" class="btn btn-primary" style="width: 200px;">Save</button>

    </form>
      </div>
  </div>

</body>
</html>
