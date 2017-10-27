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

foreach($array as $continent => $animal){
	if(strpos($animal, ' ')){
		$newArray = array();
		//echo $animal . PHP_EOL . '<br>';
		$newArray[] = $animal . PHP_EOL . '<br>';
		print_r ($newArray) . PHP_EOL . '<br>';
	}
};



//echo '<pre>';
//print_r ($array);

//echo '<pre>';
//print_r ($newArray);
?>
