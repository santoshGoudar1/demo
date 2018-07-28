<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{

	$shope_name = $_POST['shope_name'];
	$item_name = $_POST['item_name'];
	$quantity = $_POST['quantity'];
	$amount=$_POST['amount'];

	$sql_query = "INSERT INTO dashbord(shope_name,item_name,quantity,amount) VALUES('$shope_name','$item_name','$quantity','$amount')";

	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}

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
    <td align="center"><a href="index.php">User Side</a></td>
    </tr>
    <tr>
    <td><input type="text" name="shope_name" placeholder="Shope Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="item_name" placeholder="Item Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="quantity" placeholder="Quantity" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="amount" placeholder="Amount" required /></td>
    </tr>
    <tr>
    <td><center><button type="submit" name="btn-save"><strong>SAVE</strong></button></center></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>