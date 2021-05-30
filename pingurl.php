<?php
include("config.php");
session_start();
//get parameter

$url=$_POST['url'];

//check session else redirect to login page

$check=$_SESSION['login_user'];
if($check==NULL )
{
	header("Location: /amazing/index.html");
}


//check values else redirect to settings page
if($check!=NULL && $url==NULL  )
{
header("Location: /amazing/settings.php");	
}

echo "<h1>Result from amazing server</h1>";

echo system("ping $url");
?>
<script>
if(top != window) {
  top.location = window.location
}

</script>
