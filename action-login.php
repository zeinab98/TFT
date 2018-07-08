<?php

session_start();
$_SESSION['category']='empty';

header('Location: admin.php');
?>