<?php
$connection = mysqli_connect("sql311.gigfa.com","gigfa_21506415","2341998","gigfa_21506415_ryge");

if(!$connection)
    die("connection failed:".mysqli_error());
mysqli_set_charset($connection,'utf8');
$counter=0;
session_start();
$_SESSION['islogin']='empty';
$_SESSION['user-name']='empty';
if(isset($_POST['user-name']) && !empty($_POST['user-name']))
{
    $counter++;
    if(isset($_POST['password']) && !empty($_POST['password']))
        $counter++;
}
if($counter==2)
{
    $userName=$_POST['username'];
    $password=sha1($_POST['password']);

    $result = $connection->prepare("SELECT * FROM `users` WHERE  `user name`=? AND `password`=?");
    $result->bind_param("ss", $userName , $password);
    $result->execute();
    $result = $result->get_result();
    if($result->num_rows==1)
    {
        $_SESSION['islogin'] = 'true';
        $_SESSION['user-name']=&$userName;
    }
    else
        $_SESSION['islogin']='false';
}
if($_SESSION['islogin']=='true')
    header('Location: admin.php');
else
    header('Location: index.php');
?>