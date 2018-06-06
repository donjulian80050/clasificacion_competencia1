

<html>
<!DOCTYPE html>
<head>
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
    h1{
      background-color: #555;
      color: white;
      padding: 20px;
      text-align:center;
    }

    h2{
      background-color: #DAD9D7;
      color: white;
      padding: 20px;
      text-align:left;
    }
    form, seletc, option{
      background-color: #DAD9D7;
      color: #0C817A;
      padding:10%;
      text-align:left;
      
    }
  </style>

  
</head>
<body>

<h1>Selecciones el nombre del campeonato</h1>
<BR>
<div>
<h2>Seleccione uno</h2>
<br>
  <form>
    <select>
      <option>Campeonato 1</option>
      <option>Campeonato 2</option>
      <option>Campeonato 3</option>
      <option>Campeonato 4</option>
   </select>
   </div>
<BR>

<h1>Ingrese los datos de competidor</h1>
<BR>
<BR>
    <form method="post" action="db_formulario1.php">


    <a>NOMBRE</a>
      <input name="nombre" type="text"/><BR>
      <BR>
    <a>APELLIDO</a>
      <input name="apellido" type="text"><BR>
      <BR>
    <a>FECHA DE NACIMIENTO<a>
      <input name="birth" type="date"><br>
    <a>EDAD</a>
      <input name="edad" type="number"><BR>
      <BR>
    <a>DOCUMENTO</a>
      <input name="doc" type="number">
    <a>TIPO DE DOCUMENTO</a>
      <input name="tipo_doc" type="text">
    <a>CELULAR</a>
      <input name="cel" type="tel">
    <a>CORREO</a>
      <input name="email" type="email">
    <a>CIUDAD</a>
      <input name="ciudad" type="text">
    <a>PAÍS</a>
      <input name="pais" type="text">
    <a>PESO</a>
      <input name="peso" type="number"><BR>
      <BR>
    <a>EPS</a>
      <input name="eps" type="text"><BR>
      <BR>
    <a>ESCUELA</a>
      <input name="escuela" type="text">

 <h1>Seleccione la(s) categorias(s) del campeonato</h1>

    <a>KICK BOXING: POINT FIGTHING:</a>
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

    <a>KICK BOXING: KICK LIGHT</a>
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

    <a>MUAY THAI (Ring)</a>
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


      </select>
      <BR>
      <BR>
      <BR>


      </select>

      <input type="submit" name="enviar" value="Enviar" action="db_formulario1.php"/>
            <input type="reset" name="reset" value="Limpiar"/>
            <button href=index.php>Regresar</button>

    </form>

<footer class="container-fluid text-center">
  <a style="color:#75B4f0";>MJ - </a><a style="color:white";>Back</a><a style="color:red";>&</a>Frontend<p style="color:#bdd7f0";>Developers</p>
</footer>
</body>

</html>
