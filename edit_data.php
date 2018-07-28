<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM dashbord WHERE shope_id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{

	$shope_name = $_POST['shope_name'];
	$item_name = $_POST['item_name'];
	$quantity_name = $_POST['quantity_name'];
	$amount=$_POST['amount'];
	// variables for input data

	$sql_query = "UPDATE dashbord SET shope_name='$shope_name',item_name='$item_name',quantity='$quantity',amount='$amount' WHERE shope_id=".$_GET['edit_id'];


	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>demo</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>DEMO APPLICATION</label>
    </div>
</div>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="shope_name" placeholder="Shope Name" value="<?php echo $fetched_row['shope_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="item_name" placeholder="Iteam Name" value="<?php echo $fetched_row['item_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="quantity" placeholder="Quantity" value="<?php echo $fetched_row['quantity']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="amount" placeholder="Amount" value="<?php echo $fetched_row['amount']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>