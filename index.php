<?php
//1 содать многомерный массив
$arrayBox = [
    'Africa' => [
		'Dwarf chimpanzee',
    	'Asian buffalo',
    	'fox',
    	'marsupial mice',
    	'Gray Parrot'
	],
    'Australia' => [
		'peacock',
    	'Gazelle Dorcas',
    	'flying foxes'
	]
];
//2 перебрать массив и создать новый
$newArray = array();

foreach($arrayBox as $continent => $animal){
	foreach($animal as $v){		
		if(strpos($v, ' ')){
			$newArray[] = $v;			
		}
	}
};

$animal1 = [];
$animal2 = [];
$allAnimal = [];

foreach($newArray as $animal){
	list($africa, $australia) = explode(' ', $animal, 2);
	$animal1[] = $africa;
	$animal2[] = $australia;
}

shuffle($animal1);
shuffle($animal2);

foreach(array_keys($animal1) as $i){
	$allAnimal[] = $animal1[$i] . ' ' . $animal2[$i];
}
echo '<pre>';
print_r ($newArray) . PHP_EOL . '<br>';

print_r ($allAnimal);
//print_r ($Animal) . PHP_EOL . '<br>';
//print_r ($shuffleAnimal) . PHP_EOL . '<br>';

?>
