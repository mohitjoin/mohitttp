<?php

  require_once('../connection.php');
 // $dbs=db_connect();
 
//  $query="SELECT onoff from func_onoff where func_name='driver'";
//  $result_set=mysqli_query($dbs,$query);
//  $countr=mysqli_num_rows($result_set);
//   echo $countr;
//echo $result_set;

// while($row = mysqli_fetch_assoc($result_set)){
//     $branchname[] = $row['branch'];
// }
// $cre=mysqli_fetch_assoc($result_set);
//echo $dir['NAME'];
 //echo json_encode( $sre);
?>
<?php
 //error_reporting(1);
//  if(!$_POST){
//   //echo  "<script> alert('Company Registered'); </script>";
//  }
 //  else{
//  $new_date = date('Y/m/d', strtotime($_POST['dateFrom']));
//  echo  $_POST['dateFrom'];
//  header('refresh:5; url=/');
//  }
//  if(isset($new_date)){

//  echo "set";
//   }




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../styleindex.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,600;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- script -->
    <script src='../main.js'>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- site icon -->
    <link rel="icon" href="images/siteicon.png" type="image/gif" sizes="50x50">


    <title>New Student login Register Form
</title>
</head>

<!-- Develop by Mohit kumar with ???  do check at github mohitk30 -->

<body>
    <main>
      <?php
   if(isset($_POST['seroll'])){
  //   include('sucessAlert.php');
 //  echo $_POST['dateFrom'];
  // if (count($_POST) > 0) {
  //   foreach ($_POST as $k=>$v) {
  //       unset($_POST[$k]);
  //   }
// }
//echo '<script>alert("Done")</script>';
         $dbadstud=db_connect();
          //  $sfname=$_POST['sfname'];
          //  $slname=$_POST['slname'];
           $senroll=$_POST['seroll'];
           $spass=$_POST['spass'];
          //  $fname=$_POST['fname'];
          //  $addres=$_POST['sadd'];
          //  $scountr=$_POST['scount'];
          //  $scgpa=$_POST['scgp'];
          //  $sphno=$_POST['spno'];
          //  $semal=$_POST['semail'];
          //  $sbranc=$_POST['sbranch'];
          //  $sgentr=$_POST['sgend'];
          //  $scyear=$_POST['scyear'];
          


           $query="INSERT INTO s_login(logenroll,logpassword)  VALUES('".$senroll."','".$spass."')";
           $result_setadddrive=mysqli_query($dbadstud,$query);

           if($result_setadddrive){
            echo '<script>alert("Login Data Uploaded")</script>';
            header('refresh:3');
           }else{
            echo '<script>alert("Login Data Not Uploaded.Try Again After Sometime")</script>';
           }

          
  // header("Refresh:0");
  //  header('refresh:5; url=/upcomingDrive.php');
   
    }
      ?>
      <?php
      include_once('../backlink.php');
      ?>
    <nav class="navbar navbar-light bg-light ">
  <div class="container-fluid nav-in-company">
    <span class="navbar-text fs-4 ">
      <!-- <a href="<?= $admlink ?>" class="text-decoration-underline"> Back</a>>   -->  New Student Login Registration
    </span>
  </div>
</nav>
<section>
    <div class="w-50  mx-auto">
    <!-- <p > <span class="<?php 
    //echo $cre['onoff']=="on"?"green-color":"red-color"; ?>"> <?php
    // echo $cre['onoff']=="on"?"":"Registrations are Closed"; ?></span></p>   -->
    <form method="post"  autocomplete=""  action="">
<!-- 
    <div class="input-group mb-3 mt-4">
          <span class="input-group-text">*First Name</span>
          <input type="text" class="form-control" name="sfname" placeholder="First Name" aria-label="Username" required>
          <span class=" mx-2"></span>
          <span class="input-group-text">*Last Name</span>
          <input type="text" class="form-control" placeholder="Last Name" name="slname" aria-label="Server" required>
    </div> -->
    <div class="input-group mb-3 mt-4">
         <span class="input-group-text">*Enroll No.</span>
          <input type="number" class="form-control" placeholder="Enroll No." name="seroll" aria-label="Username" required>
          <span class=" mx-2"></span>
          <span class="input-group-text">*Password</span>
          <input type="text" class="form-control" name="spass" placeholder="Password" aria-label="Server" required>
    </div>
    <!-- <div class="input-group mb-3 mt-4">
          <span class="input-group-text"> Address</span>
          <input type="text" class="form-control" name="sadd" placeholder="Street, City, State" aria-label="Username"  >
           
    </div>

    <div class="input-group mb-3 mt-4  ">
         <span class="input-group-text">*Country</span>
          <input type="text" class="form-control" name="scount" placeholder="Country" aria-label="Username"  >
           <span class=" mx-2"></span>
          <span class="input-group-text">CGPA</span>
          <input type="number" step="any" class="form-control" name="scgp" min="0" max="10" placeholder="CGPA" aria-label="Server"  > 
    </div>
    <div class="input-group mb-3 mt-4">
         <span class="input-group-text">Contact No.</span>
          <input type="number" class="form-control" name="spno" placeholder="Contact No. p/w" aria-label="Username"  >
          <span class=" mx-2"></span>
          <span class="input-group-text">Email</span>
          <input type="email" class="form-control" name="semail" placeholder="example@gmail.com" aria-label="Server"  >
    </div>
    <div class="input-group mb-3 mt-4">
         <span class="input-group-text">*Branch</span>
         <select class="form-select" aria-label="Default select example" name="sbranch"  required>
                <option selected>Select Branch</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
          </select>
          <span class=" mx-2"></span>
          <span class="input-group-text">*Gender</span>
          <select class="form-select" aria-label="Default select example" name="sgend" required>
                <option selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
          </select>
    </div>
      <div class="input-group mb-3 mt-4 w-50">
         <span class="input-group-text">*Current Year</span>
         <select class="form-select" aria-label="Default select example" name="scyear" required>
                <option selected>Select Year</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
                <option value="4">Fourth</option>
          </select>
           <span class=" mx-2"></span>
            <span class="input-group-text">Placed in</span>
          <input type="text" class="form-control" min="1" placeholder="Company name" aria-label="Server">   
    </div> -->
     <!-- <div class="input-group mb-3 mt-4">
         <span class="input-group-text">Placed Year</span>
          <input type="number" class="form-control" min="2012" placeholder="Year of placement" aria-label="Username">
          <span class=" mx-2"></span>
          <span class="input-group-text">CTC</span>
          <input type="number" class="form-control" min="1" placeholder="CTC" aria-label="Server">
    </div>    -->



      
  <button type="submit" class="btn btn-primary btn-lg mt-5 mx-5" <?php 
  //echo $cre['onoff']=="on"?"":"disabled"; ?> >Submit details</button>
  
</form>
   <?php

// $previous = "javascript:history.go(-1)";
// if(isset($_SERVER['HTTP_REFERER'])) {
//     $previous = $_SERVER['HTTP_REFERER'];
// }
?> 

<!--<a class="mx-5 pt-2" href="
<?
//= $previous ?>
">Back </a> -->




    </div>







</section>


        






    </main>
    <script>
    </script>

    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>

 