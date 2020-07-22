<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Trabajador - ProInf.net</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" />
  <link rel="stylesheet" type="text/css" href="styles/trabajador.css" />
  <script type="text/javascript" src="lib/prototype.js"></script>
  <script type="text/javascript" src="lib/extranet.js"></script>
  <script type="text/javascript" src="lib/record.js"></script>
  <script type="text/javascript" src="lib/color.js"></script>
  <script type="text/javascript" src="lib/validate.js"></script>
  <script type="text/javascript" src="scripts/trabajador.js"></script>
  <link href="extranet.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>
<div id="main">
  <div id="header">
    <div id="logo"></div>
    <?php include('menu.php'); ?>
    <div id="title">
      <h1><a href="." title="Ir al índice">Extranet</a>&rarr;Trabajador</h1>
      <h2 id="subtitle" style="display:none"></h2>
    </div>
    <div id="flash" style="display:none"></div>
    <div id="connect"><a href="login.html">Conectar</a></div>
  </div>
  <div id="msg" class="ok" style="display:none;" ></div>
  <div id="body" zz_style="display:none">

    <!--div class="columns">
      <div class="column"-->

      <div class="box buttons record">
        <div id="search">
          <input type="text" id="search_input" name="search" autofocus="on" />
          <span  id="search_waiting" style="display:none;" /></span>
          <!--div id="search_choices" class="autocomplete"></div-->
        </div>
        <form id="record" action="">
          <fieldset>
            <legend class="trabajador">Trabajador</legend>
            <ul>
              <li><label for="id">Id</label><input type="text" id="id" class="key" disabled="true" /></li>
              <li><label for="id_trabajador">Código</label><input type="text" id="id_trabajador" name="id_trabajador" /></li>
              <li><label for="nif">NIF</label><input type="text" id="nif" name="nif" class="nif" /></li>
              <li><label for="trabajador">Nombre</label><input type="text" id="trabajador" name="trabajador" /></li>
              <li><label for="apellidos">Apellidos</label><input type="text" id="apellidos" name="apellidos" /></li>
            </ul>
          </fieldset>
          <fieldset>
            <legend>Contacto</legend>
            <ul>
              <li><label for="telefono">Teléfonos</label><input type="text" id="telefono" name="telefono" /></li>
              <li><label for="correo">Correo</label><input type="text" id="correo" name="correo" class="email" /></li>
            </ul>
          </fieldset>
          <fieldset class="expandable shrink">
            <legend>Domicilio</legend>
            <ul>
              <li><label for="direccion">Dirección</label><input type="text" id="direccion" name="direccion" /></li>
              <li><label for="cp">CP</label><input type="text" id="cp" name="cp" /></li>
              <li><label for="id_poblacion">Población</label><select id="id_poblacion" name="id_poblacion"></select></li>
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
            <li><a id="lnk_cursos" href="curso.html?id_trabajador=">Cursos</a></li>
            <li><a id="lnk_clases" href="clase.html?id_trabajador=">Clases</a></li>
          </ul>
        </form>
      </div>

      <!--/div>
      <div class="column"-->

        <div id="list" class="box list">
          <div class="pills expandable">
            <h2>Nuevo</h2>
            <ul id="list_nuevo">
            </ul>
          </div>
          <div class="pills expandable">
            <h2>Habitual</h2>
            <ul id="list_habitual">
            </ul>
          </div>
          <div class="pills expandable shrink">
            <h2>Antiguo</h2>
            <ul id="list_antiguo">
            </ul>
          </div>
        </div>


        <!--ul id="list" class="pills">
          <li id="idQUIM" title="Quim Anton Bellmunt">QUIM<sup>359</sup></li>
          <li id="idFCO" title="francisco Cascales Rueda">FCO<sup>311</sup></li>
          <li id="idNANDO" title="Fernando Muñoz Seco">NANDO<sup>99</sup></li>
          <li id="idALB1" title="Albert">ALB1<sup>89</sup></li>
          <li id="idISMA" title="Ismael">ISMA<sup>46</sup></li>
          <li id="idALEX1" title="Alex">ALEX1<sup>46</sup></li>
        </div-->

      <!--/div>
    </div-->

  </div>
  <br />
  <br />
  <br />
  <br />
  <br />
  <div id="footer">
    <div id="waiting" style="display:none">cargando datos</div>
    <div id="copyright">Lola Morena&copy; 2017</div>
  </div>
  </div>
</body>
</html>
