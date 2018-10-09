<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['active_adminpage']="home";
include_once "../template/admin_header.php";
$db = new MyDatabase();
$sql = "SELECT * from tbl_food_list";
$db->doQuery($sql);
$size = $db->getNumRows();
$Data = $db->getAllRows();
echo "Size : ".$size;

?>

<head></head>
<body>
	<h2 style="text-align: center;">WELCOME TO ADMIN PANEL</h2><br>
	<h4>Food List</h4>
	<table class="table">
		<tr>
			<th>Food Info</th>
			<th>Food Image</th>
			<th>Action</th>
		</tr>
		<tr>
			<td><br>Food Name : <?php ?><br>
			Food Price : <?php ?><br>
			</td>
			<td><img src="<?php ?>"></td>
			<td><input type="button" name="<?php ?>" value="Edit" class="btn btn-danger"></td>
		</tr>
	</table>

</body>