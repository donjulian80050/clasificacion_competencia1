<?php

include('validación');
include('conexion');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>iNGRESO DE EXPERIENCIA ADICIONAL</title>
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
<h1>Record del Atleta - Otras disciplinas </h1>
</div>
<BR>
<BR>
    <form method="post" action="#.php">
    <hr>
    <a>INGRESE LA MODALIDAD DEPORTIVA</a> <br> 
    <select>
      <option>--- SELECCIONE UNA ---</option>
      <option>Aikido</option>
      <option>Boxeo</option>
      <option>Capoeira</option>
      <option>Jeet Kune Do</option>
      <option>Jiu-jitsu brasileño</option>
      <option>Judo</option>
      <option>Jujutsu tradicional</option>
      <option>Karate</option>
      <option>Kendo</option>
      <option>Krav Maga</option>
      <option>Kung Fu</option>
      <option>Lucha</option>
      <option>MMA</option>
      <option>Muay thai</option>
      <option>Sambo</option>
      <option>San Da</option>
      <option>Taekwondo</option>
      <!--option></option>
      <option></option>
      <option></option-->
    </select>  
    <br> <hr>
    <a>PELEAS REALIZADAS</a>
      <input name="peleas_realizadas" type="number" placeholder="Ingrese números"/><br><hr>
    <a>PELEAS GANADAS</a>
      <input name="peleas_ganadas" type="number" placeholder="Ingrese números"/><br><hr>
    <a>PELEAS PERDIDAS<a>
      <input name="peleas_perdidas" type="number" placeholder="Ingrese números"/><br><hr>
    <a>PELEAS EMPATADAS<a>
      <input name="peleas_empatadas" type="number" placeholder="Ingrese números"/><br><hr>
    <a>PELEAS GANADAS POR KO<a>
      <input name="peleas_ganadas_ko" type="number" placeholder="Ingrese números"/><br>
    
     
    
     <hr>

     <a href="##.php" target="_self"> <input type="button" name="boton" value="Agregar Experiencia" /> </a> 
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
<p>Página 2/6</p>
</div>

<?php
 include('footer.php');
?>
</body>
</html>
