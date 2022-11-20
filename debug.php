<?php
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['PHP_SELF'];

echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);

// echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."/../SignIn_page.php";
?>