<html>


    <head>
        <meta charset="UTF-8">
        <title>Registro Clientes</title>
        <link rel="stylesheet" href="css/estilo_tnorte.css">
    </head>

 <body>

     <?php
	 error_reporting(-1);
	 ini_set('error_reporting', E_ALL);
		ini_set("display_errors",1);// para verificar errores dentro del código
	 ECHO "<PRE>";
     PRINT_R($_POST);
     
     
     //Para halar los datos del formulario "creación de usuarios"
    $name=$_POST['nombre'];
    $last_name=$_POST['apellido'];
    $birth=$_POST['birth'];
    $age=$_POST['edad'];
    $eps=$_POST['eps'];
    $group=$_POST['escuela'];
		$doc=$_POST['doc_num'];
		$type_doc=$_POST['tipo_doc'];//llamado del campo del formulario
		$cel=$_POST['cel'];
	 	$email=$_POST['email'];
  	$ciudad=$_POST['ciudad'];
    $pais=$_POST['pais'];
    $peso=$_POST['peso'];
		//DIE('FIN');

//configuración base de datos

     $host="localhost";
     $usuario="root";
     $passw="";
     $db="piramide_torneos";
	 $enlace=mysql_connect($host,$usuario,$passw);
	 mysql_select_db($db,$enlace);

//Query de ingreso de datos
     $consulta= mysql_query("insert into usuarios
     (u_nombre,u_apellido,u_fecha_nacimiento,u_edad,u_documento,u_tipo_doc,u_cel,u_email,u_ciudad,u_pais,u_eps,u_peso,u_escuela) values
     ('$name','$last_name', $birth,$age,$doc,	$type_doc,$cel,$email,$ciudad,$pais,$eps,$peso,$group)",$enlace);


  echo "<h1>El registro se hase ha procesado correctamente.</h1><br>";
	//confirmación de los datos de registro.

   /* echo "<h2>Los datos registrados por ud son los siguientes:</h2><br>";
	echo "<p>Podrá verificar sus datos ingresados a continuación: </P><br>";
    echo "<p>Su(s) nombre(s):$name</p><br>";
	echo "<p>Su(s) apellido(s):$last_name</p><br>";
	echo "<p>Su usuario:$user</p><br>";
	echo "<p>Su correo:$email</p><br>";
	echo "<p>Su tipo de documento:$type_doc</p><br>";

	 echo "<button>Regresar</button>"*/
	?>

 </body>

</html>
