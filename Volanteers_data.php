<?php
session_start();
include("app/config.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
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
        <button type="button" class="btn btn-success float-right" onclick="exportData();" id="btnExport">Download &nbsp;<i class="fa fa-download" aria-hidden="true"></i></button>  


          
            
</div>

<div class="card-body">
    <div class="table-responsive">
      <br>
    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Year</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Event Name</th>
                <th>Phone No</th>
                <th>Email id</th>

            </tr>
        </thead>
        <tbody>
            <?php 
            $query="select * from volunteers_data";
            $ret=mysqli_query($conn,$query);
            while($row=$ret->fetch_assoc()){

             ?>

            <tr>
                <td><?php echo $row['student_name'];?></td>
                <td><?php echo $row['student_regno'];?></td>
                <td><?php echo $row['year'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['department'];?></td>
                <td><?php echo $row['event_name'];?></td>
                <td><?php echo $row['phone_number'];?></td>
                <td><?php echo $row['email'];?></td>
            

        </tr>

        <?php }?>
        
</tbody>
</table>

</div>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">
        

function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("example");
 
    /* Declaring array variable */
    var rows =[];
 
      //iterate through rows of table
    for(var i=0,row; row = table.rows[i];i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;
        column6 = row.cells[5].innerText;
        column7 = row.cells[6].innerText;
        column8 = row.cells[7].innerText;
      
 
    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
                column4,
                column5,
                column6,
                column7,
                column8,
              
               
            ]
        );
 
        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
 
        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "studentslist.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
    </script>

</body>
</html>


