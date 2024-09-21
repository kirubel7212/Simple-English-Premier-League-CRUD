<?php
include('connect.php');
$NO = $_GET['updateNo'];
// var_dump($NO);
// die();
// $sql=;
$result=mysqli_query($con, "select * from crud where No=$NO");
$row=mysqli_fetch_array($result);
$UNO=$row['No'];
$Fname=$row['Fname'];
$Lname=$row['Lname'];
$Club=$row['Club'];
$Position=$row['Position'];
$Nationality=$row['Nationality'];
$Age=$row['Age'];
$Goals=$row['Goals'];
$Salary=$row['Salary'];
$profile=$row['profile'];

if(isset($_POST['submitu'])){
  $NO=$_POST['No'];
  $Fname=$_POST['Fname'];
  $Lname=$_POST['Lname'];
  $Club=$_POST['Club'];
  $Position=$_POST['Position'];
  $Nationality=$_POST['Nationality'];
  $Age=$_POST['Age'];
  $Goals=$_POST['Goals'];
  $Salary=$_POST['Salary'];
  $profile=$_POST['profile'];
 
 // var_dump($profile);
 // die();
 // string(9) "rodri.PNG"

// if user doesnot change the profile,  reserve previous profile
 
if($profile!="" || $Fname!="" || $Lname!= "" || $Club !="" || $Position!=""|| $Nationality!=""|| $Age!=""|| $Goals!=""|| $Salary!=""){

     if (empty($profile)) {
      $result=mysqli_query($con, "select * from crud where No=$NO");
      $row=mysqli_fetch_array($result);
      $profile=$row['profile'];
      }
  $usql="UPDATE crud SET profile='$profile', Fname='$Fname', Lname='$Lname', Club='$Club', Position='$Position', Nationality='$Nationality', Age='$Age', Goals='$Goals', Salary='$Salary' WHERE No=$NO";
  $result=mysqli_query($con, $usql); 
  header('Location: index.php');

}else{
  echo"Unable to Update";
}


// Varable Declaration - Naming
// sql Query


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>crud operation</title>
    <link rel="stylesheet" type="text/css" href="./DataTable-All/CSS/bootstrap.min.css">


    <!-- Fontaweome V4.7 CSs goes handwithhand all.js-->
    <link rel="stylesheet" type="text/css" href="./DataTable-All/font-awesome.css">
    <script src="./DataTable-All/all.js" type="text/javascript"></script>
</head>
<body>
   <div class="container my-5">

    <div class="row">
      <span class="text-center text-capitalize fw-bold fst-italic" style="font-size: 25px; color: black; text-align: center;">Update a Player Info</span>
  <div class="col-md-5">

   <form method="post">
    <input type="hidden" name="No" value="<?php echo $UNO; ?>">
  <div class="form-group">
    <label >Fname</label>
    <input type="text" class="form-control"
    placeholder="Enter his fname"
    name="Fname"autocomplete="off" value="<?php echo $Fname; ?>">
    </div>
    <div class="form-group">
    <label >Lname</label>
    <input type="text" class="form-control"
    placeholder="Enter his Lname"
    name="Lname"autocomplete="off" value="<?php echo $Lname; ?>">
    </div>
    <div class="form-group">
    <label >Profile</label><br>
    &nbsp;&nbsp;&nbsp;<img title="profile image" class="m-3" width="200" height="200" src="./profile/<?php echo $profile; ?>" width="60px" height="60px">
    <br>
  <input type="file" class="form-control" name="profile" value="<?php echo $profile; ?>">
  </div>
    <div class="form-group">
    <label >Club</label>
    <input type="text" class="form-control"
    placeholder="Enter his Club"
    name="Club"autocomplete="off" value="<?php echo $Club; ?>">
    </div>
    <div class="form-group">
    <label >Position</label>
    <input type="text" class="form-control"
    placeholder="Enter his position"
    name="Position"autocomplete="off" value="<?php echo $Position; ?>">
    </div>
    <div class="form-group">
    <label >Nationality</label>
    <input type="text" class="form-control"
    placeholder="Enter his Nationality"
    name="Nationality"autocomplete="off" value="<?php echo $Nationality; ?>">
    </div>
    <div class="form-group">
    <label >Age</label>
    <input type="text" class="form-control"
    placeholder="Enter his Age"
    name="Age"autocomplete="off" value="<?php echo $Age; ?>">
    </div>
    <div class="form-group">
    <label >Goals</label>
    <input type="text" class="form-control"
    placeholder="Enter his goal 23/24"
    name="Goals"autocomplete="off" value="<?php echo $Goals; ?>">
    </div><div class="form-group">
    <label >Salary</label>
    <input type="text" class="form-control"
    placeholder="Enter his salary"
    name="Salary"autocomplete="off" value="<?php echo $Salary; ?>">
    <button class="btn btn-primary" name="submitu"><span class="fa fa-edit"></span> Update</button>
    <button class="btn btn-danger">
  <a href="./index.php" style="text-decoration: none; color: white;"><span class="fa fa-fast-backward"></span> Back</a>
</button>
  </div>
 
</form>
</div>
</div>
   </div>
</body>
</html>