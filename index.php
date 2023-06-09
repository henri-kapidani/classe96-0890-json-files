<?php
$students = [
	[
		'name' => 'Mario',
		'last_name' => 'Rossi'
	],
	[
		'name' => 'Giovanna',
		'last_name' => 'Bianchi'
	],
];

// header('Content-Type: application/json');
// echo json_encode($students);


// legge la stringa json da un file
// $json_string = file_get_contents('students_data.json');
// $array_from_json = json_decode($json_string, true);
// var_dump($array_from_json);


$json_string = json_encode($students);
file_put_contents('students_data.json', $json_string);