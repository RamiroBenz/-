<?php 
include 'cnAcme.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Pagos - LoLa Morena</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css" />
  <link rel="stylesheet" type="text/css" href="styles/calendar.css" />
  <link rel="stylesheet" type="text/css" href="styles/pagos.css" />
  <script type="text/javascript" src="lib/prototype.js"></script>
  <script type="text/javascript" src="lib/extranet.js"></script>
  <script type="text/javascript" src="lib/record.js"></script>
  <script type="text/javascript" src="lib/date.js"></script>
  <script type="text/javascript" src="lib/calendar.js"></script>
  <script type="text/javascript" src="lib/validate.js"></script>
  <script type="text/javascript" src="scripts/pagos.js"></script>
  <link href="extranet.ico" rel="shortcut icon" type="image/x-icon" />

  
<body>
<div id="main">
  <div id="header">
    <div id="logo"></div>
    <?php include ("menu.php"); ?>
    <br />
    <br />
    <br />
    <?php include 'reloj.php'; ?>
    <br />
    <br />
    <br />
    <div id="title">
      <h1><a href="." title="Ir al índice">Extranet</a>&rarr;Pagos</h1>
      <h2 id="subtitle" style="display:none"></h2>
    </div>
    <div id="flash" style="display:none"></div>
    <div id="connect"><a href="login.html">Conectar</a></div>
  </div>
  <div id="msg" class="ok" style="display:none;" ></div>
  <div id="body" zz_style="display:none">

    <div class="box">
      <!--div id="search">
        <input type="text" id="search_input" name="search" autofocus="on" />
        <span  id="search_indicator" style="display:none;" /></span>
        <div id="search_choices" class="autocomplete"></div>
      </div-->

      <div id="search" class="header">
        <label for="year">Año:</label>
        <select id="year">
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
        </select>
        <label for="month">Mes:</label>
        <select id="month">
          <option></option>
          <option value="1">Enero</option>
          <option value="2">Febrero</option>
          <option value="3">Marzo</option>
          <option value="4">Abril</option>
          <option value="5">Mayo</option>
          <option value="6">Junio</option>
          <option value="7">Julio</option>
          <option value="8">Agosto</option>
          <option value="9">Septiembre</option>
          <option value="10">Octubre</option>
          <option value="11">Noviembre</option>
          <option value="12">Diciembre</option>
        </select>
        <label for="trabajador">Empresa:</label>
        <select id="trabajador">
          <option>Seleccione..</option>
          <option>Arca Distribuciones</option>
          <option>Naturel S.A.</option>
          <option>Millanel</option>
          <option>Lady Way S.R.L.</option>
          <option>Garcia Reguera</option>
        </select>
        <!-- <label for="curso">Curso:</label>
        <input type="text" id="curso" /> -->
        <label for="banco">Banco:</label>
        <select id="banco">
          <option>Seleccione..</option>
          <option>Banco Nacion</option>
          <option>Banco Provincia</option>
          <option>Banco Ciudad</option>
          <option>Galicia</option>
          <option>Santander Rio</option>
          <option>Patagonia</option>
          <option>BBVA Frances</option>
          <option>Hipotecario</option>
          <option>H.S.B.C</option>
          
        </select>        
      </div>

      <form id="grid" class="grid" action="">
        <table>
          <thead>
            <tr>
              <th></th>
              <th name="id_pago"></th>
              <th name="fecha" class="required"><span class="down">fecha</span></th>
              <th name="trabajador" class="required"><span class="up">Empresa</span></th>
              <!-- <th name="horas">h</th>
              <th name="curso">c</th> -->
              <th name="pago" class="required">pago</th>
              <th name="banco"></th>
              <th name="banco_dropdown">banco</th>
              <th name="notas">notas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th></th>
              <td><input type="hidden" name="id_pago" disabled="true" /></td>
              <td><input type="text" name="fecha" class="date calendar" /></td>
              <td><input type="text" name="id_trabajador" class="dropdown" /></td>

              <!-- <td><input type="text" name="horas" class="number" /></td>
              <td><input type="text" name="id_curso" class="dropdown" /></td>
               -->

              <td><input type="text" name="pago" class="pesos" /></td>
              <td><input type="hidden" name="id_banco" /></td>
              <td><input type="text" name="id_banco_dropdown" class="dropdown" /></td>
              <td><input type="text" name="notas" class="" /></td>
              <th><a href="#">Borrar</a></th>
            </tr>
          </tbody>
        </table>
        <p class="required">Campos obligatorios</p>
        <p class="buttons">
          <a id="cmd_save" href="#">Guardar</a>
        </p>
      </form>
    </div>

  </div>
  <div id="footer">
    <div id="waiting" style="display:none">cargando datos</div>
    <div id="copyright">wwww.lolamorenalenceria.com &copy; 2009</div>
  </div>
</div>
</body>
</html>
