<?php
	
	require 'vendor/autoload.php';
	//$connection = new MongoDB\Client; sin especificar

	$connection = new MongoDB\Client('mongodb://localhost:27017'); //especificando

	$database = $connection->papeleria;
	$collection = $database->productos;

	//$collection = $connection->ggvdTest->actor; en una sola linea

	$document = array( 'nombre' => 'esta ', 'precio_u' => 85, 'existencia' => 1, 'descripcion' => 'prueba' );

//$collection->insertOne($document);//insertar 


// actualizar

	$collection->updateMany(
	array('nombre' => 'esta '), 
	array('$set' => array('descripcion' => 'prueba'))

	 );


	$hola="hola";


/*

	eliminar

	$collection->deleteOne(array('last_name' => 'Leia'));

	busqueda

	
$result = $collection->find(array('sex' => 'female'));

echo '<h2>Actresses after updating and deleting bad data</h2>';

foreach ($result as $document) {
	echo $document['first_name'] . " " . $document['last_name'] . '</br>';
}

$result = $collection->find(array('born' => array('$lt' => 1930)));

echo '<h2>Actors born before 1930</h2>';

foreach ($result as $document) {
	echo $document['first_name'] . " " . $document['last_name'] . " " . $document['born'] , '</br>';
}

*/
