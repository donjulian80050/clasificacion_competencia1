

<?php

include('validación');
include('conexion');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario de acudiente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" content="css/estilo_footer.css">
  <link rel="stylesheet" href="css/estilo_form.css">

  
</head>

<body>

<body>
<?php
include('header.php')
?>
        
<div class="background">        
<h1>FORMULARIO DE ACUDIENTE</h1>
</div>
<H2>Información personal</H2>
    <form method:"POST" action:"">
        <a>PRIMER NOMBRE</a>
          <input name="nombre" type="text" required/>
        <a>SEGUNDO NOMBRE</a>
          <input name="nombre" type="text"/>
          <br><br>
        <a>APELLIDOS</a>
          <input name="apellido" type="text">
          <br><br>
        <a>DOCUMENTO DE IDENTIDAD</a>
          <input name="peso" type="number">
          <a>TIPO DE DOCUMENTO</a>
      <select>
          <option>---Seleccione uno---</option>
          <option>Cédula de Ciudadanía</option>
          <!--option>Tarjeta de Identidad</option-->
          <option>Cédula de extranjería</option>
      </select><br>
      <hr>
        <a>EDAD</a>
          <input name="edad" type="number">
        <br><br>
        <a>DIRECCIÓN</a>
          <input name="Dirección" type="text">
        <br><br>
        <a>TELEFONO FIJO</a>
          <input name="Teléfono fijo" type="number">
        <a>CELULAR</a>
          <input name="Celular" type="number">
        <br><br>
        <a>SELECCIONE FAMILIARIDAD</a>
          <select>
              <option>--SELECCIONE--</option>
              <option>Mamá</option>
              <option>Papá</option>
              <option>Abuelo(a)</option>
              <option>Tio(a)</option>
              <option>Hermano(a)</option>
              <option>Primo(a)</option>
              <option>Otro</option>
          </select>

<p>NOTA IMPORTANTE: Debe descargar y leer el <a href="documentos/REGLAMENTO OFICIAL TOP CAPITAL.pdf">reglamento del campeonato 
    Top Capital</a>, firmarlo como acudiente del participante menor de edad, escanearlo y subirlo a continuación.
<br><hr>
<a>Subir reglamento firmado por el acudiente</a>
<input name="firmado" type="file"/>
</p>
<hr>

          <br>
          <br>
          <br>
             <input type="submit" value="Enviar Datos" />
          </form>

<?php
include('footer.php')
?>
</body>

</html>
