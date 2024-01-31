<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("Location:index.php");
  }
?>
<?php
require 'config.php';
include 'navbar.php';
error_reporting(0);

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
    <script src="search.js" ></script>
    <title>Patient Management</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body >
<div class="container-fluid App">
  <br>
  <div class="row">
<div class="col-md-1"></div>
<div class="col-md-2">
 <input type="text" id="search" name="search" onkeyup="search()" placeholder="Search.."  class="form-control">
</div>
<div class="col-md-1"></div>

  </div>
    <div>
    <h3 style="text-align: center;">All Patients</h3>

<table class="table">
  <thead>
<tr>
    <th class="th">Patient id.</th>
    <th class="th" >Name</th>
    <th class="th">Mobile</th>
    <th class="th">Address</th>
    <th class="th">Admission Date</th>
    <th class="th">Discharge Date</th>
    <th colspan="2" class="th">Action</th>

</tr>
</thead>
<tbody>
  <?php
$sql= "SELECT * FROM `customerInfo` ORDER BY `customerInfo`.`id` DESC";
$result = mysqli_query($conn, $sql);
 if($result)
   {

     while($row = mysqli_fetch_assoc($result))
     {
       $row['id'];
       $row['mobile'];
       $row['customer'];
       $row['age'];
       $row['gender'];
       $row['address'];
       $row['weight_birth'];
       $row['height'];
       $row['headcircum'];
       $row['admission_date'];
       $row['admission_weight'];
       $row['discharge_date'];
       $row['discharge_weight'];
       $row['diagnosis'];
       $row['caseSummary'];
       $row['treatmentGiven'];
       $row['dlc_p'];
       $row['dlc_l'];
       $row['dlc_m'];
       $row['dlc_b'];
       $row['dlc_e'];
       $row['tlc'];
       $row['bp'];
       $row['hb'];
       $row['widalTest'];
       $row['urineReport'];
       $row['bloodUrea'];
       $row['serumCreatinine'];
       $row['lft'];
       $row['stool'];

       echo '<tr class="name">
        <th scope="row">RKHY/C/'.$row['id'].'</th>
        <th scope="row">'.$row['customer'].'</th>
        <td>'.$row['mobile'].'</td>
        <td>'.$row['address'].'</td>
        <td>'.$row['admission_date'].'</td>
        <td>'.$row['discharge_date'].'</td>
        <td ><a href="view.php?printid='.$row['id'].'"><button type="button" class="btn btn-primary">View</button></a>
        <td ><a href="edit.php?updateid='.$row['id'].'"><button type="button" class="btn btn-primary">Edit</button></a>';
        }
    }
   ?>
</tbody>
</table>
</div>
<div class="tabledata"></div>
    </div>

    <div class="bg-light"></div>

</body>

</html>
