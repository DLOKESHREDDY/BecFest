<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Event Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 
</head>
<body>
<style>
 .header {
	z-index: 99;
	position: sticky;
	top: 0;
}

.navbar-header {
	display: flex;
	justify-content: space-around;
	align-items: baseline;
	width: 100%;
	background-color: #fff;
}

.no1-pic {
	width: 250px;
	height: 125px;
}

.header-mid-section {
	display: flex;
}

.college-logo {
	margin-right: 40px;
	height: fit-content;
}

.college-logo-img {
	height: 145px;
	background-color: transparent;
	width: 120px;
	cursor: pointer;
}
.college-title1 {
	font-family: Poppins, sans-serif;
	font-weight: bolder;
	color: #0060b1;
	font-size: var(--desktop-heading-fontsize);
}

.college-autonomous {
	display: flex;
	justify-content: center;
	font-size: var(--desktop-bodytext-fontsize);
	color: #000;
	font-weight: normal;
	font-weight: bold;
}

.college-affiliation {
	display: flex;
	justify-content: center;
	color: #000;
 font-size: var(--desktop-bodytext-fontsize);
	font-weight:normal;
	font-weight:bold;
}

.header-mid-section-dates {
	display: flex;
	justify-content: space-between;
}

.college-estd {
	color: #000;
	font-weight: bold;
	font-size: var(--desktop-bodytext-fontsize);
}

.college-eamcet-code {
	color: #000;
	font-weight: bold;
	font-size: var(--desktop-bodytext-fontsize);
}

.naac-pic {
	width: 190px;
	height: 110px;
}
.left-navcontent{
  color: black;
  /* background-color:aliceblue; */
}
.Events{
  height:max-content;
  width:max-content
}
  </style>
<body>

    
<header class="header">
			<div class="navbar-header">
				<div class="number-one">
					<img
						alt="Number one college"
						class="no1-pic"
						src="./assets/logo/no1-pic.jpeg"
					/>
				</div>
				<div class="header-mid-section">
					<div class="college-logo">
						<img
							alt="College Logo"
							class="college-logo-img"
							src="./assets/logo/bec_logo.jpeg"
						/>
					</div>
					<div class="header-mid-section-info">
						<div class="college-title1">BAPATLA ENGINEERING COLLEGE</div>
						<div class="college-autonomous">(AUTONOMOUS)</div>
						<div class="college-affiliation">
							Affiliated to Acharaya Nagarajuna University, Guntur
						</div>
						<div class="header-mid-section-dates">
							<div class="college-estd">ESTD: 1981</div>
							<div class="college-eamcet-code">EAMCET CODE: BECB</div>
						</div>
					</div>
				</div>
				<div class="naac-grade">
					<img
						alt="NAAC Grade"
						class="naac-pic"
						src="./assets/logo/naac-pic.jpeg"
					/>
				</div>
			</div>
<div class="card">
<div class="card-body mx-auto ml-auto" style="max-width: 400px;">
<marquee class="text-danger">Welcome to Event Registration!</marquee>	
	<form action="app/regevent.php" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
		 </div>
        <input name="regno" class="form-control" placeholder="Registration Number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="fullname" class="form-control" placeholder="Full name" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+91</option>
		    
		</select>
    	<input name="phoneno" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" name="department">
			<option selected=""> Department</option>
			<option>Civil Engineering</option>
			<option>Chemical Engineering </option>
			<option>Computer Science and Engineering </option>
            <option>Data Science(CS)</option>
            <option>Cyber Security(CS)</option>
            <option>Electronics and Communication Engineering </option>
            <option>Electrical and Electronics Engineering </option>
            <option>Information Technology</option>
            <option>Mechanical Engineering </option>
            
		</select>
	</div>
  <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="college_name" class="form-control" placeholder="College Name" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-graduation-cap"></i> </span>
		</div>
		<select class="form-control" name="eventname">
			<option selected=""> Event Name</option>
			<option>JAM</option>
			<option>Musical Chairs </option>
			<option>Quiz Competition </option>
            <option>PPt</option>
            <option>Lemon and Spoon</option>
            <option>Treasure Hunt </option>
            <option>Thug of war</option>
            <option>Throwball</option>
            <option>VolleyBall</option>
            <option>Cricket</option>
            <option>Badminton</option>
            <option>Chess</option>
            <option>Carrons</option>
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		</div>
		<select class="form-control" name="year">
			<option selected=""> Select year</option>
			<option>I</option>
			<option>II</option>
			<option>III</option>
            <option>IV</option>
            
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-mars"></i> </span>
		</div>
		<select class="form-control" name="gender">
			<option selected=""> Gender</option>
			<option>Male</option>
			<option>Female</option>
		</select>
	</div>       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register Event  </button>
    </div>      
                                                                  
</form>
</div>
</div> 
</div> 
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 
</body>
</html>
<?php 

if($_SESSION['event_success']!='')
{ 
echo '<script>

Command: toastr["success"]("Succesfully Registered For Event")

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

</script>';
unset($_SESSION['event_success']);
}



if($_SESSION['event_fail']!='')
{ 
echo '<script>

Command: toastr["error
]("Succesfully Registered For Event")

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

</script>';
unset($_SESSION['event_fail']);
 } 
 ?>
 