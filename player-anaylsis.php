<?php
include('connect.php');
$pid=$_GET['infoid'];
// echo $pid;
// die();
$sql="select*from crud where No=$pid";
$result=mysqli_query($con, $sql);
  while($row=mysqli_fetch_assoc($result)){
    $No=$row['No'];
    $Fname=$row['Fname'];
    $Lname=$row['Lname'];
    $Club=$row['Club'];
    $Position=$row['Position'];
    $Nationality=$row['Nationality'];
    $Age=$row['Age'];
    $Goals=$row['Goals'];
    $Salary=$row['Salary'];
    $profile=$row['profile'];
	    }

    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Player Analysis</title>
	<!-- Offline -->
    <link rel="stylesheet" type="text/css" href="./DataTable-All/CSS/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./DataTable-All/CSS/dataTables.bootstrap5.css">

        <!-- JS Online -->
    <script defer src="./DataTable-All/JS/jquery-3.7.1.js" type="text/javascript"></script>
    <script defer src="./DataTable-All/JS/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script defer src="./DataTable-All/JS/dataTables.js" type="text/javascript"></script>
    <script defer src="./DataTable-All/JS/dataTables.bootstrap5.js" type="text/javascript"></script>
    <script defer src="js/script.js" type="text/javascript"></script>

    <!-- Fontaweome V4.7 CSs goes handwithhand all.js-->
    <link rel="stylesheet" type="text/css" href="./DataTable-All/font-awesome.css">
    <script src="./DataTable-All/all.js" type="text/javascript"></script>

    <!-- morris.css -->
    <!-- <link href="bootstrap.css" rel='stylesheet' type='text/css' /> -->
	<!-- <link href="../css/style.css" rel='stylesheet' type='text/css' /> -->
	<script src="bootstrapjquery.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="morris/morris.css">
	<!-- <script src="morris/jquery.js" type="text/javascript"></script> -->
	<script src="morris/rapahel-min.js" type="text/javascript"></script>
	<script src="morris/morris.min.js" type="text/javascript"></script>

</head>
<body>
	<button class="btn btn-danger btn-md" style="margin: 30px;"> <a href="./index.php" class="text-light" style="text-decoration: none;"> <span class="fa fa-fast-backward"></span> Back</a> </button>
<h2 class="text-capitalize" style="text-align: center; color: blue; font-size: 40px; margin-top: 30px; padding-top: 20px;"> <i><b>Player Analysis in pitch</b></i> </h2>

<div class="container">

			<h2 style="align-content: center;">Player's Detail Report 2024/25</h2>

		<div class="row">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		<?php echo '<img src="./profile/'.$profile.'" class="card-img-top" alt="Player_Profile">'; ?>
  <div class="card-body">
    <h5 class="card-title"> <?php echo $Fname.' '.$Lname; ?> </h5>
    <p class="card-text" style="font-weight: 500;"><?php echo '&pound;'.number_format($Salary); ?></p>
    <a href="#" class="btn btn-primary">Go Chart</a>
  </div>
</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		<?php echo '<img src="./profile/'.$profile.'" class="card-img-top" alt="Player_Profile">'; ?>
  <div class="card-body">
    <h5 class="card-title"> <?php echo $Fname.' '.$Lname; ?> </h5>
    <p class="card-text"  style="font-weight: 500;"><?php echo 'Goal(s): '.number_format($Goals).''; ?></p>
    <a href="#" class="btn btn-warning">Go Chart</a>
  </div>
</div>

	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
		<?php echo '<img src="./profile/'.$profile.'" class="card-img-top" alt="Player_Profile">'; ?>
  <div class="card-body">
    <h5 class="card-title"> <?php echo $Fname.' '.$Lname; ?> </h5>
    <p class="card-text"  style="font-weight: 500;"><?php echo 'Age: '.number_format($Age).' Yrs'; ?></p>
    <a href="#" class="btn btn-danger">Go Chart</a>
  </div>
</div>
	</div>

</div>
<!-- end of row -->
</div>
</body>
</html>
