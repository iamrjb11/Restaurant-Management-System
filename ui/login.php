<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['active_page']="login";
include_once "../template/header.php";


?>

<head></head>
<body>LOGIN</body>