<!DOCTYPE html>
<html>
<head>
	<title>Primitiva</title>
	<style type="text/css">
		body{
			margin: 0 auto;
			text-align: center;
		}
		.volver{
			text-decoration: none;
			color: white;
		}
		button{
			margin: 1em;
			background-color: grey;
			border: none;
			width: 150px;
			height: 30px;
			border-radius: .5em; 
		}
		h1{
			font-family: "Impact";
		}
		h2{
			margin:10px ;
		}
		input[type="submit"]{
			margin-top: 10px;
			background-color: grey;
			color: white;
			text-decoration: none;
			border: none;
			width: 150px;
			height: 30px;
			border-radius: .5em;
		}
		input[type="radio"]{
			margin: 10px;
		}
		input[type="number"]{
			margin:10px;
		}
	</style>
</head>
<body>

	<?php  
		//Hacemos la funcion que nos genere los 6 numeros aleatorios
		function generarNumero(){
			$listaAleatorio = array();
			//Entramos en un bucle donde va a estar funcionando hasta que genere 6 numeros distintos aleatorios
			while (sizeof($listaAleatorio) < 6) {
				$numeroAleatorio = rand(1,49);
				//Si el numero que ha generado esta no esta en la lista te lo añadira.
				if (!in_array($numeroAleatorio, $listaAleatorio)){
					array_push($listaAleatorio, $numeroAleatorio);
				}
			}
			return $listaAleatorio;
		}

		//Esta funcion nos va a comprobar si los numeros estan repetidos
		function comprobarNumero($listaUsuario){
			//Creamos una lista que con la funcion array_unique nos quite los numeros repetidos
			$lista = array_unique($listaUsuario);
			//Si la lista que hemos creado es mayor a la que pasamos te devolvera un valor falso t se volveran a pedir los numeros.
			if(count($listaUsuario) > count($lista)){
				return false;
			}
			return true;
		}

		//Esta funcion nos va a pintar el ffedback de lo que hagamos en el juego de la primitiva.
		function pintarFeedback($listaUsuario, $listaJuego){
			$contador = 0;
			//Recorremos la lista del juego y vamos comprobando cada numero con los del usuario.
			foreach ($listaJuego as $numeroJuego) {
				//Si el numero del la lista del juego esta en la lista del usuario se sumara un 1 al contador para mas tarde saber el numero de aciertos
				if (in_array($numeroJuego, $listaUsuario)) {
					$contador++;
				}
			}

			//Por ultimo pintaremos el feedback.
			//Si el contador ha llegado a 6 es que hemos acertado todos los numeros de la primitiva
			if ($contador == 6) {
				echo "<p>Enhorabueno has ganado la apuesta has acertado los 6 números</p>";
			}else{
				echo "<p>Ohhh, has tenido $contador aciertos. Otra vez sera.</p>";
			}
			foreach ($listaUsuario as $numero) {
				echo "$numero ";
			}

			echo "<p>La lista de la primitiva era:</p>";

			foreach ($listaJuego as $numero) {
				echo "$numero ";
			}

			echo "<br><button><a href='ej_primitiva.php' class='volver'>Volver a Jugar</a></button>";

		}

		//Primero vamos a generar la lista del juego llamando a la funcion que nos lo haga.
		$listaJuego = generarNumero();

		//Si no ha llegado ningun parametro por la url entrara dentro de este if donde nos pintara un bienvenidos y el formulario inicial
		if(empty($_GET)){
			//Primero al iniciar el programa pintamos un Bienvenido a la primitiva y el formulario para elegir la opcionsi va a ser automatico o manual.
			echo "<h1>Bienvenido a la Primitiva</h1>";

			$formularioInicial = "<form action='ej_primitiva.php' method='get' enctype='application/x-www-form-urlencoded'>
									<label>Aleatorio</label>
									<input type='radio' name='opcion' value='automatico' required><br>
									<label>Manual</label>
									<input type='radio' name='opcion' value='manual'><br>
									<input type='submit' value='Enviar'>
									<input type='hidden' name='repetido' value='no'>
								  </form>";	
			echo "$formularioInicial";


		} 
		//Una vez ya hemos elegido la opciopn en el formulario anterior entraremos en este if donde empezaremos el juego depende de la opcion elegida anteriormente.
		if(!empty($_GET['opcion'])){
			//Una vez ya hemos elegido el tipo de generacion de numeros que queremos lo comprobaremos para saber cual es.
			if($_GET['opcion'] == 'manual'){
				//Si la opción es manual mandaremos un formulario para que el usuario nos pase los 6 numeros con los que quiera jugar y que sera necesario que sea del 1-49.
				//El valor de $_GET['repetido'] es un valor que le hemos pasado por la url del primer formulario para saber que nunca le hemos pasado ningun numero para jugar en la loteria.
				if ($_GET['repetido'] != 'si') {
					
					$formularioManual = "<form action='ej_primitiva.php' method='get' enctype='application/x-www-form-urlencoded'>
												<input type='number' name='1' min='1' max='49' required>
												<input type='number' name='2' min='1' max='49' required>
												<input type='number' name='3' min='1' max='49' required>
												<input type='number' name='4' min='1' max='49' required>
												<input type='number' name='5' min='1' max='49' required>
												<input type='number' name='6' min='1' max='49' required><br>
												<input type='submit' name='enviar' value='Enviar'>
												<input type='hidden' name='opcion' value='manual'>
												<input type='hidden' name='repetido' value='si'>
					    					 </form>";

					echo "<h2>Introduzca los numeros</h2>";

					echo "$formularioManual";
				} 

				//Una vez ya hemos enviado el formulario con los 6 numeros que hayamos elegido comprobaremos si hay algun numero que hayamos puesto repetido
				if (isset($_GET['enviar'])) {
					//Primero añadiremos los datos que le hemos pasado a traves del formulario a traves de una lista.
					$listaUsuario = array();
					for ($i=1; $i < 7; $i++) { 
						array_push($listaUsuario, $_GET["$i"]);
					}
					
					//Ahora llamaremos a la funcion que nos comprueba si hay algun numero repetido en la lista que le hemos pasado.
					if(comprobarNumero($listaUsuario)){
						//Si no hay ningun numero repetido llamaremos a la funcion que nos pinte el feedback
						pintarFeedback($listaUsuario, $listaJuego);					
					}else{
						//Si no le pintaremos un error y le volveremos a pasar parametros para que nos vuelva a repetir el formulario con los 6 numeros a introducir. 
						echo "<p>Vas a tener que cambiar algun número</p><br>";
						echo "<form action='ej_primitiva.php' method='get' enctype='application/x-www-form-urlencoded'>									
								<input type='hidden' name='opcion' value='manual'>
								<input type='hidden' name='repetido' value='no'>
								<input type='submit' value='Volver a Enviar'>
			    			  </form>";
					}
						
				}

			}else{
				//Si la opcion que hemos llamado es la del azar llamamos a la funcion para que nos genere 6 numeros al azar con los que vamos a jugar
				$listaUsuario = generarNumero();
				pintarFeedback($listaUsuario, $listaJuego);
			}
			//Por ultimo comprobaremos los cartones para saber si alguno de ellos es el ganador
			
		}

	?>
</body>
</html>