<?php

// Loading existing data:
$json = file_get_contents("test.json");
$data = json_decode($json, true);

// Adding new data:
$data[3] = array('Name' => 'Foo', 'Surname' => 'Bar');

// Writing modified data:
file_put_contents('test.json', json_encode($data, JSON_FORCE_OBJECT));

?>
