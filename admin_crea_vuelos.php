<?php 
	include("php/DB.php");
	$bd= new DB();
	$origen=$_POST["origen"];
	$destino=$_POST["destino"];
	if (isset($_POST["escala"])){
		$escalas=$_POST["escalas"];
	}
	session_start();
	$_SESSION["origen"]=$origen;
	$_SESSION["destino"]=$destino;
	if(!isset($_POST["escalas"])) {
	$consulta="INSERT INTO VUELOS_ESPECIFICOS (origen, destino) VALUES ('$origen', '$destino');";
	}else{
	$consulta="INSERT INTO VUELOS_ESPECIFICOS (origen, destino, escala) VALUES ('$origen', '$destino', '$escalas');";
	}
	echo $consulta;
	var_dump($bd->query($consulta));
	header("Location: altasVuelosDisponibles.html");

 ?>