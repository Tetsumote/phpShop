<?php

$siteRoot = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php';?>    

<div id="content">
<h1>website</h1>

<form method="post" action="form.php">
	<p>
		<label for="textfield">Text Field:</label>
		<input type="text" name="textfield" id="textfield">
	</p>
	<p>
		<label for="quantity">Number:</label>
		<input type="number" name="quantity" id="quantity" min="0" value="0">
	</p>
	<p>
		<label for="color">Color:</label>
		<select name="color" id="color">
			<option value="yellow" selected>Yellow</option>
			<option value="red">Red</option>
			<option value="green">Green</option>
			<option value="orange">Orange</option>
		</select>
	</p>
	<p>
		<input type="submit" name="order" id="order" value="Order">
		<input type="hidden" name="price" id="price" value="3">
	</p>
	
</form>
<pre>
<?php
if (isset($_POST['order'])){
	print_r($_POST);
}

?>
</pre>
<form method="get" action="form.php">
	<p>
		<label for="textField"></label>
		<input type="text" name="textField" id="textField">
	</p>
	<p>
		<input type="submit" name="search" id="search" value="search">
	</p>
</form>
<pre>
<?php
if(isset($_GET['search'])){
	print_r($_GET);
}
?>
</pre>
<?php if (isset($_GET['textField'])){ ?>
<p>You search for <?php echo $_GET['textField'];?>.</p>
<?php } ?>



<?php include 'includes/footer.php'; ?>
</div><!-- content -->
</body>
</html>