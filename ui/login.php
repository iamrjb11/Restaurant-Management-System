<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['active_page']="login";
include_once "../template/header.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
	//echo "IN<br>";
	$userName=$_POST['email'];
	$pa=$_POST['password'];
	//echo "E : ".$userName." P : ".$pa;
	if($userName=="admin@gmail.com" && $pa=="admin"){
		//echo "OK";
		header("location: http://localhost/restaurant/ui/admin_home.php");
	}


}

?>

<head></head>
<body style="background-image: url(../images/log.png);background-size: cover;">

	<br><br><br><br><br>
<div class="container">
  <h2 style="text-align: center;color: white;">Sing in</h2><br><br>
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color: white;">Email:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color: white;">Password:</label>
      <div class="col-sm-8">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
    
    <div class="form-group" ">        
      <div class="col-sm-offset-4 col-sm-16" >
        <button type="submit" class="btn btn-success">login</button>
      </div>
    </div>
  </form>
</div>
</body>