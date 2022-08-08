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
</head>
<body>

    
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <button type="button" class="btn btn-success float-right" onclick="exportData();" id="btnExport">Download &nbsp;<i class="fa fa-download" aria-hidden="true"></i></button>  
        <a class="navbar-brand"><img  class="bec-logo" src="assets/logo/logo1.png" /></a>
  <h2><p class="vertical-center college-title">Bapatla Engineering College</p></h2>
          
            
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
            $query="select * from students_data";
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


