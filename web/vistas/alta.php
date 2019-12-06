<?php
	
	include '../conec.php';
	
	
	require_once 'abstracta.php';
	require_once 'inteface.php';
	require_once 'main.php';

	$n=$_GET['nom'];
	$p=$_GET['pre'];
	$e=$_GET['exis'];
	$d=$_GET['des'];




	 $objeto = new Productos;
		$objeto->Insertar($n,$p,$e,$d);