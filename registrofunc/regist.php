<?PHP
	$nombre = $_GET['rnombre'];
	$correo = $_GET['rcorreo'];
	$sexo = $_GET['rsexo'];
	$contra1 = $_GET['rcontra'];
	$contra2 = $_GET['rconfirmcontra'];

	$servername = "localhost";
	$username = "id14782684_reg123";
	$password = "tq_Tc7SC/-5bajXh";
	$dbname = "id14782684_reg";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error: ".mysqli_connect_error());
	}
	if($contra1 == $contra2)
	{
		$sql = "INSERT INTO `registrados`(`nombre`, `correo`, `sexo`, `contraseña`) VALUES('$nombre','$correo','$sexo','$contra1');";
		if(mysqli_query($con,$sql))
		{
			echo "¡REGISTRO EXITOSO!";
		}
		else
		{
			echo "¡HUBO UN ERROR!";
		}
	}else
	{
		echo "¡CONTRASEÑA INCORRECTA!";
	}

	mysqli_close($con);
?>
