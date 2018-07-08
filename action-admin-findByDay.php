<?php
//$connection = mysqli_connect("localhost","root","","ryge");

//if(!$connection)
//  die("connection failed:".mysqli_error());
session_start();
$_SESSION['calDay']='empty';
$_SESSION['day']='empty';
$_SESSION['time']='empty';
$_SESSION['budget']='empty';

$counter=0;
if(isset($_POST['calDay']) && !empty($_POST['calDay']))
    $counter++;
if(isset($_POST['day']) && !empty($_POST['day']))
    $counter++;
if(isset($_POST['time']) && !empty($_POST['time']))
    $counter++;
if(isset($_POST['budget']) && !empty($_POST['budget']))
    $counter++;

if($counter==4)
{
    $calDay=$_POST['calDay'];
    $day=$_POST['day'];
    $time=$_POST['time'];
    $budget=$_POST['budget'];

    $_SESSION['calDay']=$calDay;
    $_SESSION['day']=$day;
    $_SESSION['time']=$time;
    $_SESSION['budget']=$budget;
}
header('Location: admin.php');
?>