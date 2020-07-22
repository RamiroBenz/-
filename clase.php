<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Clase - ProInf.net</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" />
  <link rel="stylesheet" type="text/css" href="styles/calendar.css"  />
  <link rel="stylesheet" type="text/css" href="styles/clase.css" />
  <script type="text/javascript" src="lib/prototype.js"></script>
  <script type="text/javascript" src="lib/extranet.js"></script>
  <script type="text/javascript" src="lib/record.js"></script>
  <script type="text/javascript" src="lib/color.js"></script>
  <script type="text/javascript" src="lib/date.js"></script>
  <script type="text/javascript" src="lib/calendar.js"></script>
  <script type="text/javascript" src="lib/validate.js"></script>
  <script type="text/javascript" src="scripts/clase.js"></script>
  <link href="extranet.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
<div id="main">
  <div id="header">
    <div id="logo"></div>
    <?php include('menu.php'); ?>
    <div id="title">
      <h1><a href="." title="Ir al índice">Extranet</a>&rarr;Clase</h1>
      <h2 id="subtitle" style="display:none"></h2>
    </div>
    <div id="flash" style="display:none"></div>
    <div id="connect"><a href="login.html">Conectar</a></div>
  </div>
  <div id="msg" class="ok" style="display:none;" ></div>
  <div id="body" zz_style="display:none">

    <div class="box buttons record">
      <!--div id="search">
        <input type="text" id="search_input" name="search" autofocus="on" />
        <span  id="search_indicator" style="display:none;" /></span>
        <div id="search_choices" class="autocomplete"></div>
      </div-->
      <form id="record" action="">
        <fieldset class="expandable">
          <legend>Curso</legend>
          <ul>
            <li><label for="id">Id</label><input type="text" id="id" class="key" disabled="true" /></li>
            <li><label for="id_curso">Código curso</label><input type="text" id="id_curso" name="id_curso" readonly="true" /></li>
            <li>
              <label for="num_clase">Nº</label>
              <div>
                <input type="text" id="num_clase" name="num_clase" class="number" />
                <span> de </span>
                <input type="text" id="total_clases" name="total_clases" class="number" />
              </div>
            </li>
            <li><label for="curso">Nombre curso</label><textarea id="curso" name="curso" readonly="true" ></textarea></li>
          </ul>
        </fieldset>
        <fieldset>
          <legend class="clase">Clase</legend>
          <ul>
            <li><label for="num_semana">Nº semana</label><input type="text" id="num_semana" name="num_semana" readonly="true" /></li>
            <li><label for="dia_semana">Día semana</label><input type="text" id="dia_semana" name="dia_semana" readonly="true" /></li>
            <li><label for="fecha">Fecha clase</label><input type="text" id="fecha" name="fecha" class="date calendar" /></li>
            <li><label for="hora_inicio">Hora inicio</label><input type="text" id="hora_inicio" name="hora_inicio" class="time" /></li>
            <li><label for="duracion">Duración</label><input type="text" id="duracion" name="duracion" class="number" /></li>
            <li><label for="hora_fin">Hora fin</label><input type="text" id="hora_fin" name="hora_fin" readonly="true" /></li>
            <li><label for="id_trabajador">Trabajador</label><select id="id_trabajador" name="id_trabajador"></select></li>
            <li><label for="id_materia">Materia</label><select id="id_materia" name="id_materia"></select></li>
          </ul>
        </fieldset>
        <fieldset class="expandable">
          <legend>Sesión</legend>
          <textarea id="sesion" id="sesion" name="sesion"></textarea></li>
        </fieldset>
        <ul class="cmd">
          <li><a id="cmd_new" href="#">Nuevo</a></li>
          <li><a id="cmd_save" href="#">Guardar</a></li>
          <li><a id="cmd_delete" href="#">Borrar</a></li>
          <li><a id="lnk_curso" href="curso.html?id=">Curso</a></li>
          <li><a id="lnk_print" href="pdf.php?cmd=hoja-horas&id="><span>Hoja de horas</span></a></li>
        </ul>
      </form>
    </div>

    <div id="list" class="box list">
      <div class="expandable browse">
        <h2>Futuro</h2>
        <ul id="list_futuro">
          <li class="header"><b></b><b></b><b>Nºclase</b><b>Curso y materia</b><b>Semana</b><b>Fecha y horario</b><b>Durac.</b><b>Profesor</b><b>Sesión</b></li>
        </ul>
      </div>
      <div class="expandable browse">
        <h2>Presente</h2>
        <ul id="list_presente">
          <li class="header"><b></b><b></b><b>Nºclase</b><b>Curso y materia</b><b>Semana</b><b>Fecha y horario</b><b>Durac.</b><b>Profesor</b><b>Sesión</b></li>
        </ul>
      </div>
      <div class="expandable shrink browse">
        <h2>Reciente</h2>
        <ul id="list_reciente">
          <li class="header"><b></b><b></b><b>Nºclase</b><b>Curso y materia</b><b>Semana</b><b>Fecha y horario</b><b>Durac.</b><b>Profesor</b><b>Sesión</b></li>
        </ul>
      </div>
      <div class="expandable shrink browse">
        <h2 class="buttons">Pasado <a href="#" id="cmd_historic">Histórico</a></h2>
        <ul id="list_pasado">
          <li class="header"><b></b><b></b><b>Nºclase</b><b>Curso y materia</b><b>Semana</b><b>Fecha y horario</b><b>Durac.</b><b>Profesor</b><b>Sesión</b></li>
        </ul>
      </div>
    </div>

  </div>
  <div id="footer">
    <div id="waiting" style="display:none">cargando datos</div>
    <div id="copyright">ProInf.net &copy; 2009</div>
  </div>
</div>
</body>
</html>
