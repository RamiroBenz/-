<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Bandera</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" />
  <link rel="stylesheet" type="text/css" href="styles/bandera.css" />
  <script type="text/javascript" src="lib/prototype.js"></script>
  <script type="text/javascript" src="lib/extranet.js"></script>
  <script type="text/javascript" src="lib/record.js"></script>
  <script type="text/javascript" src="lib/validate.js"></script>
  <script type="text/javascript" src="scripts/bandera.js"></script>
  <link href="extranet.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
<div id="main">
  <div id="header">
    <div id="logo"></div>
    <?php include("menu.php"); ?>
    <div id="title">
      <h1><a href="." title="Ir al índice">Extranet</a>&rarr;Bandera</h1>
      <h2 id="subtitle" style="display:none"></h2>
    </div>
    <div id="flash" style="display:none"></div>
    <div id="connect"><a href="login.html">Conectar</a></div>
  </div>
  <div id="msg" class="ok" style="display:none;" ></div>
  <div id="body" zz_style="display:none">


    <div id="tabs" class="tabs">
      <ul>
        <li><a href="#" id="tab_record" class="current">Ficha</a></li>
        <li><a href="#" id="tab_list">Lista</a></li>
        <li><a href="#" id="tab_all">∞</a></li>
      </ul>
    </div>


    <div class="box record tab_record tab_all">
      <div id="search">
        <input type="text" id="search_input" name="search" autofocus="on" />
        <span  id="search_waiting" style="display:none;" ></span>
      </div>
      <form id="record" class="buttons">
        <fieldset>
          <legend class="">Identificación</legend>
          <ul>
            <li><label for="id">Id</label><input type="text" id="id" class="key" disabled="true" /></li>
            <li><label for="pais">Nombre</label><input type="text" id="pais" name="pais" /></li>
            <li><label for="inicio">Año inicio</label><input type="text" id="inicio" name="inicio" /></li>
            <li><label for="fin">Año fin</label><input type="text" id="fin" name="fin" /></li>
            <li><label for="oficial">Nombre oficial</label><input type="text" id="oficial" name="oficial" /></li>
            <li><label for="country">Nombre inglés</label><input type="text" id="country" name="country" /></li>
            <li><label for="tipo">Tipo</label><input type="text" id="tipo" name="tipo" /></li>
          </ul>
        </fieldset>
        <fieldset class="expandable no_shrink">
          <legend>Datos</legend>
          <ul>
            <li><label for="capital">Capital</label><input type="text" id="capital" name="capital" /></li>
            <li><label for="moneda">Moneda</label><input type="text" id="moneda" name="moneda" /></li>
            <li><label for="continente">Continente</label><input type="text" id="continente" name="continente" /></li>
            <li><label for="idiomas">Idiomas</label><input type="text" id="idiomas" name="idiomas" /></li>
            <li><label for="gobierno">Gobierno</label><input type="text" id="gobierno" name="gobierno" /></li>
            <li><label for="poblacion">Población (hab)</label><input type="text" id="poblacion" name="poblacion" /></li>
            <li><label for="extension">Superficie (km²)</label><input type="text" id="extension" name="extension" /></li>
            <li><label for="costa">Costa (km)</label><input type="text" id="costa" name="costa" /></li>
            <li><label for="gentilicio">Gentilicio</label><input type="text" id="gentilicio" name="gentilicio" /></li>
          </ul>
        </fieldset>
        <fieldset class="expandable no_shrink">
          <legend>Códigos ISO</legend>
          <ul>
            <li><label for="code0">Numérico</label><input type="text" id="code0" name="code0" /></li>
            <li><label for="code2">Dos caracteres</label><input type="text" id="code2" name="code2" /></li>
          </ul>
        </fieldset>
        <fieldset class="expandable no_shrink">
          <legend>Bandera SVG</legend>
          <textarea id="bandera" name="bandera" ></textarea>
          <label for="notas">Notas</label>
          <textarea id="notas" name="notas" ></textarea>
        </fieldset>
        <ul class="cmd buttons">
          <li><a id="cmd_new" href="#">Nuevo</a></li>
          <li><a id="cmd_save" href="#">Guardar</a></li>
          <li><a id="cmd_delete" href="#">Borrar</a></li>
          <li><a id="lnk_auto" class="link" href="?id=">Autoenlace</a></li>
        </ul>
      </form>
    </div>


    <div id="listing" class="box expandable right tab_list tab_all pills" style="display:none;">
      <h3>Lista</h3>
        <ul id="list"></ul>
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