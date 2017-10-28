<?php
$array = [
    'Africa' => 'Dwarf chimpanzee',
    'Australia' => 'Asian buffalo',
    'Asia' => 'fox',
    'East America' => 'marsupial mice',
    'West America' => 'Gray Parrot',
    'Antarctica' => 'peacock',
    'West Asia' => 'Gazelle Dorcas',
    'East Asia' =>'flying foxes'
];

$newArray = array();

foreach($array as $continent => $animal){
	if(strpos($animal, ' ')){
		//echo $animal . PHP_EOL . '<br>';
		$newArray[] = $animal . PHP_EOL . '<br>';
		shuffle($newArray);
	}
};


print_r ($newArray) . PHP_EOL . '<br>';


?>
