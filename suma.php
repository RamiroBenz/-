<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Suma de Casilleros</title>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500i,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<style>
		body {
			background-color: gray;
			color: black;
			font-family: serif;
		}
		table{
			text-align: center;
			padding: 20px;
			padding-right: 50px;
			font-size: 30px;
		}

		/* FOOTER LINDO */

		h1 {
	font-family: 'Raleway';
	font-weight: 900;
	letter-spacing: -1px;
	font-size: 50px;
	margin-left: 1.66%;
}

h3 {
  font-family: 'Raleway';
  margin-left: 1.66%;
  font-size: 30px;
}

.myFooter {
	display: flex;
  flex-flow: row wrap;
}

footer {
	background: #000;
	font-family: 'Raleway', sans-serif;
	color: rgb(0, 0, 0);
	max-width: 100%;
	margin-top: auto;
}
.footer-icons {
	text-align: center;
	font-size: 20px;
	letter-spacing: 5px;
	width: 100%;
  align-items: center;
  justify-content: space-around;
  position: relative;
  margin-top: 15px;
}

.footer-bottom {
	text-align: center;
	color: white;
	width: 100%;
  align-items: center;
  justify-content: space-around;
  position: relative;
  margin-top: 10px;
  margin-bottom: 10px;
}
a {
	text-decoration: none;
}
a:visited, a:focus{
	color: white;
}

a:hover {
	color: rgba(255, 255, 255, 0.6);
}

		/* Reloj.. */


body{
    background-image: url(/fondo01.png);
    background-size: cover;
    color: #fff;
    font-size: 16px;
    /* display: -webkit-box;
    display: -ms-flexbox;
    display: flex; */
    height: 100vh;
}
.wrap{
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -ms-grid-row-align: center;
    align-items: center;
    margin: auto;
    width: 80%;
}
.widget{
    width: 50%;
/*    margin: 2em;*/
    margin: 2em auto;
}
.widget p{
    display: inline-block;
    line-height: 1em;
        
}

.fecha{
    font-family: 'Oswald', sans-serif;
    font-size: 2em;
    text-align: center;
    margin-bottom: 0.3rem;
    padding: 1em;
    width: 100%;
    background-color: rgba(0,0,0,0.5);
    
}
.reloj{
    font-family: 'Oswald', sans-serif;
    font-size: 4em;
    text-align: center;
    margin-bottom: 0.3rem;
    padding: 1em;
    width: 100%;
    background-color: rgba(0,0,0,0.5);
    
}
.caja-segundos {
    display:inline-block;  
}
.caja-segundos .segundos,
.caja-segundos .ampm {
    font-size: 2rem;
    display: block;  
}
	</style>

</head>
<body>
 <div class="wrap" align="center">
 <br>
 <br>
 <h1 style="color: black;">Reloj </h1>
 <br>
        <div class="widget">
            <div class="fecha">
               <p id="diaSemana" class="diaSemana"></p>
               <p id="dia" class="dia"></p>
               <p>de</p>
               <p id="mes" class="mes"></p>
               <p>del</p>
               <p id="year" class="year"></p>
            </div>
    
            <div class="reloj">
               <p id="hora" class="hora"></p>
               <p>:</p>
               <p id="minutos" class="minutos"></p>
               <p>:</p>
               <div class="caja-segundos">
                    <p id="ampm" class="ampm"></p>
                    <p id="segundos" class="segundos"></p>                   
               </div>
                
            </div>
        </div>
    </div>
   

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<footer class="myFooter" id="footer-wrapper">
<div class="footer-icons">
      <!-- <a href="https://www.pinterest.com/" class="generic-anchor" target="_blank"><i class="fa fa-pinterest"></i></a> -->
      <a href="https://www.facebook.com/rbcreacionesweb" class="generic-anchor" target="_blank"><i class="fa fa-facebook"></i></a>
      <!-- <a href="https://twitter.com/" class="generic-anchor" target="_blank"><i class="fa fa-twitter"></i></a> -->
      <a href="http://instagram.com/creacionesweb" class="generic-anchor" target="_blank"><i class="fa fa-instagram"></i></a>
      <!-- <a href="https://www.youtube.com/" class="generic-anchor" target="_blank"><i class="fa fa-youtube"></i></a>
      <a href="https://plus.google.com/" class="generic-anchor" target="_blank" ><i class="fa fa-google-plus"></i></a> -->
      </div>
  <section class="footer-bottom">
<div class="footer-bottom-wrapper">   
<i class="fa fa-copyright" role="copyright"></i> 2018 <a href="https://www.rbcreacionesweb.com"><strong>R&B Design Web</strong></a> <span class="footer-bottom-rights"> - Todos los derechos reservados - </span>
    </div>
  </section>
</footer>
	<script>
		function onchange(){
			var n1= numer (document.getElementById('n1').value);
			var n2= numer (document.getElementById('n2').value);
			var n3= numer (document.getElementById('n3').value);
			var n4= numer (document.getElementById('n4').value);

			var resultado = n1+n2+n3+n4;

			document.getElementById('resultado').value=resultado;

		}
	</script>

	<script>
	var actualizarHora = function(){
    
    var fecha = new Date(),
        horas = fecha.getHours(),
        minutos = fecha.getMinutes(),
        amPm,
        segundos = fecha.getSeconds(),
        diaDeSemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        anio = fecha.getFullYear();

        var NombreDeSemana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
        var NombreDeMes = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'];

            var pHoras = document.getElementById("hora"),
            pMinutos = document.getElementById("minutos"),
            pAmPm = document.getElementById("ampm"),
            pSegundos = document.getElementById("segundos"),
            pDiaDeSemana = document.getElementById("diaSemana"),
            pDia = document.getElementById("dia"),
            pMes = document.getElementById("mes"),
            pAnio = document.getElementById("year");

    if(horas > 12){
        amPm = "PM";
    }else{
        amPm = "AM";
    }
    
    if(minutos < 10){
        minutos = "0" + minutos;
    }
    if(segundos < 10){
            segundos = "0" + segundos;
    }


        pHoras.textContent = horas,
        pMinutos.textContent = minutos,
        pSegundos.textContent = segundos,
        pAmPm.textContent = amPm,
        pDiaDeSemana.textContent = NombreDeSemana[diaDeSemana],
        pDia.textContent = dia,
        pMes.textContent = NombreDeMes[mes],
        pAnio.textContent = anio;
    
    
}

actualizarHora();
setInterval(actualizarHora,1000);


	</script>

</body>
</html>