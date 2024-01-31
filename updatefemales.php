<?php
require "config.php";


// get the post records
$mobile = $_POST['mobile'];
$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$diagnosis = $_POST['diagnosis'];
$procedur = $_POST['procedur'];
$intraoperationfind = $_POST['intraoperationfind'];
$postoperationperiod = $_POST['postoperationperiod'];
$treatmentondischarge = $_POST['treatmentondischarge'];
$admission_dt = $_POST['admission_dt'];
$discharge_dt= $_POST['discharge_dt'];




$sql= "INSERT INTO `mothers` (`mobile`, `name`, `address`, `age`, `diagnosis`, `procedur`, `intraOperationFinding`, `postOperationPeriod`, `treatment`,`admission_dt`, `discharge_dt`) VALUES ('$mobile', '$name', '$address', '$age', '$diagnosis', '$procedur', '$intraoperationfind', '$postoperationperiod', '$treatmentondischarge','$admission_dt', '$discharge_dt')";


if ($conn->query($sql) === TRUE) {

    header('Location:motherslist.php');
  } else {

    echo "Something went Wrong...!!!";
  }


?>
