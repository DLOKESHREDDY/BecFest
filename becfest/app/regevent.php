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


$sql="insert into students_data(student_name,student_regno,department,email,gender,event_name,phone_number,year) values('$fullname','$regno','$department','$email','$gender','$eventname','$phoneno','$year')";
if(mysqli_query($conn,$sql))
{
   $_SESSION['event_success']="Successfully Registered For event";
   header("location:../eventregistration.php");

}else{
    $_SESSION['event_fail']="Something went Wrong please Try Again";
    header("location:../eventregistration.php");
}



?>