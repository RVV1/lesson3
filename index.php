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

//3 создать строку и вытащить из нее отрезки слов и перемещать их между собой
$Animal = 'Dwarf chimpanzee Asian buffalo fox marsupial mice Gray Parrot peacock Gazelle Dorcas flying foxes';

$Animal = explode(' ', $Animal);
shuffle($Animal);

foreach($Animal as $k => $v){
	echo $k . ' ' . $v . ' ' . $v . '<br>';
}
echo '<pre>';
print_r ($newArray) . PHP_EOL . '<br>';
//print_r ($Animal) . PHP_EOL . '<br>';
//print_r ($shuffleAnimal) . PHP_EOL . '<br>';

?>
