<?php
include 'config.php';
session_start();


?>

<?php
$id = $_GET['updateid'];

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
        $hp=$row['hp'];
        $widalTest=$row['widalTest'];
        $urineReport=$row['urineReport'];
        $bloodUrea=$row['bloodUrea'];
        $serumCreatinine=$row['serumCreatinine'];
        $lft=$row['lft'];
        $stool=$row['stool'];


    }
   }

if(isset($_POST['update']))
{


    $query = "UPDATE `customerInfo` SET `mobile`='$mobile',`customer`='$customer',`age`='$age',`gender`='$gender',`address`='$address',`weight_birth`='$weight_birth',`height`='$height',`headcircum`='$headcircum',`admission_date`='$admission_date',`admission_weight`='$admission_weight',`discharge_date`='$discharge_date',`discharge_weight`='$discharge_weight',`diagnosis`='$diagnosis',`caseSummary`='$caseSummary',`treatmentGiven`='$treatmentGiven',`dlc_p`='$dlc_p',`dlc_l`='$dlc_l',`dlc_m`='$dlc_m',`dlc_b`='$dlc_b',`dlc_e`='$dlc_e',`tlc`='$tlc',`bp`='$bp',`hb`='$hb',`widalTest`='$widalTest',`urineReport`='$urineReport',`bloodUrea`='$bloodUrea',`serumCreatinine`='$serumCreatinine',`lft`='$lft',`stool`='$stool' WHERE `customerInfo`.`id` = $id";

    $data= mysqli_query($conn, $query);

    if ($data) {
      echo $query;
    }

}


?>
