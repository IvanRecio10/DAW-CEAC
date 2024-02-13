<?php  

	$listaAlumnos = ['Maria', 'Ivan', 'Sergio', 'Victor', 'Marco', 'Diego', 'Yamir', 'Jose', 'Alba', 'Sonia', 'Alberto', 'Ana', 'Celia', 'Aaron', 'Ester', 'Rodrigo'];

	while (sizeof($listaAlumnos) != 0) {
		$numero = rand(0, sizeof($listaAlumnos) -1);
		echo "<p>" .$listaAlumnos[$numero] . "</p>";
		array_splice($listaAlumnos, $numero,1);
	}

?>