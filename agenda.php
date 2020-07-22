<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Agenda - ProInf.net</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" />
  <link rel="stylesheet" type="text/css" href="styles/calendar.css" />
  <link rel="stylesheet" type="text/css" href="styles/agenda.css" />
  <script type="text/javascript" src="lib/prototype.js"></script>
  <script type="text/javascript" src="lib/extranet.js"></script>
  <script type="text/javascript" src="lib/record.js"></script>
  <script type="text/javascript" src="lib/date.js"></script>
  <script type="text/javascript" src="lib/calendar.js"></script>
  <script type="text/javascript" src="lib/validate.js"></script>
  <script type="text/javascript" src="scripts/agenda.js"></script>
  <link href="extranet.ico" rel="shortcut icon" type="image/x-icon" />
<body>
<div id="main">
  <div id="header">
    <div id="logo"></div>
    <?php include('menu.php'); ?>
    <div id="title">
      <h1><a href="." title="Ir al índice">Extranet</a>&rarr;Agenda</h1>
      <h2 id="subtitle" style="display:none"></h2>
    </div>
    <div id="flash" style="display:none"></div>
    <div id="connect"><a href="login.html">Conectar</a></div>    
  </div>
  <div id="msg" class="ok" style="display:none;" ></div>
  <div id="body" zz_style="display:none">

    <div class="box">

      <div id="search" class="header">
        <label for="filtro">Filtro:</label>
        <input type="text" id="filtro" />
        <input type="button" id="buscar" value="Buscar" />
      </div>

      <div id="agenda" class="table"><!-- tabla agenda --></div>
      <p id="legenda">
        <span class="cliente">Cliente</span>
        <span class="trabajador">Trabajador</span>
        <span class="alumno">Alumno</span>
      </p>
      <p id="ayuda">Se muestran los 100 primeros resultados</p>

    </div>

  </div>
  <div id="footer">
    <div id="waiting" style="display:none">cargando datos</div>
    <div id="copyright">ProInf.net &copy; 2009</div>
  </div>
</div>
</body>
</html>
