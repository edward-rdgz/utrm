<?php 
require_once "utils.php";
$alumno=new alumno($_POST['correo'],$_POST['pass']);
$validaralumno=$alumno->validar();

echo json_encode($validaralumno);
?>