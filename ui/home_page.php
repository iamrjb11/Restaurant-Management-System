<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['active_page']="home";
include_once "../template/header.php";


?>
<head></head>
<body>
	<marquee direction="left">WELCOME TO OUR FOOD WORLD</marquee>



</body>