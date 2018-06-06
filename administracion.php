<?php

include('validación');
include('conexion');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio de inscripción</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/estilo_form.css">

  
</head>
<body>

<?php
include('header.php')
?>

<div class="background">
      <h1>SELECCIONE EL CAMPEONATO AL QUE DESEA PARTICIPAR</h1>
</div>
<BR>
<div class="select">
  <form>
    <select>
      <option>Seleccione uno</option>
      <option>Top Capital</option>
    </select>
    </div>
<BR>
<BR>
<BR>
<div class="background">
<h1>INGRESE LOS DATOS DEL COMPETIDOR</h1>
</div>
<BR>


    <form method="post" action="db_formulario1.php">
    <a>CARGUE SU FOTO</a><br><br>
    <input name="photo" type="file" /><br>
    <P>NOTA IMPORTANTE: Por favor verifique la foto a cargar ya que está foto 
    aparecerá en su perfil de la liga de kick Boxing de Bogotá y será usado el 
    dia del evento y visualizada por el público.</P><br>

    <a>NOMBRE</a>
      <input name="nombre" type="text" placeholder="Ingrese Sus Nombres"/><br>
      <hr>
    <a>APELLIDO</a>
      <input name="apellido" type="text" placeholder="Ingrese sus Apellidos"><br>
      <hr>
    <a>FECHA DE NACIMIENTO<a>
      <input name="birth" type="date" placeholder="Ingrese su Fecha de Nacimiento"><br>
      <hr>
      
    <a>EDAD</a>
      <input name="edad" type="number" placeholder="Ingrese su Edad">
      <p>NOTA: La edad mínima para competir es de 12 años, no hay limite de edad máxima, 
        sin embargo si usted es menor de edad debe diligenciar y enviar el documento llamado "REGLAMENTO OFICIAL TOP CAPITAL.pdf"</p><br>
      <a href="form_acudiente.php">Ingrese los datos del acudiente si UD es menor de edad</a>
      <hr>
    <a>DOCUMENTO</a>
      <input name="doc" type="number" placeholder="Número de su Documento"><br>
      <hr>
    <a>TIPO DE DOCUMENTO</a>
      <select>
          <option>---Seleccione uno---</option>
          <option>Cédula de Ciudadanía</option>
          <option>Tarjeta de Identidad</option>
          <option>Cédula de extranjería</option>
      </select><br>
      <hr>

    <!a>CELULAR</a>
      <input name="cel" type="tel" placeholder="Su número Celular "><br>
      <hr>
    <a>CORREO</a>
      <input name="email" type="email" placeholder="Ingrese Su Correo"><br>
      <hr>
    <a>CIUDAD</a>
      <input name="ciudad" type="text" placeholder="Ingrese Su Ciudad"><br>
      <hr>
    <a>PAÍS</a>
      <input name="pais" type="text>" placeholder="Ingrese Su País"><br>
      <hr>
    <a>PESO</a>
      <input name="peso" type="number" placeholder="Ingrese su Peso en KG"><br>
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
<p>Página 1/6</p>
</div>
<?php
 include('footer.php');
?>
</body>
</html>
