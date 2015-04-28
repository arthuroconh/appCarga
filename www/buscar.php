<?php
	$conexion=mysql_connect("www.desarrollotricolor.com.ve","desarrol_a","chiquito123.") 
	or die("Problemas en la conexion");
	mysql_select_db("desarrol_seg",$conexion) or
	die("Problemas en la seleccion de la base de datos");
$choice =$_POST["button"]; 
	$f=mysql_query("SELECT * FROM `OP` ORDER BY `id` DESC limit 1");
	$j=mysql_fetch_array($f);
$cars = $j['img']; 
$bikes = $j['img']; 
if($choice == "1") print json_encode($cars); 
else print json_encode($bikes); ?>