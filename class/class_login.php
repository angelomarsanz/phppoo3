<?php
//iniciamos la sesión
session_start();
//como estamos en la carpeta class podemos llamarlo directamente
require_once("conexion.php");
//creamos la clase blog
class blog
{
//esta función será la encargada de comprobar si existe el usuario en la base de datos
	public function nueva_sesion()
	{
		//recogemos las variables post del formulario
		$nombre = ($_POST['nom']);
		$password = ($_POST['pass']);
		//realizamos la consulta sql 
		//colocamos mysql_real_scape_string para evitar inyecciones
	    $query = "SELECT 
		* 
		FROM
		usuarios
		WHERE username='".$nombre."' 
		AND
		password='".$password."';";
		//ejecutamos la consulta y guardamos el resultado en la variable resultado
		$resultado = Conectar::con()->query($query);
		/*si el número de filas devuelto por la variable resultado es 1,
		lo que significa que en la base de datos blog, en la tabla usuarios
		existe una fila que coincide con los datos ingresados
		nos envíe a logueado.php con una variable de sesión que llamaremos $_SESSION['nick'] a la que    asignamos el valor del campo username de ese usuario en la base de datos, que sería como el home de nuestra página,
		en otro caso, nos deja en nueva_sesion.php, con una variable get llamada usuario
		y con el valor no_existe.*/
		if($reg = $resultado->fetch_assoc()) 
		{
			echo $reg['username'];
			$_SESSION['nick'] = $reg['username'];	
			header("Location:logueado.php");
		}else{
			header("Location:nueva_sesion.php?usuario=no_existe");
		}
			
	}
}
?>