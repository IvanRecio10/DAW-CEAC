<?php 

/*1º Paso, leemos el archivo $_files para poder hacer las preubas.
  2º Paso, si elegimos borrara la carpeta primero miramos si queire borrar todo el directorio o solo si quiere borrar el contenido de dentro del directorio
  3º Paso, una vez ya sabemos si quiere borrar todo o solo los archivos creamos el scandir para poder entrar dentro del directorio y borrar los archivos de dentro
  4º */

	extract($_POST);
	//var_dump($_FILES);
	$directorio = "img/" . $nom_carpeta;
	$typePermitidos = ["image/jpg", "image/png", "image/jpeg"];
	$sizeMax = 70000;
	$borrarTodo = true;
	$archivos;
		
	foreach ($_FILES as $file) {

		$size = $file["size"];
		$type = $file["type"];
		$name = $file["name"];
		$error = $file["error"];
		$tmp_name = $file["tmp_name"];
		if ($nom_carpeta == "") {
				$codigo = 6;
				header("location: index.php?codigo=$codigo");
		}else{
			if ($borrar) {
				//Leemos el nombre de la caepeta para saber si quiere borrar todos lo archivos.
				if (strrchr($directorio, "*") == "*"){
					$borrarTodo = true;
					$directorio = rtrim($directorio, "*");
				}else{
					$borrarTodo = false;
				}
				if ($borrarTodo){
					$archivos = scandir($directorio);
					for ($i=0; $i < count($archivos); $i++) {
						$foto = "$directorio/$archivos[$i]";
						unlink("$foto");
					}
					rmdir($directorio);
					$codigo = 3; //Has borrado toda la carpeta.
					header("location: index.php?codigo=$codigo");
				}else{
					$archivos = scandir($directorio);
					for ($i=0; $i < count($archivos); $i++) {
						$foto = "$directorio/$archivos[$i]";
						unlink("$foto");
					}
					$codigo = 4; //Has borrado todos los archivos de dentro del directorio.
					header("location: index.php?codigo=$codigo");
				}

			}else {
				if (in_array($type, $typePermitidos) && $size <= $sizeMax) {
					if (file_exists($directorio)) {
						if (move_uploaded_file($tmp_name, "$directorio/" . $name)) {
							//Todo ha salido bien.
							$codigo = 0;
							header("location: index.php?codigo=$codigo");
						}else{
							$codigo = 1;
							header("location: index.php?codigo=$codigo");
						}
					}else {
						if(mkdir($directorio, 0777, true)){
							if (move_uploaded_file($tmp_name, "$directorio/" . $name)) {
								//Todo ha salido bien.
								$codigo = 0;
								header("location: index.php?codigo=$codigo");
							} else{
								//Error esa imagen ya ha sido introducida.
								$codigo = 1;
								header("location: index.php?codigo=$codigo");
							}
						}else{
							$codigo = 5; // Ha habido un error en la creaccion de la carpeta.
							header("location: index.php?codigo=$codigo");
						}
					}
				}else{
					// el tipo o el tamaño no es valido
					$codigo = 2;
					header("location: index.php?codigo=$codigo");
				}	
			}
		}

	}

	header("location: index.php?codigo=$codigo");
?>