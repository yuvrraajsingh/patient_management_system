<?php
require "config.php";


// get the post records
$mobile = $_POST['mobile'];
$customer = $_POST['customer'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$weight_birth = $_POST['weightatbirth'];
$height = $_POST['height'];
$headcircum = $_POST['headcircum'];
$widalTest = $_POST['widalTest'];
$bp = $_POST['bp'];
$serumCreatinine = $_POST['serumCreatinine'];
$urineReport = $_POST['urineReport'];
$stool = $_POST['stool'];
$hb = $_POST['hb'];
$lft = $_POST['lft'];
$bloodUrea = $_POST['bloodUrea'];
$dlc_p = $_POST['dlc_p'];
$dlc_l = $_POST['dlc_l'];
$dlc_m = $_POST['dlc_m'];
$dlc_b = $_POST['dlc_b'];
$dlc_e = $_POST['dlc_e'];
$tlc = $_POST['tlc'];
$admission_date = $_POST['admission'];
$admission_weight = $_POST['weightadmission'];
$discharge_date = $_POST['discharge'];
$discharge_weight = $_POST['weightdischarge'];
$diagnosis = $_POST['diagnosis'];
$caseSummary = $_POST['caseSummary'];
$treatmentGiven= $_POST['treatmentGiven'];




$sql= "INSERT INTO `customerInfo` (`mobile`, `customer`, `age`, `gender`, `address`, `weight_birth`, `height`, `headcircum`, `admission_date`, `admission_weight`, `discharge_date`, `discharge_weight`, `diagnosis`, `caseSummary`, `treatmentGiven`, `dlc_p`, `dlc_l`, `dlc_m`, `dlc_b`, `dlc_e`, `tlc`, `bp`, `hb`, `widalTest`, `urineReport`, `bloodUrea`, `serumCreatinine`, `lft`, `stool`)VALUES('$mobile','$customer','$age','$gender','$address','$weight_birth','$height','$headcircum','$admission_date', '$admission_weight', '$discharge_date', '$discharge_weight', '$diagnosis', '$caseSummary', '$treatmentGiven', '$dlc_p', '$dlc_l', '$dlc_m', '$dlc_b', '$dlc_e', '$tlc', '$bp', '$hb', '$widalTest', '$urineReport', '$bloodUrea', '$serumCreatinine', '$lft', '$stool')";


if ($conn->query($sql) === TRUE) {

    header('Location:list.php');
  } else {

    echo "You have to Fill all the input Fields";
  }


?>
