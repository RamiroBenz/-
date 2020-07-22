numFilasImpuestos = 6;
numFilasImpuestosMax = 6;

function ajustarAnchoFocus(campo)
{
	campo.style.width=(campo.value.length>36)?"280px":(campo.value.length>26)?"240px":"200px";
	// Con style="overflow:visible;" IE cambia el tamaño de forma automática, por lo que esto no es necesario - corrección, obviamente tiene un bug y me arruina el ancho!
	//if (!(navigator.userAgent.indexOf("MSIE")>=0))
	{
		if ((campo.value.length>36) || (campo.value.indexOf("\n")>=0))
			ajustarFilas(campo,Math.min(estimarNumLineas(campo.value,40),5));
		else
			ajustarFilas(campo,1);
	}
}

function ajustarAnchoBlur(campo)
{
	campo.style.width=(campo.value.length>46)?"340px":(campo.value.length>36)?"280px":(campo.value.length>26)?"220px":(campo.value.length>16)?"180px":"120px";
}

function insertarFilaDetalle()
{
	if (numFilasDetalles >= 100)
	{
		alert("Por favor ingrese no mas de 100 lineas de detalle.");
		return;
	}

	indiceDetalles[numFilasDetallesMax] = numFilasDetalles+1;
	var tbl = document.getElementById('idoperacion');
	var lastRow = tbl.rows.length;
	var r = tbl.insertRow(lastRow);
	var c = new Array();

	for (var i = 0; i < 12; i++)
	{
		c[i] = r.insertCell(i);
		c[i].setAttribute("style","padding:0px 4px;");
	}
	
	numFilasDetalles++;
	numFilasDetallesMax++;
	
	c[0].innerHTML = "<input type='text' name='detalleCodigoArticulo' maxlength='19' width 80px; /><input type='hidden' name='detalleNroLinea' />";
	//c[1].innerHTML = "<input type='text' name='detalleDescripcion' />";
	/*if (navigator.userAgent.indexOf("MSIE")>=0)
		c[1].innerHTML = "<textarea name='detalleDescripcion' maxlength='30' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:120px;overflow:visible;' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>";
	else*/
	
	//c[1].innerHTML = "<input type='text' name='detalleDescripcion' maxlength='200' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:120px;' onFocus='ajustarAnchoFocus(this);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);' />";
	
	c[1].innerHTML = "<textarea name='detalleDescripcion' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:200px;overflow:auto;"+(navigator.userAgent.indexOf("Firefox")?"height:19px;":"")+"' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyPress='return limitarLongitudTextArea(event,this,4000);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>"; // Si, Firefox tiene un bug horrible: no puede hacer textareas con una sola fila, por eso tengo que simularla con el height:19px;
	
	c[2].innerHTML = "<input type='text' name='detalleCantidad' maxlength='19' id='detalle_cantidad"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' value='1' />";
	c[3].innerHTML = "<select type='text' name='detalleMedida' id='detalle_medida"+numFilasDetallesMax+"' style='width:95px;'><option value='7' style='color:#888;'>seleccionar...</option>"+htmlUnidadesMedida+"</select>";
	c[4].innerHTML = "<input type='text' name='detallePrecio' maxlength='19' id='detalle_precio"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' />"; //TODO: agregar autocomplete='off' para que los navegadores no guarden el historial de datos numéricos, sólo permitirlo en código y descripción. Por ahora lo dejo para que funcione el history.back() ya que con autocomplete='off' borra el valor al volver a la página
	c[5].innerHTML = "<input type='text' name='detallePorcentajeBonificacion' maxlength='6' id='detalle_porcentaje"+numFilasDetallesMax+"' value='0' onchange='calcularImporteBonificacionDetalle("+numFilasDetallesMax+");' size='3' maxlength='6' />";//TODO: agregar autocomplete='off'
	c[6].innerHTML = "<input type='text' name='detalleImporteBonificacion' maxlength='14' id='detalle_importe_bonificacion"+numFilasDetallesMax+"' onchange='calcularPorcentajeBonificacionDetalle("+numFilasDetallesMax+");' /><input type='hidden' name='detalleTipoBonificacion' id='detalle_tipo_bonificacion"+numFilasDetallesMax+"' value='porcentaje' />";//TODO: agregar autocomplete='off'
	c[7].innerHTML = "<input type='text' name='detalleSubtotal1' id='detalle_subtotal1"+numFilasDetallesMax+"' readonly='readonly' />";
	c[8].innerHTML = "<select name='detalleTipoIVA' id='detalle_tipo_iva"+numFilasDetallesMax+"' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' style='width:70px;'> <option value='0' style='color:#888;'>seleccionar...</option><option value='1'>&nbsp;No gravado</option><option value='2'>&nbsp;Exento</option><option value='3'>&nbsp;0%</option><option value='9'>&nbsp;2,5%</option><option value='8'>&nbsp;5%</option><option value='4'>&nbsp;10,5%</option><option value='5' selected='selected'>&nbsp;21%</option><option value='6'>&nbsp;27%</option></select>";
	c[9].innerHTML = "<input type='text' name='detalleImporteIVA' id='detalle_importe_iva"+numFilasDetallesMax+"' readonly='readonly' />";
	c[10].innerHTML = "<input type='text' name='detalleSubtotal2' id='detalle_subtotal2"+numFilasDetallesMax+"' readonly='readonly' />";
	c[11].innerHTML = "<span style='width:100%;text-align:center;'><input type='button' name='Eliminar' value='X' style='width:31px;text-align:center;color:#FF0000;font-size:10px;' onclick='borrarFilaDetalle("+numFilasDetallesMax+");' /></span>";
	c[11].setAttribute("style","text-align:center;padding:0px;");
}

function calcularImporteBonificacionDetalle(fila)
{
	var cantidad = document.getElementById('detalle_cantidad'+fila).value*1;
	var precio = document.getElementById('detalle_precio'+fila).value;
	document.getElementById('detalle_porcentaje'+fila).style.color = "#000000";
	document.getElementById('detalle_tipo_bonificacion'+fila).value = "porcentaje";

	if (cantidad.toFixed)
		document.getElementById('detalle_importe_bonificacion'+fila).value =
			(precio * cantidad * document.getElementById('detalle_porcentaje'+fila).value/100.0).toFixed(2);
	else
		document.getElementById('detalle_importe_bonificacion'+fila).value =
			precio * cantidad * document.getElementById('detalle_porcentaje'+fila).value/100.0;

	document.getElementById('detalle_importe_bonificacion'+fila).style.color = "#999999";
	calcularSubtotalDetalle(fila);
}

function calcularPorcentajeBonificacionDetalle(fila)
{
	var cantidad = document.getElementById('detalle_cantidad'+fila).value*1;
	var precio = document.getElementById('detalle_precio'+fila).value;
	document.getElementById('detalle_importe_bonificacion'+fila).style.color = "#000000";
	document.getElementById('detalle_tipo_bonificacion'+fila).value = "importe";
	var importeBon = document.getElementById('detalle_importe_bonificacion'+fila).value*100;

	if (cantidad.toFixed)
		document.getElementById('detalle_porcentaje'+fila).value = (importeBon / (precio * cantidad)).toFixed(2);
	else
		document.getElementById('detalle_porcentaje'+fila).value = importeBon / (precio * cantidad);

	document.getElementById('detalle_porcentaje'+fila).style.color = "#999999";
	calcularSubtotalDetalle(fila);
}

function calcularSubtotalDetalle(fila)
{
	if (cambioManualDetalle)
	{
		cambioManualDetalle = false;
		var cantidad = document.getElementById('detalle_cantidad'+fila).value*1;
		var precio = document.getElementById('detalle_precio'+fila).value*1;
		var subTotalNeto = precio * cantidad;
		
		var importeBon = document.getElementById('detalle_importe_bonificacion'+fila).value*1;
		var subtotal1 = subTotalNeto - importeBon;

		var tipoIVA = document.getElementById('detalle_tipo_iva'+fila).value;
		if (isNaN(tipoIVA)) tipoIVA = 0;

		var importeIVA = 0;
		if (tipoIVA == 4)
			importeIVA = subtotal1 * 0.105;
		else if (tipoIVA == 5)
			importeIVA = subtotal1 * 0.21;
		else if (tipoIVA == 6)
			importeIVA = subtotal1 * 0.27;
		else if (tipoIVA == 8)
			importeIVA = subtotal1 * 0.05;
		else if (tipoIVA == 9)
			importeIVA = subtotal1 * 0.025;
		
		if (subtotal1.toFixed) {
			document.getElementById('detalle_subtotal1'+fila).value = subtotal1.toFixed(2);
			document.getElementById('detalle_importe_iva'+fila).value = importeIVA.toFixed(2);
			document.getElementById('detalle_subtotal2'+fila).value = (subTotalNeto - importeBon + importeIVA).toFixed(2);
		} else {
			document.getElementById('detalle_subtotal1'+fila).value = subtotal1;
			document.getElementById('detalle_importe_iva'+fila).value = importeIVA;
			document.getElementById('detalle_subtotal2'+fila).value = subTotalNeto - importeBon + importeIVA;
		}

		calcularTotal();
		cambioManualDetalle = true;
	}
}

function calcularTotal()
{
	var tbl = document.getElementById('idoperacion');
	var numFilas = tbl.rows.length;
	var fila;
	var totalNetoNoGravado = 0;
	var totalExento = 0;
	var totalNetoGravado = 0;
	var totalIVA27 = 0;
	var totalIVA21 = 0;
	var totalIVA105 = 0;
	var totalIVA5 = 0;
	var totalIVA2 = 0;
	var totalImpuestos = document.getElementById('imptotalimpuestos2').value*1;
	var total = 0;
	var totalPesos = 0;

	for (var i = 1; i < numFilasDetalles+1; i++)
	{
		fila = tbl.rows[i];
		if (fila.cells[8].firstChild.value == "1")
			totalNetoNoGravado += fila.cells[7].firstChild.value*1;
		else if (fila.cells[8].firstChild.value == "2")
			totalExento += fila.cells[7].firstChild.value*1;
		else if (fila.cells[8].firstChild.value == "3")
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		else if (fila.cells[8].firstChild.value == "4") {
			totalIVA105 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		else if (fila.cells[8].firstChild.value == "5") {
			totalIVA21 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		else if (fila.cells[8].firstChild.value == "6") {
			totalIVA27 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		else if (fila.cells[8].firstChild.value == "8") {
			totalIVA5 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		else if (fila.cells[8].firstChild.value == "9") {
			totalIVA2 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		total += fila.cells[10].firstChild.value*1;
	}

	if (totalNetoNoGravado.toFixed) {
		document.getElementById("impnetonogravado").value = totalNetoNoGravado.toFixed(2);
		document.getElementById("impexento").value = totalExento.toFixed(2);
		document.getElementById("impnetogravado").value = totalNetoGravado.toFixed(2);
		//recalcularBonificacionForzado();
		document.getElementById("impiva27").value = totalIVA27.toFixed(2);
		document.getElementById("impiva21").value = totalIVA21.toFixed(2);
		document.getElementById("impiva105").value = totalIVA105.toFixed(2);
		document.getElementById("impiva5").value = totalIVA5.toFixed(2);
		document.getElementById("impiva2").value = totalIVA2.toFixed(2);
		//document.getElementById("creditoiva").value = ((totalIVA27+totalIVA21+totalIVA105)*document.getElementById('porcbonifglobal').value/100.0).toFixed(2);
		document.getElementById("imptotal").value = (total/*-valorImporteBonifGlobal*/+totalImpuestos).toFixed(2);
		if (simboloMoneda != "$")
		{
			totalPesos = (document.getElementById("imptotal").value*1)*tipoCambio;
			document.getElementById("imptotalpesos").value = totalPesos.toFixed(2);
		}
	}

	else {
		document.getElementById("impnetonogravado").value = totalNetoNoGravado;
		document.getElementById("impexento").value = totalExento;
		document.getElementById("impnetogravado").value = totalNetoGravado;
		document.getElementById("impiva27").value = totalIVA27;
		document.getElementById("impiva21").value = totalIVA21;
		document.getElementById("impiva105").value = totalIVA105;
		document.getElementById("impiva5").value = totalIVA5;
		document.getElementById("impiva2").value = totalIVA2;

		document.getElementById("imptotal").value = total/*-valorImporteBonifGlobal*/+totalImpuestos;
		if (simboloMoneda != "$")
		{
			totalPesos = (document.getElementById("imptotal").value*1)*tipoCambio;
			document.getElementById("imptotalpesos").value = totalPesos.toFixed(2);
		}
	}
}

function insertarFilaImpuesto()
{
	if (numFilasImpuestos >= 9)
	{
		alert("Por favor ingrese no más de 3 tributos adicionales.");
		return;
	}
	indiceImpuestos[numFilasImpuestosMax] = numFilasImpuestos+1;
	var tbl = document.getElementById("impuestos");
	var lastRow = tbl.rows.length;
	var r = tbl.insertRow(lastRow-((simboloMoneda == "$")?2:3));
	var c = new Array();

	for (var i = 0; i < 6; i++)
		c[i] = r.insertCell(i);

	numFilasImpuestos++;
	numFilasImpuestosMax++;
	c[0].innerHTML = "<input type='text' name='impuestoDescripcion' id='impuesto_descripcion"+numFilasImpuestosMax+"' style='width:130px;' maxlength='40' />"
					+ "<input type='hidden' name='impuestoCodigo' id='impuesto_codigo"+numFilasImpuestosMax+"' value='0' />";
	c[0].setAttribute("style","text-align:right;padding:0px;");
	c[1].innerHTML = "<input type='text' name='impuestoDetalle' id='impuesto_detalle"+numFilasImpuestosMax+"' onkeyup='calcularTotalImpuestos();' style='width:100px;' maxlength='25' />";
	c[1].setAttribute("style","padding:0px;");
	c[1].style.padding = "0px";
	c[2].innerHTML = "<input type='text' name='impuestoBaseImponible' id='impuesto_baseimponible"+numFilasImpuestosMax+"' onkeyup='calcularImporteFilaImpuestos("+numFilasImpuestosMax+");' onchange='calcularImporteFilaImpuestos("+numFilasImpuestosMax+");' style='width:70px;' />";
	c[2].setAttribute("style","padding:0px;");
	c[2].style.padding = "0px";
	c[3].innerHTML = "<input type='text' name='impuestoAlicuota' id='impuesto_alicuota"+numFilasImpuestosMax+"' onkeyup='calcularImporteFilaImpuestos("+numFilasImpuestosMax+");' onchange='calcularImporteFilaImpuestos("+numFilasImpuestosMax+");' style='width:45px;' />";
	c[3].setAttribute("style","padding:0px;");
	c[3].style.padding = "0px";
	c[4].innerHTML = "<span>"+simboloMoneda+"</span>&nbsp;<input type='text' name='impuestoMonto' onkeyup='calcularTotalImpuestos();' id='impuesto_monto"+numFilasImpuestosMax+"' onchange='limpiarBIyAFilaImpuestos("+numFilasImpuestosMax+");' style='width:70px;' />";
	c[4].setAttribute("style","padding:0px;");
	c[4].style.padding = "0px";
	c[5].innerHTML = "<span style='width:100%;text-align:center;'><input type='button' name='Eliminar' id='ef' value='X' style='width:31px;text-align:center;color:#FF0000;font-size:10px;' onclick='borrarFilaImpuesto("+numFilasImpuestosMax+");' /></span>";
	c[5].setAttribute("style","padding:0px;");
	c[5].style.padding = "0px";
}

var estadoBorrandoDetalle = false;
var progresoBorrandoDetalle = 0;

function borrarFilaDetalle(rowNum)
{
	if (!estadoBorrandoDetalle)
	{
		estadoBorrandoDetalle = true;
		var fila = document.getElementById('idoperacion').rows[indiceDetalles[rowNum-1]];

		for (i=0;i<10;i++)
			fila.cells[i].firstChild.style.border = "none";
			fila.cells[3].firstChild.style.display = "none";
			fila.cells[8].firstChild.style.display = "none";
			fila.cells[11].firstChild.style.display = "none";

		borrarFilaDetalleTimer(rowNum);
	}
}

function borrarFilaDetalleTimer(rowNum)
{
	if (progresoBorrandoDetalle == 10)
	{
		progresoBorrandoDetalle = 0;
		tableRemoveRow('idoperacion',indiceDetalles[rowNum-1]);
		numFilasDetalles--;

		for (i=rowNum-1;i < numFilasDetallesMax;i++)
			indiceDetalles[i]--;

		calcularTotalImpuestos();
		calcularTotal();
		estadoBorrandoDetalle = false;
	}
	else
	{
		progresoBorrandoDetalle+=2;
		var fila = document.getElementById('idoperacion').rows[indiceDetalles[rowNum-1]];
		fila.style.height = (11-progresoBorrandoDetalle)+"px";

		for (i=0;i<11;i++)
			fila.cells[i].firstChild.style.fontSize = (11-progresoBorrandoDetalle)+"px";

		setTimeout("borrarFilaDetalleTimer("+rowNum+")",15);
	}
}

var estadoBorrandoImpuesto = false;
var progresoBorrandoImpuesto = 0;

function borrarFilaImpuesto(rowNum)
{
	if (!estadoBorrandoImpuesto)
	{
		estadoBorrandoImpuesto = true;
		var fila = document.getElementById('impuestos').rows[indiceImpuestos[rowNum-1]];

		fila.cells[4].style.textAlign = 'right';
		fila.cells[4].firstChild.style.display = 'none';
		fila.cells[5].firstChild.style.display = "none";

		borrarFilaImpuestoTimer(rowNum);
	}
}

function borrarFilaImpuestoTimer(rowNum)
{
	if (progresoBorrandoImpuesto == 10)
	{
		progresoBorrandoImpuesto = 0;
		tableRemoveRow('impuestos',indiceImpuestos[rowNum-1]);
		numFilasImpuestos--;

		for (i=rowNum-1;i < numFilasImpuestosMax;i++)
			indiceImpuestos[i]--;

		if (numFilasImpuestos == 6)
			document.getElementById('labelotrosimpuestos').style.display = 'none';

		calcularTotalImpuestos();
		calcularTotal();
		estadoBorrandoImpuesto = false;
	}
	else
	{
		progresoBorrandoImpuesto+=2;
		var fila = document.getElementById('impuestos').rows[indiceImpuestos[rowNum-1]];
		fila.style.height = (11-progresoBorrandoImpuesto)+"px";

		fila.cells[0].firstChild.style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		fila.cells[1].firstChild.style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		fila.cells[2].firstChild.style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		fila.cells[3].firstChild.style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		fila.cells[4].getElementsByTagName("input")[0].style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		setTimeout("borrarFilaImpuestoTimer("+rowNum+")",15);
	}
}

function validarCampos()
{
	if (validarCamposObligatorios())
		if (validarCamposValores())
			if (validarCamposLongitudCombinadaDescripciones())
				document.datosOperacionForm.submit();
}

function validarCamposObligatorios()
{
	var i;
	var fila = 1;
	var camposFaltantes = "";
	var camposFaltantesFila;
	var totalFilasConCamposFaltantes = 0;

	for (i=1;i<=numFilasDetallesMax;i++)
	{
		if (document.getElementById("detalle_descripcion"+i))
		{
			camposFaltantesFila  = registrarSiVacio("detalle_descripcion"+i,"Descripción Producto/Servicio (fila "+fila+")");
			camposFaltantesFila += registrarSiVacio("detalle_cantidad"+i,"Cantidad (fila "+fila+")");
			camposFaltantesFila += registrarSiVacio("detalle_precio"+i,"Precio Unitario (fila "+fila+")");
			camposFaltantesFila += registrarSiNulo("detalle_tipo_iva"+i,0,"Alícuota IVA (fila "+fila+")");
			if (camposFaltantesFila != "")
			{
				totalFilasConCamposFaltantes++;
				if (totalFilasConCamposFaltantes < 6)
					camposFaltantes += camposFaltantesFila;
			}
			fila++;
		}
	}
	if (totalFilasConCamposFaltantes >= 6)
		camposFaltantes += "* [...]";

	if (camposFaltantes == "")
		return true;
	else
	{
		alert("Los siguientes campos son obligatorios:\n\n"+camposFaltantes);
		return false;
	}
}

function validarCamposValores()
{
	var i;
	var fila;
	var camposInvalidos = "";
	var camposInvalidosFila;
	var totalFilasConCamposInvalidos = 0;
	var numDecimalesCantidad = document.getElementById("numdecimalescantidad")?document.getElementById("numdecimalescantidad").value:2;
	var numDecimalesPrecioUnit = document.getElementById("numdecimalespreciounit")?document.getElementById("numdecimalespreciounit").value:2;

	fila = 1;
	for (i=1;i<=numFilasDetallesMax;i++)
	{
		if (document.getElementById("detalle_descripcion"+i))
		{
			camposInvalidosFila  = validarCampoNumericoConDecimales("detalle_cantidad"+i,(numDecimalesCantidad<6)?7:5,numDecimalesCantidad,"Cantidad (fila "+fila+")");
			camposInvalidosFila += validarCampoNumericoConDecimales("detalle_precio"+i,(numDecimalesPrecioUnit<6)?11:9,numDecimalesPrecioUnit,"Precio Unitario (fila "+fila+")");
			camposInvalidosFila += validarPorcentaje("detalle_porcentaje"+i,3,2,"% Bonificación (fila "+fila+")");
			camposInvalidosFila += validarCampoNumericoConDecimales("detalle_importe_bonificacion"+i,11,2,"Importe Bonificación (fila "+fila+")");
			camposInvalidosFila += validarCampoNumericoConDecimales("detalle_subtotal2"+i,11,2,"Subtotal [modificar cantidad y/o precio] (fila "+fila+")");
			if (camposInvalidosFila != "")
			{
				totalFilasConCamposInvalidos++;
				if (totalFilasConCamposInvalidos < 6)
					camposInvalidos += camposInvalidosFila;
			}
			fila++;
		}
	}

	fila = 1;
	for (i=1;i<=numFilasImpuestosMax;i++)
	{
		if (document.getElementById("impuesto_monto"+i))
		{
			camposInvalidosFila  = validarCampoNumericoConDecimales("impuesto_baseimponible"+i,11,2,
				"Base Imponible (Tributos - fila "+fila+")");
			camposInvalidosFila += validarPorcentaje("impuesto_alicuota"+i,3,2,
				"% Alícuota (Tributos - fila "+fila+")");
			camposInvalidosFila += validarCampoNumericoConDecimales("impuesto_monto"+i,11,2,
				"Monto (Tributos - fila "+fila+")");
			if (camposInvalidosFila != "")
			{
				totalFilasConCamposInvalidos++;
				if (totalFilasConCamposInvalidos < 6)
					camposInvalidos += camposInvalidosFila;
			}
			fila++;
		}
	}

	if (totalFilasConCamposInvalidos >= 6)
		camposInvalidos += "* [...]";

	if (camposInvalidos == "")
		return true;
	else
	{
		alert("Los siguientes campos tienen valores incorrectos:\n\n"+camposInvalidos);
		return false;
	}
}

function validarCamposLongitudCombinadaDescripciones()
{
	var i;
	var fila;
	var longitudTotal = 0;

	fila = 1;
	for (i=1;i<=numFilasDetallesMax;i++)
	{
		if (document.getElementById("detalle_descripcion"+i))
			longitudTotal += document.getElementById("detalle_descripcion"+i).value.length*1;
	}
	
	return true;
}
