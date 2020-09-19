<?php
if(isset($_POST) && array_key_exists('Enviar',$_POST)){
  $nombre = $_POST['nombre'];
  $contra1 = $_POST['contra1'];

  $servername = "localhost";
	$username = "id14782684_reg123";
	$password = "tq_Tc7SC/-5bajXh";
	$dbname = "id14782684_reg";
	$con = mysqli_connect($servername,$username,$password,$dbname);

  $sql = "SELECT * FROM `registrados` WHERE nombre='$nombre' and contra1='$contra1'";
  $result=mysqli_query($con, $sql);

  $count=mysqli_num_rows($result);

  if($count==1){
  $_SESSION["nombre"]="nombre";
  $_SESSION["contra1"]="contra1";
    echo "SESIÓN INICIADA CON ÉXITO.";
  }

  else {
    echo "HUBO UN ERROR.";
    }
  }

else{
  //ESPACIO VACÍO
  }
?>
