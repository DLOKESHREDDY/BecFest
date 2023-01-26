<?php
session_start();
include("config.php");
$regno=$_POST['regno'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$department=$_POST['department'];
$eventname=$_POST['eventname'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$college_name=$_POST['college_name'];

$sql="insert into students_data(student_name,student_regno,department,email,gender,event_name,phone_number,year,college_name) values('$fullname','$regno','$department','$email','$gender','$eventname','$phoneno','$year','$college_name')";
if(mysqli_query($conn,$sql))
{
   $_SESSION['event_success']="Successfully Registered For event";
   header("location:../eventregistration.php");

}else{
    $_SESSION['event_fail']="Something went Wrong please Try Again";
    header("location:../eventregistration.php");
}


// git pull https://github.com/sriharika-8003/voting-system.git
?>