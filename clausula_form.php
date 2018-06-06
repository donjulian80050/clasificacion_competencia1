<?php

include('validación');
include('conexion');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Claúsula De Exoneración Civil</title>
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
        
  <form>
   
<BR>
    <form method="post" action="#.php">

<div class="background"> 
  <h1>CLAÚSULA DE EXONERACIÓN CIVIL</h1>

</div>

<p>Declaro que me inscribo libre y voluntariamente al TOP CAPITAL 2018,
   Que conozco el <a href="documentos/REGLAMENTO OFICIAL TOP CAPITAL.pdf">reglamento</a> y participó bajo parámetros netamente deportivos, 
   asumo los riesgos de la competencia siendo consciente de que es un deporte de 
   combate de pleno contacto físico, Exonero de toda responsabilidad legal y civil 
   a la organización (personas naturales e instituciones) por posibles accidentes 
   causados en la dinámica de la competencia en mi persona o en terceros, inclusive 
   casos fortuitos y desafortunados de lesiones parciales o permanentes y/o muerte 
   que puedan desprenderse de la misma.</p>
   <hr>
<input type="checkbox">ACEPTO CLAUSULA DE EXONERACIÓN CIVIL AL MOMENTO DE 
REGISTRAR MI INSCRIPCIÓN</a>
<hr>
              <br>
    
              <a> <input type="submit" name="boton" value="Enviar Datos" accion /> </a> 
                <a href="entrenador_form.php" target="_self"> <input type="button" name="boton" value="Regresar" /> </a> 
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
<p>Página 6/6</p>
</div>

<?php
 include('footer.php');
?>
</body>
</html>
