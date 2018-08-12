<?php 


	require '../config/config.php';

	
	/*-----------------------------

	CRUD::find($table,$opts);}

	$table = 'Nombre de la tabla a consultar';
	$opts = 'array con opciones paraconsulta: '
			array('rows' => , );

	-------------------------------*/
	
	echo "<h2>CRUD::find()</h2>";
	$args = array(
			'where' => 'id = ? || id = ?',
			'where_values' => [2,3] 
		);

	var_dump( CRUD::find('participantes',$args) );

	echo "<hr>";
	echo "<h2>CRUD::all()</h2>";
	$args = array(
		'limit' => 2,
		'order' => 'edad'
	);
	var_dump( $participantes = CRUD::all('participantes',$args) );


	echo "<h3>Ejemplo Imprimiendo </h3>";
	echo 'Id: '.$participantes[0]->id.'</br>';
	echo 'Nombre: '.$participantes[0]->nombre.'</br>';
	echo 'Edad: '.$participantes[0]->edad.'</br>';
	echo 'Ciudad: '.$participantes[0]->ciudad.'</br>';


	/*--------------------------------------------------

	-----------------------------------------------------*/
	echo "<hr>";
	echo "<h2>CRUD::count_all()</h2>";

	$args = array(
		'where' => 'edad > ?',
		'where_values' => [4]
	);
	echo '<h3>Total participantes: '.CRUD::count_all('participantes',$args).'</h3>';


	var_dump(CRUD::update('participantes',['nombre' => 'David'],'id = ?',[1]));


	echo "<hr>";
	echo "<h2>CRUD::insert()</h2>";
	$set = array(
		'nombre' => 'camila', 
		'edad' => 89, 
		'ciudad' => 'Neiva', 
	);
	$unique = array(
		'conditional' => 'nombre = ?',
		'where_values' => ['camila'] 
	);
	var_dump( $nuevo_participante = CRUD::insert('participantes', $set, $unique) );

	if ($nuevo_participante) {
		echo "Id insertado: ".$nuevo_participante[0]->insert_id;
	}

	/*DELETE*/

	echo "<hr>";
	echo "<h2>CRUD::delete()</h2>";
	var_dump(CRUD::delete('participantes','id = ?',[4]));


	echo "<hr>";
	echo "<h2>CRUD::falseDelete()</h2>";
	var_dump(CRUD::falseDelete('participantes','id = ?',[3]));