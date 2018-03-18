<?php 


	require '../config/config.php';



	var_dump(CRUD::find('participantes'));
	var_dump($participantes = CRUD::all('participantes'));


	echo 'Id: '.$participantes[0]->id.'</br>';
	echo 'Nombre: '.$participantes[0]->nombre.'</br>';
	echo 'Edad: '.$participantes[0]->edad.'</br>';
	echo 'Ciudad: '.$participantes[0]->ciudad.'</br>';
