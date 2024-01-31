<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("Location:index.php");
  }

  include 'config.php';
  include 'navbar.php';
?>





<?php
if(isset($_GET['uid'])){
 $id = $_GET['uid'];
$sql="select * from `mothers` where `m_id`= $id ";

$result=mysqli_query($conn, $sql);

if($result){

    if($row = mysqli_fetch_assoc($result))
     {
         $mobile=$row['mobile'];
         $name=$row['name'];
         $address=$row['address'];
         $age=$row['age'];
         $diagnosis=$row['diagnosis'];
         $procedur=$row['procedur'];
         $intraoperationfind=$row['intraOperationFinding'];
         $postoperationperiod=$row['postOperationPeriod'];
         $treatment=$row['treatment'];
         $admissiondt=$row['admission_dt'];
         $dischargedt=$row['discharge_dt'];


     }
    }
}

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
        <form action="" method="post" class="form-check">
         <table class="mainform">

           <tbody>

            <!-- Name -->
            <tr>
             <td colspan='1'>Mobile<input type='number' class="form-control" name="mobile" id="mobile" value="<?php echo $mobile; ?>" placeholder=""></input></td>
             <td colspan='1'>Patient Name<input type='text' class="form-control" name="name" id="patient"  value="<?php echo $name; ?>"></input></td>
             <td colspan='1'>Address<input type='text' class="form-control" name="address" id="address" value="<?php echo $address; ?>" ></input></td>
             <td colspan='1'>Age<input type="text" class="form-control" name="age" id="result" value="<?php echo $age; ?>"/></td>


            <!-- DOB -->
             <tr>

             <td colspan='2'>Diagnosis<input type='text' class="form-control" name="diagnosis" id="diagnosis" value="<?php echo $diagnosis; ?>"></input></td>
             <td colspan='2'>Procedure<input type='text' class="form-control" name="procedur" id="procedur" value="<?php echo $procedur; ?>"></input></td>

            </tr>


           <tr>
             <td colspan='2'>Intra Operation Finding<input type='text' class="form-control" name="intraoperationfind" id="intraoperationfind"  value="<?php echo $intraoperationfind; ?>"></input></td>
             <td colspan='2'>Post Operation Period<input type='text' class="form-control" name="postoperationperiod" id="postoperationperiod" value="<?php echo $postoperationperiod; ?>"></input></td>

            </tr>
           <tr>
             <td colspan='4'>Treatment Given on Discharge<input type='text' class="form-control" name="treatment" id="treatment" value="<?php echo $treatment; ?>"></input></td>
            </tr>
            <tr>


              <td colspan="1"> Admission Date<input type='date' name="admission_dt" class="form-control" id="admission" value="<?php echo $admissiondt; ?>"></input></td>
              <td colspan="1"> Discharge Date<input type='date' name="discharge_dt" class="form-control" id="discharge" value="<?php echo $dischargedt; ?>"></input></td>

            </tr>
      </tbody>
      </table>
      <?php
      if(isset($_POST['update']))
      {
          $phone= $_POST['mobile'];
          $namef= $_POST['name'];
          $add= $_POST['address'];
          $ag= $_POST['age'];
          $diag= $_POST['diagnosis'];
          $proced= $_POST['procedur'];
          $intraopfind= $_POST['intraoperationfind'];
          $postopperiod= $_POST['postoperationperiod'];
          $treatmentondischarge= $_POST['treatment'];
          $admi_dt= $_POST['admission_dt'];
          $dis_dt= $_POST['discharge_dt'];

  $query = "UPDATE `mothers` SET `mobile`='$phone',`name`='$namef',`address`='$add',`age`='$ag',`diagnosis`='$diag',`procedur`='$proced',`intraOperationFinding`='$intraopfind',`postOperationPeriod`='$postopperiod',`treatment`='$treatmentondischarge',`admission_dt`='$admi_dt',`discharge_dt`='$dis_dt' WHERE `mothers`.`m_id`=$id";
  $data= mysqli_query($conn, $query);

  if ($data) {

    echo("<script>location.href = 'motherslist.php';</script>");
  }


      }
  ?>
      <button type="submit" name="update" class="btn btn-primary" style="width: 200px;">Update</button>

    </form>
      </div>
  </div>

</body>

</html>
