<?php
date_default_timezone_set('Europe/Warsaw');
$siteRoot = '';
$day = date('l');
$time = date('H:i');
$hour = date('H');
$monthname = date('M');
$monthname = strtolower($monthname);
$flowers = array('tulips','roses','daffodils','orchids','daisies');
$flowers2 = ['tulips','roses','daffodils','orchids','daisies'];
$flowers[] = 'irises';
$flowers2[] = 'irises';
$monthnumber = date('n');
$specials_alt = array(
'January special: Cacti galore',
'February special: Flowers and hearts for Valentines',
'March special: Bright red camellias',
'April special: Fresh tulips',
'May special: Beautiful bougainvillea',
'June special: Purple iris',
'July special: Stunning white hydrangeas',
'August special: Sunflowers',
'September special: Pink crysanthemums',
'October specal: Purple orchids',
'November special: Bonsai with rock',
'December special: Dried flowers for decoration'
);

$features = array(
'winter' => 'Beatiful arrangements for any occasion.',
'spring' => 'It must be spring! Delicate daffodils are here. ',
'summer' => "It's summer, and we're in the pink.",
'autumn' => "Summer's over, but our flowers are still a riot of colors."
);

$seasons = array(
'winter' => array('dec','jan','feb'),
'spring' => array('mar','apr','may'),
'summer' => array('jun','jul','aug'),
'autumn' => array('sep','oct','nov')
);

foreach ($seasons AS $key => $montharray){
	if(in_array($monthname, $montharray)){
		$season = $key;
		break;
	}	
}
//print_r($specials_alt);
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
<?php require 'includes/navigation.php';?>    

<div id="content">
<h4>Today is <?php echo $day; ?>. The time is now <?php echo $time; ?>.</h4>
<?php if ($hour > 5 && $hour < 12 ) { ?>
<p>Good morning.</p>
<?php }elseif($hour >= 12 && $hour < 18) { ?>
<p>Good afternoon.</p>
<?php }elseif($hour >= 18 && $hour < 32) { ?>
<p>Good evening.</p>
<?php } else{ ?>
<p>It's late at night.</p>
<?php } ?>
<img src="img/adobestock_<?php echo $monthname;?>.jpeg" width="400" alt="<?php echo $specials_alt[$monthnumber -1];?>"><br>
<ul><li><?php echo implode('</li><li>',$flowers) ;?></li></ul>

<ul>
<?php 
foreach ($flowers AS $flower){
	if($flower == 'daffodils'){
		continue;
	}
	echo '<li>' . ucfirst($flower) . '</li>';
	if($flower == 'orchids'){
		break;
	}
}	
?>
</ul>
<h2>Associated array of session habits</h2>
<p><?php echo $features['spring']; ?></p>
<p><?php echo "The tagline for spring is : {$features['spring']}"; ?></p>
<p>The fourth element in the flowers array is <?php echo $flowers[3]; ?>.</p>
<h3>How to create foreach loop throu assoc array:</h3>
<h4>Values</h4>
<?php
foreach ($features As $feature){
	echo "<p>$feature</p>";
};
?>
<h4>Keys and values</h4>
<?php
foreach ($features AS $key => $value){
	echo "<p>The caption for the <b>$key</b> feature is: <b>$value</b></p>";
}	
?>
<h4>Only keys</h4>
<?php
foreach ($features AS $key => $value){
	echo "<p>The caption for the <b>$key</b>.</p>";
}	
?>
<h2>Available of item in array:</h2>
<?php
$order = 'daffodils';
if(in_array($order,$flowers)){
	echo "<p>Yes, $order are in stock.</p>";
}else{
	echo "<p>Sorry, no $order available.</p>";
}
?>
<h2>Image depends of seasons:</h2>
<p><?php echo $features[$season];?></p>
<img src="img/feature_<?php echo $season ;?>" width="300" alt="">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla obcaecati ut, a quibusdam aspernatur soluta optio praesentium ab magni libero odit repellendus at, amet quasi. Nisi, at, ipsum! Illum ab consectetur natus minima. Porro laboriosam quod neque, rerum laborum asperiores error quas soluta, iusto labore ratione temporibus, dignissimos a voluptatem suscipit sint minus possimus rem in. Temporibus, unde incidunt expedita ut, ratione nisi in quibusdam quod voluptatum optio dolor labore iste repudiandae minima dolorem sequi, modi est nemo accusamus laudantium! Esse cupiditate nobis, dignissimos, facere ex architecto, quibusdam, eveniet aspernatur quia sunt tempore labore officiis et. Corporis odio repudiandae, consequuntur architecto voluptatem. Autem optio officia laudantium eveniet eligendi in voluptatem vitae voluptatibus, culpa praesentium perspiciatis harum eius. Placeat quas ad quibusdam tempora expedita ullam molestias libero? Cum facere dolorem magni error eligendi quos optio reiciendis, dignissimos quo. Maxime voluptatem obcaecati nemo ipsam minus perspiciatis quibusdam quo temporibus rerum nostrum laborum provident, laboriosam neque, ex, commodi, voluptates placeat. Cum harum ducimus atque porro nemo assumenda magnam facilis, aliquid maxime consectetur ea tempore. Harum corrupti minima ipsa itaque consequatur quam voluptatibus quidem possimus dolor! Enim quisquam minima, deserunt, eveniet nam ipsa et. Nostrum, rerum! Dolor corporis, aut expedita sapiente repudiandae quidem amet.</p>



<?php include 'includes/footer.php'; ?>
</div><!-- content -->

</body>
</html>