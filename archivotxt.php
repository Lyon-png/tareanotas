<?php

$ar=fopen("Read_me.txt","a") or die ("ERROR");

$asu=$_REQUEST['asunto'];
$des=$_REQUEST['descripcion'];

fwrite($ar, $asu);
fwrite($ar, "\n");
fwrite($ar, $des);
fwrite($ar, $"\n");
echo "Se creo correctamente el archivo";

$smg = null;
if (isset($_POST['directorio']));
$carpeta=htmlspecialchars($_POST['carpeta']);
$directorio=$carpeta;
if (!is_dir($directorio))
{
 $crear = mkdir($directorio, 0777, true);
 if ($crear)
 {
 	$msg="Se ha creado correctamente";
 }
 else
 {
 	$msg="ERROR al crear";
 }
}
else
{
	$msg="el directorio que intentas crear ya existe";
}
?>