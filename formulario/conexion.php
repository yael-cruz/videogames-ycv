<?php 
//conexion
$conexion = mysqli_connect("127.0.0.1", "root", "", "card");

//Mandar a traer los datos de mi formulario para que se pueda registrar

if (isset($_POST['registrar'])) {
	if ($_POST['correo'] && $_POST['contraseña']) {
		$correo =trim($_POST['correo']);
		$contraseña =trim($_POST['contraseña']);

		//insertar datos

		$insertar = "INSERT INTO recibo(correo, contraseña) VALUES ('$correo', '$contraseña')";
		$consulta = mysqli_query($recibo, $insertar);

		if ($consulta) {
			echo "Los datos se insertaron correctamente";
		}else{
			echo "Los datos no se insertaron correctamente en la DB";
		}

	}else{
		echo "Campos obligatorios";
	}
}