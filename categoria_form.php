<?php

include('validación');
include('conexion');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Seleccionar Categoría</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" content="css/estilo_footer.css">
  <link rel="stylesheet" href="css/estilo_form.css">

  
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Piramide</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">inicio</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="login/login_v15/index.php"><span class="glyphicon glyphicon-log-in"></span> Identificarse</a></li>-->
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Identificarse</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="https://twitter.com">Twitter</a></p>
      <p><a href="https://www.facebook.com/Ligakickboxingbogota/">Facebook</a></p>
      <p><a href="#">Instagram</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
        
  <form>
   
<BR>
    <form method="post" action="#.php">
    <div class="background"> 

  <h1>SELECCIONE LA CATEGORÍA EN LA QUE DESEA PARTICIPAR</h1>
</div>

      <BR>
      <BR>
      <BR>


    <!--a>KICK BOXING: POINT FIGTHING:</a>
      <select>
        <option>Seleccione uno</option>
        <option>Debutante Clase D</option>
        <option>Aficionado clase C entrante</option>
        <option>Aficionado clase C saliente</option>
        <option>Semi Pro clase B</option>
        <option>Profesional Clase A</option>
      </select>

      <BR>
      <BR>
      <BR-->

    <!--a>KICK BOXING: KICK LIGHT</a>
      <select>
        <option>Seleccione uno</option>
        <option>Debutante Clase D</option>
        <option>Aficionado clase C entrante</option>
        <option>Aficionado clase C saliente</option>
        <option>Semi Pro clase B</option>
        <option>Profesional Clase A</option>
      </select-->
      <BR>
      <BR>
      <BR>

    <a>KICK BOXING: LOW KICK (Ring)</a>
      <select>
        <option>Seleccione uno</option>
        <option>Debutante Clase D</option>
        <option>Aficionado clase C entrante</option>
        <option>Aficionado clase C saliente</option>
        <option>Semi Pro clase B</option>
        <option>Profesional Clase A</option>
      </select>
      <BR>
      <BR>
      <BR>

    <a>KICK BOXING: K1 RULES (Ring)</a>
      <select>
        <option>Seleccione uno</option>
        <option>Debutante Clase D</option>
        <option>Aficionado clase C entrante</option>
        <option>Aficionado clase C saliente</option>
        <option>Semi Pro clase B</option>
        <option>Profesional Clase A</option>
      </select>
      <BR>
      <BR>
      <BR>

    <!--a>MUAY THAI (Ring)</a>
      <select>
        <option>Seleccione uno</option>
        <option>Debutante Clase D</option>
        <option>Aficionado clase C entrante</option>
        <option>Aficionado clase C saliente</option>
        <option>Semi Pro clase B</option>
        <option>Profesional Clase A</option>
      </select>
      <BR>
      <BR>
      <BR-->

      <BR>
      <BR>
      <BR>


      </select>


         <hr>
              
    
         <a href="clausula_form.php" target="_self"> <input type="button" name="boton" value="Continuar" /> </a> 
      
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
<p>Página 5/6</p>
</div>

<?php
 include('footer.php');
?>
</body>
</html>
