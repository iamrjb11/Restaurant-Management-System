<?php

include_once "../template/resourcesFile.php";
//echo("<br>Header : ".$_SESSION['active_page']);


?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="http://localhost/restaurant/ui/home_page.php">Mr. Chase</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li <?php if($_SESSION['active_page']=="home"){?> class="active" <?php } ?> ><a href="http://localhost/restaurant/ui/home_page.php">Home</a></li>
	      <li <?php if($_SESSION['active_page']=="products"){?> class="active" <?php } ?> ><a  href="http://localhost/restaurant/ui/products.php">Products</a></li>
	      <li <?php if($_SESSION['active_page']=="contacts_us"){?> class="active" <?php } ?>  ><a href="http://localhost/restaurant/ui/contacts_us.php">Contact Us</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li <?php if($_SESSION['active_page']=="login"){?> class="active" <?php } ?>  ><a href="http://localhost/restaurant/ui/login.php">Login</a></li>
	    </ul>
	  </div>
	</nav>



</body>
