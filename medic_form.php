<?php

include('validación');
include('conexion');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>INFORMACIÓN MÉDICA</title>
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

<BR>
<div class="background">
<h1>Ingrese los siguientes datos médicos</h1>
</div>
<BR>
     <hr>
        <a>EPS</a>
      <input name="eps" type="text" placeholder="Ingrese su EPS"><br>
      <hr>
    <a>Grupo Sanguineo y RH</a>
    <select>
          <option>---Seleccione uno---</option>
          <option>A-</option>
          <option>A+</option>
          <option>B-</option>
          <option>B+</option>
          <option>AB-</option>
          <option>AB+</option>
          <option>O-</option>
          <option>O+</option>
    </select><br>
      <hr>
    
    <a href="records_atleta.php" target="_self"> <input type="button" name="boton" value="Continuar" /> </a> 
    <a><input type="reset" name="reset" value="Limpiar" /></a> 
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
<p>Página 2/6</p>
</div>

<?php
 include('footer.php');
?>
</body>
</html>
