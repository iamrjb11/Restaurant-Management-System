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
	
	<div>
		<input type="text" name="f_name" class="form-control" 
		value="<?php if(isset($_GET['edit'])) echo $_GET['f_name'];  ?>" >
	</div><br>
	<h3 style="font-weight: bold;">#Food List</h3>
	<table class="table">
		<tr>
			<th>Food Details</th>
			<th>Food Image</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php 
		for($i=0;$i<$size;$i++){
			$row = $Data[$i];
		?>
		<tr>
			<td><br>Food Name : <?php echo $row['food_name']; ?><br>
			Food Price : <?php echo $row['food_price'];  ?><br>
			</td>
			<td><img style="width: 150px;height: 100px;" src="<?php echo $row['food_image'];  ?>"></td>
			<td><br><a href="?edit=<?php echo $row['srlno'] ?>&f_name=<?php echo $row['food_name']; ?>&f_price=<?php echo $row['food_price']; ?>&f_image=<?php echo $row['food_image']; ?>" class="btn btn-danger" style="width: 100px;height: 50px;">Edit</a></td>
		</tr>
		<?php
		}
		?>
	</table>

</body>