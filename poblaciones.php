<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Poblaciones - ProInf.net</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" />
  <link rel="stylesheet" type="text/css" href="styles/poblaciones.css" />
  <script type="text/javascript" src="lib/prototype.js"></script>
  <script type="text/javascript" src="lib/extranet.js"></script>
  <script type="text/javascript" src="lib/record.js"></script>
  <script type="text/javascript" src="lib/validate.js"></script>
  <script type="text/javascript" src="scripts/poblaciones.js"></script>
  <link href="extranet.ico" rel="shortcut icon" type="image/x-icon" />
<body>
<div id="main">
  <div id="header">
    <div id="logo"></div>
    <?php include ('menu.php'); ?>
    <div id="title">
      <h1><a href="." title="Ir al índice">Extranet</a>&rarr;Poblaciones</h1>
      <h2 id="subtitle" style="display:none"></h2>
    </div>
    <div id="flash" style="display:none"></div>
    <div id="connect"><a href="login.html">Conectar</a></div>
  </div>
  <div id="msg" class="ok" style="display:none;" ></div>
  <div id="body" zz_style="display:none">

    <div class="box">

      <form id="grid" class="grid" action="">
        <table>
          <thead>
            <tr>
              <th></th>
              <th name="id_poblacion"></th>
              <th name="poblacion"><span class="down">población</span></th>
              <th name="provincia">provincia</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th></th>
              <td><input type="hidden" name="id_poblacion" disabled="true" /></td>
              <td><input type="text" name="poblacion" /></td>
              <td><input type="text" name="provincia" class="dropdown" /></td>
              <th><a href="#">Borrar</a></th>
            </tr>
          </tbody>
        </table>
        <p class="buttons">
          <a id="cmd_save" href="#">Guardar</a>
        </p>
      </form>
    </div>

  </div>
  <div id="footer">
    <div id="waiting" style="display:none">cargando datos</div>
    <div id="copyright">ProInf.net &copy; 2009</div>
  </div>
</div>
</body>
</html>
