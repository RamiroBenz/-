if (!Array.prototype.indexOf)
{
  Array.prototype.indexOf = function(elt /*, from*/)
  {
    var len = this.length >>> 0;

    var from = Number(arguments[1]) || 0;
    from = (from < 0)
         ? Math.ceil(from)
         : Math.floor(from);
    if (from < 0)
      from += len;

    for (; from < len; from++)
    {
      if (from in this &&
          this[from] === elt)
        return from;
    }
    return -1;
  };
}

function tableRemoveRow(tableId,rowNum)
{
	var tbl = document.getElementById(tableId);
	try {
		tbl.deleteRow(rowNum);
	}
	catch (ex) {
	}
}

function registrarSiVacio(campo,descripcionError)
{
	if (document.getElementById(campo).value == "")
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+"\n";
	}
	else
	{
		if (document.getElementById(campo).readOnly)
			document.getElementById(campo).className = "jig_readonly";
		else
			document.getElementById(campo).className = "";
		return "";
	}
}

function registrarSiNulo(campo,valorNulo,descripcionError)
{
	if (document.getElementById(campo).value == valorNulo)
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+"\n";
	}
	else
	{
		document.getElementById(campo).className = "";
		return "";
	}
}

function validarPorcentaje(campo, enteros, decimales, descripcionError)
{
	var descripcionErrorNumerico = validarCampoNumericoConDecimales(campo, enteros, decimales, descripcionError)
	if (descripcionErrorNumerico.length > 0)
		return descripcionErrorNumerico;

	valorCampo = document.getElementById(campo).value;
	if (valorCampo.length == 0)
	{
		if (document.getElementById(campo).readOnly)
			document.getElementById(campo).className = "jig_readonly";
		else
			document.getElementById(campo).className = "";

		return "";
	}

	if (valorCampo*1 < 0)
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+" (el valor debe ser mayor o igual a cero)\n";
	}
	else if (valorCampo*1 > 100)
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+" (el valor debe ser menor o igual a 100)\n";
	}

	if (document.getElementById(campo).readOnly)
		document.getElementById(campo).className = "jig_readonly";
	else
		document.getElementById(campo).className = "";

	return "";
}

function validarCampoNumericoConDecimales(campo, enteros, decimales, descripcionError)
{
	valorCampo = document.getElementById(campo).value;
	if (valorCampo.length == 0)
	{
		if (document.getElementById(campo).readOnly)
			document.getElementById(campo).className = "jig_readonly";
		else
			document.getElementById(campo).className = "";
		return "";
	}
	if (!validarNumericoConDecimales(valorCampo, enteros, decimales))
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+" (el valor debe ser numérico, positivo, con 1 a "+enteros+" enteros y hasta "+decimales+" decimales)\n";
	}
	if (document.getElementById(campo).readOnly)
		document.getElementById(campo).className = "jig_readonly";
	else
		document.getElementById(campo).className = "";
	return "";
}

function validarCampoNumericoConSignoConDecimales(campo, enteros, decimales, descripcionError)
{
	valorCampo = document.getElementById(campo).value;
	if (valorCampo.length == 0)
	{
		if (document.getElementById(campo).readOnly)
			document.getElementById(campo).className = "jig_readonly";
		else
			document.getElementById(campo).className = "";
		return "";
	}
	if (!validarNumericoConSignoConDecimales(valorCampo, enteros, decimales))
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+" (el valor debe ser numérico, con 1 a "+enteros+" enteros y hasta "+decimales+" decimales)\n";
	}
	if (document.getElementById(campo).readOnly)
		document.getElementById(campo).className = "jig_readonly";
	else
		document.getElementById(campo).className = "";
	return "";
}

function validarCampoImporte(campo, codigoUnidad, enteros, decimales, descripcionError)
{
	valorCampo = document.getElementById(campo).value;
	if (valorCampo.length == 0)
	{
		if (document.getElementById(campo).readOnly)
			document.getElementById(campo).className = "jig_readonly";
		else
			document.getElementById(campo).className = "";
		return "";
	}

	if (codigoUnidad == 97)
	{
		if (!validarNumericoConSignoConDecimales(valorCampo, enteros, decimales))
		{
			document.getElementById(campo).className = "jig_error";
			return "* "+descripcionError+" (el valor debe ser numérico, con 1 a "+enteros+" enteros y hasta "+decimales+" decimales)\n";
		}
	}
	else if (codigoUnidad == 99)
	{
		if (!validarNumericoConSignoConDecimales(valorCampo, enteros, decimales))
		{
			document.getElementById(campo).className = "jig_error";
			return "* "+descripcionError+" (el valor debe ser numérico, con 1 a "+enteros+" enteros y hasta "+decimales+" decimales)\n";
		}
		else if (valorCampo*1 >= 0)
		{
			document.getElementById(campo).className = "jig_error";
			return "* "+descripcionError+" (el valor debe ser numérico, negativo -por tratarse de un descuento- con 1 a "+enteros+" enteros y hasta "+decimales+" decimales)\n";
		}
	}
	else if (codigoUnidad == 95)
	{
		if (!validarNumericoConSignoConDecimales(valorCampo, enteros, decimales))
		{
			document.getElementById(campo).className = "jig_error";
			return "* "+descripcionError+" (el valor debe ser numérico, con 1 a "+enteros+" enteros y hasta "+decimales+" decimales)\n";
		}
		else if (valorCampo*1 > 0)
		{
			document.getElementById(campo).className = "jig_error";
			return "* "+descripcionError+" (el valor debe ser numérico menor o igual a cero -por tratarse de una anulación- con 1 a "+enteros+" enteros y hasta "+decimales+" decimales)\n";
		}
	}
	else
	{
		if (!validarNumericoConDecimales(valorCampo, enteros, decimales))
		{
			document.getElementById(campo).className = "jig_error";
			return "* "+descripcionError+" (el valor debe ser numérico, positivo, con 1 a "+enteros+" enteros y hasta "+decimales+" decimales)\n";
		}
	}

	if (document.getElementById(campo).readOnly)
		document.getElementById(campo).className = "jig_readonly";
	else
		document.getElementById(campo).className = "";

	return "";
}

function validarNumericoConDecimales(texto, enteros, decimales)
{
	var regExp = new RegExp("^\\d{1,"+enteros+"}(\\.\\d{0,"+decimales+"}?)?$");

	return (texto.match(regExp));
	/*if (texto.match(regExp))
		alert("Si, "+texto+" tiene 1 a "+enteros+" enteros y 0 a "+decimales+" decimales!");
	else
		alert("No, "+texto+" no tiene 1 a "+enteros+" enteros o 0 a "+decimales+" decimales");*/
}

// Nota: acepto negativos con signo, pero los positivos tienen que ser sin signo (+5.50 sería inválido, por ejemplo)
function validarNumericoConSignoConDecimales(texto, enteros, decimales)
{
	var regExp = new RegExp("^-?\\d{1,"+enteros+"}(\\.\\d{0,"+decimales+"}?)?$");

	return (texto.match(regExp));
}

function validarCampoNumericoSinDecimales(campo, enteros, descripcionError)
{
	valorCampo = document.getElementById(campo).value;
	if (valorCampo.length == 0)
	{
		if (document.getElementById(campo).readOnly)
			document.getElementById(campo).className = "jig_readonly";
		else
			document.getElementById(campo).className = "";
		return "";
	}
	if (!validarNumericoSinDecimales(valorCampo, enteros))
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+" (el valor debe ser numérico, con un máximo de "+enteros+" dígitos)\n";
	}
	if (document.getElementById(campo).readOnly)
		document.getElementById(campo).className = "jig_readonly";
	else
		document.getElementById(campo).className = "";
	return "";
}

function validarNumericoSinDecimales(texto, enteros)
{
	var regExp = new RegExp("^\\d{1,"+enteros+"}$");

	return (texto.match(regExp));
	/*if (texto.match(regExp))
		alert("Si, "+texto+" tiene 1 a "+enteros+" enteros y 0 a "+decimales+" decimales!");
	else
		alert("No, "+texto+" no tiene 1 a "+enteros+" enteros o 0 a "+decimales+" decimales");*/
}

function habilitarDesabilitar(elem,idElem)
{
	if (elem.checked) {
		document.getElementById(idElem).disabled = "";
		document.getElementById(idElem).className = "";
	} else {
		document.getElementById(idElem).disabled = "disabled";
		document.getElementById(idElem).className = "jig_readonly";
		document.getElementById(idElem).value = "";
	}
}

function estimarNumLineas(texto,anchoLinea)
{
	var numLineas = 0;
	var lineas = texto.split('\n');
	if (lineas.length == 0)
		numLineas += Math.ceil(texto.length/anchoLinea);
	else {
		for (j=0;j<lineas.length;j++)
			numLineas += Math.ceil(lineas[j].length/anchoLinea);
	}
	return numLineas;
}

function anchoIncluyendoFinesDeLinea(texto)
{
	return texto.length+texto.split('\n').length-1;
}

function recortar(objeto,caracteres)
{
	if (anchoIncluyendoFinesDeLinea(objeto.value) > caracteres)
		objeto.value = objeto.value.substring(0,caracteres-objeto.value.split('\n').length+1);
}

function ajustarFilas(campo, filas)
{
	campo.setAttribute("rows", filas);
	
	if (filas == 4)
		campo.style.height = "100px";
	
	// IE y Safari no tienen el bug de Firefox que impide mostrar un textbox con rows = 1 (siempre muestra 2 como mínimo)
	//if (navigator.userAgent.indexOf("Firefox")>=0)
	{
		if (filas == 1)
			campo.style.height = "19px";
		else
			campo.style.height = "auto";
	}
}

function limitarLongitudTextArea(e, campo, longitud)
{
	var kcode = (window.event) ? window.event.keyCode : e.which;
	if ((kcode>36 && kcode<41) || kcode == 8 || kcode == 0)
		return true;
	else
		return (anchoIncluyendoFinesDeLinea(campo.value)<longitud);
}

/*****************************************/
var cambioManualDetalle = true;
var cambioManualDetalleImpuestos = true;
var indiceDetalles = new Array();
var indiceImpuestos = new Array();

var numFilasDetalles = 0;
var numFilasDetallesMax = 0;
var numFilasImpuestos = 0;
var numFilasImpuestosMax = 0;
/*****************************************/

function calcularImporteFilaImpuestos(fila)
{
	if (cambioManualDetalleImpuestos)
	{
		cambioManualDetalleImpuestos = false;
		var baseImponible = document.getElementById('impuesto_baseimponible'+fila).value*1;
		var alicuota = document.getElementById('impuesto_alicuota'+fila).value*1;
		var importe = baseImponible * alicuota / 100;

		if (importe.toFixed)
			document.getElementById('impuesto_monto'+fila).value = importe.toFixed(2);
		else
			document.getElementById('impuesto_monto'+fila).value = importe;

		calcularTotalImpuestos();
		cambioManualDetalleImpuestos = true;
	}
}

function limpiarBIyAFilaImpuestos(fila)
{
	if (cambioManualDetalleImpuestos)
	{
		cambioManualDetalleImpuestos = false;
		document.getElementById('impuesto_baseimponible'+fila).value = "";
		document.getElementById('impuesto_alicuota'+fila).value = "";
		calcularTotalImpuestos();
		cambioManualDetalleImpuestos = true;
	}
}

function calcularTotalImpuestos()
{
	var tbl = document.getElementById('impuestos');
	var numFilas = tbl.rows.length;
	var fila;
	var total = 0;
	for (var i = 0; i < numFilas; i++)
	{
		fila = tbl.rows[i];

		if (fila.cells.length >= 5)
			if (fila.cells[4].childNodes.length >= 2)
				total += fila.cells[4].childNodes[2].value*1;
	}

	if (total.toFixed)
	{
		document.getElementById("imptotalimpuestos1").value = total.toFixed(2);
		document.getElementById("imptotalimpuestos2").value = total.toFixed(2);
	}
	else
	{
		document.getElementById("imptotalimpuestos1").value = total;
		document.getElementById("imptotalimpuestos2").value = total;
	}

	calcularTotal();
}
