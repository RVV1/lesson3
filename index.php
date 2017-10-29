<?php
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

$newArray = array();
$secondArray = array();
foreach($arrayBox as $continent => $animal){
	foreach($animal as $v){
		if(strpos($v, ' ')){
			$newArray[] = $v;
			if(substr($v, 0, 6)){
				$secondArray[] = $v;
			}
		}
	}
};


echo '<pre>';
print_r ($newArray) . PHP_EOL . '<br>';
print_r ($secondArray) . PHP_EOL . '<br>';

?>
