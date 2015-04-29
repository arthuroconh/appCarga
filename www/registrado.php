<?PHP
    include ('conexion.php');

	session_start();
	$nombreimagen = $_FILES['pro_img']['name'];
	$tmpimagen = $_FILES['pro_img']['tmp_name'];
	$extimagen = pathinfo($nombreimagen);
	$ext = array("png","gif","jpg","wmp","raw");
	$urlnueva = "imagenes/".$nombreimagen;

	if(is_uploaded_file($tmpimagen)){
			copy($tmpimagen, $urlnueva);
		}
		else{
			echo "Error: Solo imganes formato (jpg, png o gif)";
		}

	$pro_img= $nombreimagen;
	$producto= "INSERT INTO `OP`(`id`,`img`) VALUES ('','$pro_img')";
	$insertar=mysql_query($producto) or die('No se pudo insertar datos debido a: '. mysql_error());
	$insertar=array();
	echo "Registrado";
?>