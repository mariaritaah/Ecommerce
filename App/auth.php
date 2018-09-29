<?php
session_start();

//Arquivo que vai ser permitir o manuseio das páginas as quais o usuário e senha correspondente terá ou não acesso.
if(!isset($_SESSION["idUsuario"]) || !isset($_SESSION["usuario"])){

 			header('Location: ../');
}else{

	$idUsuario = $_SESSION["idUsuario"]; 
	$usuario   = $_SESSION["usuario"];
	$perm	   = $_SESSION["perm"];
	$foto      = $_SESSION["foto"];

}

?>