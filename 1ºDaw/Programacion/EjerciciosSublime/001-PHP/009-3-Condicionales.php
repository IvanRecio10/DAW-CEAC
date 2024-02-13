<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Condicionales</title>
</head>
<body>
	<h2>Validacion de campos de formulario</h2>

		<form action="<?php $_SERVER["PHP_SELF"]?>" methog = "get">
			<input type = "email" name = "email" placeholder="Introduce Email">
			<input type = "password" name = "password" placeholder="Introduce tu contraseña">
			<input type="submit" name="form1" value ="Enviar">
		</form>

		<?php 

			if (isset($_GET["form1"])){
				if (empty($_GET["email"]) || empty($_GET["password"])) {
					echo "Debes rellenar todos los campos";
				}else{
					echo "Login correcto";
				}
			}
		?>

		<h2>Verificacion de Email y Password</h2>

		<form action="<?php $_SERVER["PHP_SELF"]?>" method = "post">
			<input type = "email" name = "email" placeholder="Introduce Email">
			<input type = "password" name = "password" placeholder="Introduce tu contraseña">
			<input type="submit" name="form2" value ="Enviar">			
		</form>

		<?php 
			$user_perm = array("yolanda@ceacfp.com" , "yolandaruescas@ceacfp.com");
			$pass_perm = array("0000", "1111");

			if (isset($_POST["form2"])){
				if (($_POST["email"] == $user_perm[0] || $_POST["email"] == $user_perm[1]) && ($_POST["password"] == $pass_perm[0] || $_POST["password"] == $pass_perm[1])){
					echo "Usuario correcto";
				} else {
					echo "Usuario incorrecto";
				}
			}else {
				echo "Debes rellenar todos los datos";
			}

		?>

		<h2>Formularo co Checkbox</h2>

		<form action="<?php $_SERVER["PHP_SELF"] ?>" method= "get">
			<input type="text" name="nombre" placeholder="Introduce tu nombre">
			Soy mayor de edad <input type="checkbox" name="Edad">
			<input type="submit" name="form3" value="Enviar">
		</form>

		<?php 
			if(isset($_GET["form3"])){
				if (isset($_GET["nombre"])) {
					if (isset($_GET["Edad"])){
						echo "Bienvenido " . $_GET["nombre"];
					}else{
						echo "Eres menor y no puedes pasar";
					}
				} else {
					echo "Debes indicar tu nombre";
				}
				
			}else {
				echo "Debes rellenar todos los datos";
			}
		?>

		<!-------------------------------------------->

		<h2>Formulario con RadioButtom</h2>

		<form action="<?php $_SERVER["PHP_SELF"]?>" method = "get"> 

			<input type="text" name="nombre" placeholder="Introduce tu nombre">
			<input type="text" name="apellido" placeholder="Introduce tu apellido">
			<input type="number" name="edad" placeholder="Introduce tu edad">
			<input type="radio" name="sexo" value="mujer">F
			<input type="radio" name="sexo" value="hombre">M
			<br>
			<input type="submit" name="form4" value="Enviar">
		</form>

		<?php 
			if(isset($_GET["form4"])){
				if($_GET["edad"] >= 18){
					if($_GET["sexo"] == "hombre"){
						echo " Bienvenido " . $_GET["nombre"] . " " . $_GET["apellido"];
					}else{
						echo " Bienvenida " . $_GET["nombre"] . " " . $_GET["apellido"];
					}
				}else{
					echo "Eres menor y no puedes pasar";
				}
			}else{
				echo "Debes rellenar todos los datos";
			}

		?>
</body>
</html>