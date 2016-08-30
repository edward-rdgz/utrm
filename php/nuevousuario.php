<?php 
require_once "utils.php";
$pass=md5($_POST['pass']);
$alumno=new alumno($_POST['email'],$pass,$_POST['nombre'],$_POST['apellido'],$_POST['sexo'],$_POST['edad']);
$idguardado=$alumno->save();
if($idguardado>0)
   $respuesta=array("guardo"=>1); 
   else
   $respuesta=array("guardo"=>0);
   
   echo json_encode($respuesta);

?>