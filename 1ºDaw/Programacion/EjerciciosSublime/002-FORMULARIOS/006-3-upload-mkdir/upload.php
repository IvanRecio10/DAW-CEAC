<?php 

	//1º Obtenemos datos del fichero procedente del formulario con la variable superglobal $_files = array asociativo multidimensional
	//No puedo acceder a los datos del input de type = "file" con $_POST, $_GET, $_REQUEST
	//Para que ese array se genere es obligatorio emplear el archivo encitype = "" dentro de la etiqueta del form.
	//Siempre que en el formulario este el input tipo file el metodo de envio sera post.

	//var_dump($_FILES);

	$size = $_FILES['archivo']["size"]; //tamaño en bytes del archivo.
	$type = $_FILES["archivo"]["type"]; //devuelve el tipo del archivo.
	$name = $_FILES["archivo"]["name"]; //nombre original del archivo.
	$error = $_FILES['archivo']["error"]; //codigo de error asociado a la carga del archivo (0: no hay error, 1: la subida del tamaño excede el max permitido, 2: la subida del fichero excede el max permitido por el formulario, 3: subida incompleta, 4: no hay fichero).

	$tmp_name = $_FILES['archivo']["tmp_name"]; //Nombre temporal del archivo.

	//Sacamos la extension del fichero.
	$name_array = explode(".", $name);
	$ext = mb_strtolower(end($name_array), "UTF-8");

	//Valores permitidos.

	$extPermitidas = array("jpg", "png", "gif", "jpeg");
	$typePermitidos = array("image/jpg", "image/png", "image/gif", "image/jpeg");

	$sizeMax = 90000; //bytes
 
 	if (in_array($ext, $extPermitidas) && in_array($type, $typePermitidos) && $error == 0 && $sizeMax <= $sizeMax) {
 		
 		if(file_exists("upload2")){
 			if(move_uploaded_file($tmp_name, "upload2/" . time() . "_" . $name)){
 				$codigo = 2;
 			}else{
 				$codigo = 3;
 			}
 		}else{
 			//mkdir("ruta/NombreCarpeta", permisos) devuelve T/F en funcion de si se ha creado correctamente.
 			if(mkdir("upload2", 0777)){
 				if(move_uploaded_file($tmp_name, "upload2/" . time() . "_" . $name)){
 					$codigo = 2;
 				}else{
 					$codigo = 3;
 				}
 			}else{
 				$codigo = 4;
 			}
 		}

 	}else{
 		$codigo = 0;
 	}
 
 	header("location: index.php?c=$codigo");
 ?>