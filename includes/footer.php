<?php
$startYear = 2013;
$thisYear = date('Y');
if($thisYear > $startYear){
    $thisYear = date('y');
    $copyright = "$startYear &ndash; $thisYear";
}else{
    $copyright = $startYear;
}

?>
<footer>
<h5>Copyright &#9400; <?php echo $copyright; ?> Paweł Grajewski</h5>
</footer>