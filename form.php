<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dokument bez tytułu</title>
</head>

<body>




<pre>
<?php
if (isset($_POST['order'])){
	print_r($_POST);
}

?>
</pre>



<pre>
<?php
if(isset($_GET['search'])){
	print_r($_GET);
}
?>
</pre>




</body>
</html>