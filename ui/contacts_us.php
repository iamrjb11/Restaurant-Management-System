<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['active_page']="contacts_us";
//echo("Contract : ".$_SESSION['active_page']);

include_once "../template/header.php";


?>

<head></head>
<body>LOGIN</body>