
function subtotal (){
	var cant = parseInt(prompt(''));
	var precio = parseFloat(prompt(''));
	var resultado = cant * precio;
	document.getElementById('resultado').value =(cant+""+"*"+precio+"="+resultado);
} 

function cont (){
	var cant = parseInt(prompt(''));
	var res=cant+cant;
	document.getElementById('resultado').value = (cant+"+"+ cant +"=" resultado);
	
}