<?php


/*if(isset($_POST['username'])){
	//echo "<script>alert('usuario enviado')</script>"; 
	$user=$_POST['username'];
}

if(isset($_POST['pass'])){
	echo "<script>alert('contraseña enviada')</script>";
	$contra=$_POST['pass'];
}*/

include("conexion.php");
//echo "usuario: es ".$doc."contraseña:  es".$passcrypt;


if(isset($_POST['username']) && isset($_POST['pass'])){
	$doc=$_POST['username'];
	$contra=$_POST['pass'];
	$passcrypt=MD5($contra);	
		$query = DB::query("SELECT * FROM usuarios_login WHERE usuario = %s AND contrasena=%s",$doc, $passcrypt);
		
		if ($query){
			
			session_start();
			$_SESSION['idUsuario']=$doc;
			$row=mysqli_fetch_array($query);
			$_SESSION['nombre']=$row=['$doc'];
			$_SESSION['validacion']=1;

			echo "<script>window.open('administracion.php','_self')</script>";

		}

		else{
			echo "<script>alert('Usuario o contraseña no encontrados en la base de datos.')</script>";
		}

}
	

?>

<html lang="en">
		<!DOCTYPE html>


<head>
	<title>Login piramide</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/kickboxing.jpg);">
					<span class="login100-form-title-1">
						Ingrese al portal
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="login.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Usuario requerido">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="username" placeholder="Ingrese su usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Contraseña requerida">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="Ingrese contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Recuérdame
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Olvidó la contraseña?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Ingrese
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>