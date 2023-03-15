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
            <hr><br><br><br><br><br><br><br>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Event</h5>
                            <p class="card-text">Have a interest to join and have a little fun Get Volunteer Exprience in Future </p>
                            <a href="http://localhost/becfest/eventregistration.php" class="btn btn-primary">Register For Event</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Volunteer</h5>
                            <p class="card-text">Register as a volunteer, Get Volunteer Exprience in Future</p>
                            <a href="http://localhost/becfest/Volanteer.php" class="btn btn-primary">Register for Volunteer</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Co-ordinator</h5>
                            <p class="card-text">Register as a Co-ordinator, Get Co-ordinator Exprience in Future</p>
                            <a href="http://localhost/becfest/Coordinator.php" class="btn btn-primary">Register as Co-ordiantor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 
</body>
</html>
