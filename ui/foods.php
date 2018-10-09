<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['active_page']="foods";
include_once "../template/header.php";


?>

<head></head>
<body>
	
 <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="../images/lights.jpg" >
        <img src="../images/riceBowl.jpg" alt="Lights" style="width:400px;height: 250px">
        <div class="caption" style="text-align: center;">
          <p>Product Name : XXX</p>
          <p>Price : XXX</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="../images/11.jpg">
        <img src="../images/11.jpg"  alt="Nature" style="width:400px;height: 250px">
        <div class="caption">
          <p>Lorem ipsum...</p>
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="../images/14.jpg"  alt="Fjords" style="width:400px;height: 250px">
        <div class="caption">
          <p>Lorem ipsum...</p>
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="../images/sandwise.jpeg"  alt="Fjords" style="width:400px;height: 250px">
        <div class="caption">
          <p>Lorem ipsum...</p>
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
</div>



</body>