<?php
$connection = mysqli_connect("localhost","root","","tft");

if(!$connection)
  die("connection failed:".mysqli_error());
mysqli_set_charset($connection,'utf8');

session_start();

$counter=0;
if(isset($_POST['category']) && !empty($_POST['category']))
    $counter++;

if($counter==1)
{
    $category=$_POST['category'];
	$result = mysql_query("select interest from Users where id ='".$_SESSION['id']."'");
	$row = mysql_fetch_array($result);
    $id = $row['id'];

    $query =  mysql_query("UPDATE Users SET interest ='".$category."' WHERE id = '".$id."'");
	if(mysqli_query($connection, $query)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
}
   
    $_SESSION['addInterest'] = 'success';
}
header('Location: addInterest.php');
?>
