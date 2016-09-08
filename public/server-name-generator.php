<?php  

function pageController()
{

$data['adjectives'] = ['CHRIMSON','BLUE','CERULEAN','DARK','ELECTRIC','FIREBRICK','GAINSBORO','MELON','INDIGO','JADE'];
$data['nouns'] = ['APPLE','BANANA','CHERIMOYA', 'DURIAN', 'EGGFRUIT', 'FIG', 'GRAPEFRUIT','HONEYDEW', 'PLUM', 'JUJUBE'];

return $data;
}
extract(pageController());

function randomName($adjectives, $nouns){
	$rand_adjective = array_rand($adjectives, 1); 
	$rand_noun = array_rand($nouns, 1);

	$printMe = PHP_EOL.$adjectives[$rand_adjective]." ".$nouns[$rand_noun].PHP_EOL;
	return $printMe;
}
$myFavs = ['vanilla','cherry','salted caramel','pistachio', 'strawberry']

?>


<html>
<head>
	<title>PHP + HTML</title>
</head>
<body>
	<h1><?= randomName($adjectives, $nouns); ?></h1>
	
	<h2>My Favourite Ice Cream</h2>
	<ul>
		<?php foreach($myFavs as $key => $fav): ?>
			<?php if($key % 2 == 0): ?>
				<li><?= $fav; ?>
			<?php else: ?>
				<li><?= $fav; ?></li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>

</body>
</html>