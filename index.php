
<?php
include('connect.php');

// Insert in to
if(isset($_POST['submit'])){
  $Fname=$_POST['Fname'];
  $Lname=$_POST['Lname'];
  $Club=$_POST['Club'];
  $Position=$_POST['Position'];
  $Nationality=$_POST['Nationality'];
  $Age=$_POST['Age'];
  $Goals=$_POST['Goals'];
  $Salary=$_POST['Salary'];
  $profile=$_POST['profile'];

// single player information
if($Fname!="" || $Lname!= "" || $Club !="" || $Position!=""|| $Nationality!=""|| $Age!=""|| $Goals!=""||$Salary!="" ){
  $sql="INSERT INTO crud (Fname,Lname,Club,Position,Nationality,Age,Goals,Salary,profile)
   values('$Fname','$Lname','$Club','$Position', '$Nationality','$Age','$Goals','$Salary','$profile')";
  $result=mysqli_query($con, $sql);
  header("Location: index.php");
}else{
  echo"Unable to Insert<br>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Online Bootstrap V5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

   <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css"> -->


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


    <!-- eXPORT dATA -->
    
    <script defer="" src="./DataTable-All/JS/export-js/buttons.dataTables.js" type="text/javascript"></script>
    <script defer="" src="./DataTable-All/JS/export-js/buttons.html5.min.js" type="text/javascript"></script>
    <script defer="" src="./DataTable-All/JS/export-js/buttons.print.min.js" type="text/javascript"></script>
    <script defer="" src="./DataTable-All/JS/export-js/dataTables.buttons.js" type="text/javascript"></script>
    <script defer="" src="./DataTable-All/JS/export-js/jszip.min.js" type="text/javascript"></script>
    <script defer="" src="./DataTable-All/JS/export-js/datatables.min.js" type="text/javascript"></script>
    <script defer="" src="./DataTable-All/JS/export-js/pdfmake.min.js" type="text/javascript"></script>
    <script defer="" src="./DataTable-All/JS/export-js/vfs_fonts.js" type="text/javascript"></script>



    
   
    <!-- line  css ecport-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.1.2/css/buttons.dataTables.css">



    <link rel="stylesheet" type="text/css" href="/DataTable-All/CSS/export-cs/datatables.min.css">

    <!-- Online Export ??? -->
    <link rel="stylesheet" type="text/css" href="./DataTable-All/CSS/export-cs/buttons.dataTables.css">
    <link rel="stylesheet" type="text/css" href="./DataTable-All/CSS/export-cs/dataTables.dataTables.css">

 



 <!-- Css 2 file-->
<link rel="stylesheet" type="text/css" href="./excss/dataTables.dataTables.css">
<link rel="stylesheet" type="text/css" href="./excss/buttons.dataTables.css">

    <!-- JS 9 file-->
<script src="./exjs/jquery-3.7.1.js" type="text/javascript"></script>
<script src="./exjs/dataTables.js" type="text/javascript"></script>
<script src="./exjs/dataTables.buttons.js" type="text/javascript"></script>
<script src="./exjs/buttons.dataTables.js" type="text/javascript"></script>
<script src="./exjs/jszip.min.js" type="text/javascript"></script>
<script src="./exjs/pdfmake.min.js" type="text/javascript"></script>
<script src="./exjs/vfs_fonts.js" type="text/javascript"></script>
<script src="./exjs/buttons.html5.min.js" type="text/javascript"></script>
<script src="./exjs/buttons.print.min.js" type="text/javascript"></script>

<script src="my_script.js" type="text/javascript"></script>



<script type="text/javascript">

$(document).ready(function () {
new DataTable('#example');

 });

    // $(document).ready(function () {
    //     new DataTable('#example', {
    //     layout: {
    //         topStart: {
    //             buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    //         }
    //     }
    // });

    // });

</script>


    <title>EPL-CRUD</title>
<!-- Icon Image -->
    <link rel="shortcut icon" type="image/png" href="./profile/epl-logo-min.png"/>

<!-- In the <head> section: -->
<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Are you sure to Delete the Player Information?');
    }
</script>


<style type="text/css">
    label{
        font-weight: bold;
    }
.data_table{
    padding: 5px 10px;
    margin: 3px;
}
/*Hover effect is a game changer */
#scale-up:hover{
    transform: scale(1.2);
color: #111;
            background: greenyellow;
            box-shadow: 0 0 100px greenyellow;
}


/*https://codepen.io/nxworld/pen/ZYNOBZ*/
/* Shine */
.hover14 figure {
    position: relative;
}
.hover14 figure::before {
    position: absolute;
    top: 0;
    left: -75%;
    z-index: 2;
    display: block;
    content: '';
    width: 50%;
    height: 100%;
    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
    -webkit-transform: skewX(-25deg);
    transform: skewX(-25deg);
}
.hover14 figure:hover::before {
    -webkit-animation: shine .75s;
    animation: shine .75s;
}
@-webkit-keyframes shine {
    100% {
        left: 125%;
    }
}
@keyframes shine {
    100% {
        left: 125%;
    }
}

/* Sepia */
.hover14 figure img {
    -webkit-filter: sepia(100%);
    filter: sepia(100%);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
}
.hover14 figure:hover img {
    -webkit-filter: sepia(0);
    filter: sepia(0);
}

/*hidden the last col*/
@media print{
    table td:last-child {display: none;}
    table th:last-child {display: none;}

}



</style>
</head>



<body>
    <div class="container">
    <div class="row mt-4">
        <h1>
            <span class="text-center text-capitalize fw-bold fst-italic" style="color: black; text-align: center;">List of Top English premier league players 2024/2025 Season <br></span>
        </h1>
        <!-- Make Dynamic vs Static -->
        <!-- Know each of code that you wrote in software application -->
  <div class="hover14 data_table col-md-12 justify-content-center">
    <marquee behavior="alternate" direction="left"><figure><img src="./H.jfif" alt="" width="794" height="366" style="border-radius: 10px;"/></figure></marquee>
  </div>
  </div>
<div class="row">

  <div class="col-md-12">

     <!-- Button trigger modal -->
  <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success btn-lg my-3"><span class="fas fa-plus"></span></button>
     <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning btn-lg my-3"><span class="fas fa-download"></span></button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger btn-lg my-3"><span class="fas fa-file-pdf"></span></button> 
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger btn-lg my-3"><span class="fas fa-bolt"></span></button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-dark btn-lg my-3"><span class="fas fa-folder"></span></button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-lg my-3"><span class="fas fa-file-export"></span></button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-lg my-3"><span class="fas fa-signal"></span></button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning btn-lg my-3"><span class="fas fa-sitemap"></span></button> -->

  
     <table id="example" class="table table-striped table-dark text-center table-bordered">
<thead>
    <tr>
      <th>No</th>
      <th>Profile</th>
      <th>Fname</th>
      <th>Lname</th>
      <th>Club</th>
      <th>Position</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Goals</th>
      <th>Salary</th>
      <th style="width: 15%;">Operation</th>
    </tr>
</thead>
   <tbody>

<?php
include('connect.php');
$counter=1;
$sql="select * from crud";
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
    // id="scale-up";
    echo'<tr class="text-capitalize">
      <td>'.$counter.'</td>
      <td><a href="player-anaylsis.php?infoid='.$No.'"><img src="./profile/'.$profile.'" id="scale-up" alt="" width="100" height="100" style="border-radius: 50%;"/></a></td>
      <td>'.$Fname.'</td>
      <td>'.$Lname.'</td>
      <td>'.$Club.'</td>
      <td>'.$Position.'</td>
      <td>'.$Nationality.'</td>
      <td>'.$Age.'</td>
      <td>'.$Goals.'</td>
      <td>&pound;'.number_format($Salary).'</td>
      <td>
        <button class="btn btn-primary btn-md">
        <a href="update.php?updateNo='.$No.'" class="text-light" style="text-decoration: none;"><span class="fa fa-edit"></span></a></button> | <button class="btn btn-warning btn-md">
        <a href="player-anaylsis.php?infoid='.$No.'" class="text-light" style="text-decoration: none;"><span class="fa fa-info-circle   "></span></a></button> |
        <button class="btn bg-danger btn-md">
        <a href="delete.php? deleteNo='.$No.'" onclick="return checkDelete()" class="text-light" style="text-decoration: none;"><span class="fa fa-trash"></span></a></button>
      </td>
    </tr>';
    $counter++;
  }

  // style="background-color: black; color: white;" class="text-center" able caption-top 

?>
   
  </tbody>
</table>
  </div>

</div>




<!-- Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="post">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel"> <img src="./profile/epl-logo-min.png" width="60" height="60" style="border-radius: 50%;" id="scale-up" /> Premier League Player</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
  <div class="form-group">
    <label >Fname</label>
    <input type="text" class="form-control"
    placeholder="Enter his fname"
    name="Fname"autocomplete="off">
    </div>
    <div class="form-group">
    <label >Lname</label>
    <input type="text" class="form-control"
    placeholder="Enter his Lname"
    name="Lname"autocomplete="off">
    </div>
    <div class="form-group">
    <label >Profile</label>
    <br>
  <input type="file" id="myfile" name="profile" required="">
  </div>
    <div class="form-group">
    <label >Club</label>
    <input type="text" class="form-control"
    placeholder="Enter his Club"
    name="Club"autocomplete="off">
    </div>
    <div class="form-group">
    <label >Position</label>
    <input type="text" class="form-control"
    placeholder="Enter his position"
    name="Position"autocomplete="off">
    </div>
    <div class="form-group">
    <label >Nationality</label>
    <input type="text" class="form-control"
    placeholder="Enter his Nationality"
    name="Nationality"autocomplete="off">
    </div>
    <div class="form-group">
    <label >Age</label>
    <input type="text" class="form-control"
    placeholder="Enter his Age"
    name="Age"autocomplete="off">
    </div>
    <div class="form-group">
    <label >Goals</label>
    <input type="text" class="form-control"
    placeholder="Enter his goal 23/24"
    name="Goals"autocomplete="off">
    </div>
    <div class="form-group">
    <label >Salary</label>
    <input type="text" class="form-control"
    placeholder="Enter his salary"
    name="Salary"autocomplete="off">
  </div>

   </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-md" name="submit"><span class="fa fa-save"></span> Save</button>
        <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal"> <span class="fa fa-ban"></span> Close</button>
      </div>
</form>
    </div>
  </div>
</div>


    </div>
    <!-- End of the container -->



</body>
</html>