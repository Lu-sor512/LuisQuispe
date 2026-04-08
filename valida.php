<?php
$usuario=$_POST['user'];
$password=$_POST['pass'];
include('conecta.php');
echo $usuario;
echo $password;
$consulta="select * from usuarios where usu_name='$usuario' and usu_pass='$password'";
$resultado1=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado1); //puede darme uno o mas resultados
echo $consulta;

if ($filas)
{
	header("location:plataforma.php?Id=$usuario");
}
else
{
	header("location:index.html");
}


