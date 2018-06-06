<?php

include('validación');
include('conexion');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Datos del club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" content="css/estilo_footer.css">
  <link rel="stylesheet" href="css/estilo_form.css">

  
</head>
<body>
<?php
include('header.php')
?>


    <div class="background"> 
        <h1>INGRESE LOS DATOS DEL CLUB AL QUE PERTENECE O REPRESENTA</h1>
</div>
<BR>
  <form>
   
<BR>
    <form method="post" action="#.php">

 <a>NOMBRE DEL CLUB</a>
      <input name="club" type="text"><br><br><br>
    <a>CELULAR</a>
      <input name="cel" type="tel"><br><br><br>
      <a>TELÉFONO FIJO</a>
      <input name="cel" type="tel"><br><br><br>
    <a>CORREO</a>
      <input name="email" type="email"><br><br><br>
    <a>CIUDAD</a>
      <input name="ciudad" type="text"><br><br><br>
    <a>PAÍS</a>
      <input name="pais" type="text"><br><br><br>
      <br>
      <hr>
              
    
    <a href="entrenador_form.php" target="_self"> <input type="button" name="boton" value="Continuar" /> </a> 
     <a href="records_atleta.php" target="_self"> <input type="button" name="boton" value="Regresar" /> </a> 
    <a><input type="reset" name="reset" value="Limpiar" /></a> 
    <hr>

    </form>
             
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<div class="pagina">
<p>Página 3/6</p>
</div>

<?php
 include('footer.php');
?>
</body>
</html>
