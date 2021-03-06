<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Alumno - ProInf.net</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" />
  <link rel="stylesheet" type="text/css" href="styles/alumno.css" />
  <script type="text/javascript" src="lib/prototype.js"></script>
  <script type="text/javascript" src="lib/extranet.js"></script>
  <script type="text/javascript" src="lib/record.js"></script>
  <script type="text/javascript" src="lib/validate.js"></script>
  <script type="text/javascript" src="scripts/alumno.js"></script>
  <link href="extranet.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
<div id="main">
  <div id="header">
    <div id="logo"></div>
    <?php include('menu.php'); ?>
    <div id="title">
      <h1><a href="." title="Ir al índice">Extranet</a>&rarr;Alumno</h1>
      <h2 id="subtitle" style="display:none"></h2>
    </div>
    <div id="flash" style="display:none"></div>
    <div id="connect"><a href="login.html">Conectar</a></div>
  </div>
  <div id="msg" class="ok" style="display:none;" ></div>
  <div id="body" zz_style="display:none">

    <div class="box buttons record">
      <div id="search">
        <input type="text" id="search_input" name="search" autofocus="on" />
        <span  id="search_indicator" style="display:none;" /></span>
      </div>
      <form id="record" action="">
        <fieldset class="expandable">
          <legend>Alumno</legend>
          <ul>
            <li><label for="id">Id</label><input type="text" id="id" class="key" disabled="true" /></li>
            <li><label for="alumno">Nombre</label><input type="text" id="alumno" name="alumno" /></li>
            <li><label for="apellidos">Apellidos</label><input type="text" id="apellidos" name="apellidos" /></li>
            <li><label for="nif">NIF</label><input type="text" id="nif" name="nif" class="nif" /></li>
          </ul>
        </fieldset>
        <fieldset>
          <legend>Contacto</legend>
          <ul>
            <li><label for="telefonos">Teléfonos</label><input type="text" id="telefonos" name="telefonos" /></li>
            <li><label for="correos">Correo</label><input type="text" id="correos" name="correos" class="email" /></li>
          </ul>
        </fieldset>
        <fieldset class="expandable shrink  ">
          <legend>Domicilio</legend>
          <ul>
            <li><label for="direccion">Dirección</label><input type="text" id="direccion" name="direccion" /></li>
            <li><label for="cp">CP</label><input type="text" id="cp" name="cp" /></li>
            <li><label for="poblacion">Población</label><input type="text" id="poblacion" name="poblacion" /></li>
          </ul>
        </fieldset>
        <fieldset class="expandable">
          <legend>Notas</legend>
          <textarea id="notas" name="notas"></textarea></li>
        </fieldset>

        <ul class="cmd">
          <li><a id="cmd_new" href="#">Nuevo</a></li>
          <li><a id="cmd_save" href="#">Guardar</a></li>
          <li><a id="cmd_delete" href="#">Borrar</a></li>
          <li><a id="lnk_auto" class="link" href="?id=">Autoenlace</a></li>
        </ul>
      </form>
    </div>


    <div id="detail" class="box expandable right tab_record tab_all">
      <h3>Detalle</h3>

      <div id="tabs_detail" class="tabs">
        <ul>
          <li><a id="tab_cursos" href="#">Cursos</a></li>
        </ul>
      </div>

      <form id="alumnos_cursos" class="grid" style="display:none;" >
        <table>
          <thead>
            <tr>
              <th></th>
              <th name="id_alumno_curso"></th>
              <th name="id_alumno"></th>
              <th name="id_curso">curso</th>
              <th name="fila">fil</th>
              <th name="columna">col</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th></th>
              <td><input type="hidden" name="id_alumno_curso" disabled="true" /></td>
              <td><input type="hidden" name="id_alumno" /></td>
              <td><input type="text" name="id_curso" /></td>
              <td><input type="text" name="fila" /></td>
              <td><input type="text" name="columna" /></td>
              <th><a href="#">Borrar</a></th>
            </tr>
          </tbody>
        </table>
        <p class="buttons">
          <a id="cursos_save" class="cmd_save" href="#">Guardar</a>
        </p>
      </form>
    </div><!--detail-->



    <div class="box list ">
      <p class="header"><b></b><b>Nombre</b><b>Apellidos</b><b>Curso</b></p>
      <ul id="list"></ul>
    </div>

  </div>
  <div id="footer">
    <div id="waiting" style="display:none">cargando datos</div>
    <div id="copyright">ProInf.net &copy; 2009</div>
  </div>
</div>
</body>
</html>
