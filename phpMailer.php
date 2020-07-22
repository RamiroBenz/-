<?php 
include 'cn.php';

$msg=null;

if (isset($_POST["phpMailer"])) {
	$nombre =htmlspecialchars($_POST["nombre"]);
	$email =htmlspecialchars($_POST["email"]);
	$asunto =htmlspecialchars($_POST["asunto"]);
	$mensaje =htmlspecialchars($_POST["mensaje"]);
	$adjunto = $_FILES["adjunto"];

	

	$mail= new PHPMailer;
	$mail->Host = "localhost";
	$mail->from= "rbdesignweb.argentina@gmail.com";
	$mail->formName = "RBdesignweb";
	$mail->Subject = $asunto;
	$mail->addAdress($email, $nombre);
	$mail->msgHTML($mensaje);

	if ($adjunto["size"] > 0) {
		$mail->addAttachment($adjunto["tmp_name"]);
		
	}
	if ($mail->Send()) {

		$msg="Este E-Mail ha sido enviado exitosamente a $email..";

	}else {
		$msg = "Ha ocurrido un error al enviar este E-Mail a $email";
	}
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Enviar un E-Mail..</title>
 	<link rel="stylesheet" href="estilos.css">
 	<style>
 		* {
  			box-sizing: border-box;
		}
		body {
		  margin: 0;
		  font-family: sans-serif;
		}
		.formulario {
		  width: 500px;
		  max-width: 100%;
		  margin: auto;
		  margin-top: 30px;
		  padding: 20px;
		  box-shadow: 0 0 20px 1px rgba(0,0,0,0.3);
		  position: relative;
		}
		.formulario__titulo {
		  text-align: center;
		  margin-top: 0;
		  color: rgba(0,0,0,0.7);
		}
		.formulario__input, .formulario__label, .formulario__submit {
		  display: block;
		  width: 100%;
		  font-size: 1.3em;
		}
		.formulario__input {
		  padding: 20px;
		  background: rgba(0,0,0,0.1);
		  border: 1px solid rgba(0,0,0,0.3);
		  margin-bottom: 40px;
		}
		.formulario__input:focus {
		  outline: 1px solid rgba(0,0,0,0.7);
		}
		.formulario__input:focus + .formulario__label{
		  margin-top: -135px;
		}
		.formulario__label {
		  padding-left: 15px;
		  position: absolute;
		  margin-top: -85px;
		  z-index: -20;
		  color: rgba(0,0,0,0.5);
		  transition: all 0.2s;
		}
		.formulario__submit {
		  background: rgba(0,0,0,0.7);
		  color: white;
		  padding: 10px 20px;
		  cursor: pointer;
		  border: none;
		}
		.fijar {
		  margin-top: -135px;
		}
 	</style>
 </head>
 <body>


 <br>
 <br>
 <br>
 <br>
 <br>
<div align="center">

 <h1 class="formulario__titulo">Enviar E-Mails</h1>
 <br><br>
 <strong><?php echo $msg; ?></strong>

 	<form action="" method="post">
 	<table>
 		<tr>
 			<!-- <td><label for="" class="formulario__label"></label> Nombre del De stinatario:</td>-->
 			<td><input type="text" name="nombre" class="formulario__input" value="Nombre"></td>
 		</tr>
 		<tr>
 			<!-- <td><label for="" class="formulario__label"></label> E-Mail del De stinatario:</td>-->
 			<td><input type="text" name="email" class="formulario__input" value="E-Mail"></td>
 		</tr>
 		<tr>
 			<!-- <td><label for="" class="formulario__label"></label> Asunto:</td>
 			 			 -->
 			<td><input type="text" name="asunto" class="formulario__input" value="Asunto"></td>
 		</tr>
 		<tr>
 			<!-- <td><label for="" class="formulario__label"></label> Adjuntar Arch ivo:</td>-->
 			<td><input type="file" name="adjunto" class="formulario__submit"></td>
 		</tr>
 		<tr>
 			<!-- <td><label for="" class="formulario__label"></label> Mensaje:</td> -->
 			<td><textarea name="mensaje" id="" cols="40" rows="10" class="formulario__input" value="Mensaje.."></textarea></td>
 		</tr>
 	</table>
 	<input type="hidden" name="phpmailer">
 	<input type="submit" value="Enviar E-Mail" class="formulario__submit">
 		
 	</form>




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
 <?php include "footer.php"; ?>
 <script>
 	var inputs = document.getElementsByClassName('formulario__input');
for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('keyup', function(){
    if(this.value.length>=1) {
      this.nextElementSibling.classList.add('fijar');
    } else {
      this.nextElementSibling.classList.remove('fijar');
    }
  });
}
 </script>
 </body>
 </html>