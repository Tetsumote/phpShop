<?php
$answer = 42;
$price = 10.99;
//$title = 'The Hitchhiker\'s Guide to the Galaxy';
$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$description = 'A hilarius romp through space and time,
in which we learn the ultimate answer to life, the
universe and everything. You will love the book, but
maybe not the answer:';
$city = 'London';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Embedding PHP in HTML</title>
</head>
<body>
<?php include './externalRel.php' ;?>
    <br><br>
<?php include 'includes/external.php'; ?>
</body>
</html>