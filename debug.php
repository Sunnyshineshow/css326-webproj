<?php
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['PHP_SELF'];

echo "Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/SignUp_page.php";

// echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."/../SignIn_page.php";
?>