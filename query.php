<?php
/*$con= new conexion();
$con->buscardatos();

$query="select * from usuarios where u_documento = $doc";
$resultados = mysql_query($query);

while ($fila = mysql_fetch_array($resultados)) {
  echo "$fila[u_nombre]" <br>;
  echo "$fila[u_apellido]" <br>;
  echo "$fila[u_documento]"<br>;
  echo "$fila[u_email]";
}*/

/*if(isset($_GET['pepito'])){
  echo "<script>alert('se recibe por get')</script>";
}*/

include("conexion.php");
$doc=$_POST['doc'];
$row = DB::queryFirstRow("select * from usuarios where u_documento = %i", $doc);
//$results = DB::query("select * from usuarios where u_documento = %i", $doc);
//$results = DB::query("select * from usuarios");

?>


<html>
<!DOCTYPE html>


<head>
	<title>Buscar competidores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>

  
</head>

<body>

  <h1>CA M P E O N A T O  N AC I O N A L <br>      U.S.K.A. 2 0 1 8
T I N K U  D E  O R O</h1>
 <h1>KICK BOXING - K1 RULES – MUAY THAI</h1>
<h1>C O L O M B I A 2 0 1 8 <br>
“KICK DRUGS OUT OF YOUR LIFE”<br>
“Patea las drogas fuera de tu vida”</h1>


<fieldset>
 <h1>Datos recuperados de la consulta de base de datos</h1>
</fieldset>
<br><br><br><br>


<table>
<thead>
  <tr>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Documento</th>
  <th>Peso</th>
  <th>Escuela</th>
  </tr>
</thead>
<tbody>

<?php
  echo '<tr><td>'.$row["u_nombre"].'</td>';
  echo '<td>'.$row["u_apellido"].'</td>';
  echo '<td>'.$row["u_documento"].'</td>';
  echo '<td>'.$row["u_peso"].'</td>';
  echo '<td>'.$row["u_escuela"].'</td></tr>';
?>

</tbody>
</table>



<fieldset>
<input type="submit" name="Regresar" action="index.php"/><br>
<input type="submit" action="db_formulario1.php" name="Agregar"/><br>
<input type="submit" action="" name="Editar"/><br>
</fieldset>

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

  <footer class="container-fluid text-center">
  <a style="color:#75B4f0";>MJ - </a><a style="color:white";>Back</a><a style="color:red";>&</a>Frontend<p style="color:#bdd7f0";>Developers</p>
</footer>

</body>

</html>
