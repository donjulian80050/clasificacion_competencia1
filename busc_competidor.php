

<html>
<!DOCTYPE html>
<?php
//Imprimir datos de envio de informacióny a donde está llegando
print_r('$_REQUEST');
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Buscar competidores</title>
  <link rel="stylesheet" href="css/estilo_clasificacion.css">
</head>

<body>

  <h1>CA M P E O N A T O  N AC I O N A L <br>      U.S.K.A. 2 0 1 8
T I N K U  D E  O R O</h1>
 <h1>KICK BOXING - K1 RULES – MUAY THAI</h1>
<h1>C O L O M B I A 2 0 1 8 <br>
“KICK DRUGS OUT OF YOUR LIFE”<br>
“Patea las drogas fuera de tu vida”</h1>

<h2>VERIFIQUE SI EL COMPETIDOR YA SE ENCUENTRA REGISTRADO</h2>
<br>
<form method="post" action="query.php" name="consulta_competidor">
<a>Ingresar documento</a>
<input name="doc" type="search" placeholder="SÓLO NÚMEROS">


<br>
<input type="submit" name="buscar" action="query.php"/>

</form>

<div id="contenido">
</div>
</body>

</html>