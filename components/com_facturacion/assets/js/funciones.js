function Calc_dcpe(dcpe_ctdUnidadItem, dcpe_mtoValorUnitario, dcpe_tipAfeIGV) {
//alert(document.dcpeForm.dcpe_tipAfeIGV.value);
    if (dcpe_tipAfeIGV > 1) {
        $.ajax({
            url: 'index.php?option=com_facturacion&controller=dcpe&task=obtenerValorController&dcpe_tipAfeIGV=' + document.dcpeForm.dcpe_tipAfeIGV.value,
            type: "POST",
            data: "dcpe_tipAfeIGV = " + document.dcpeForm.dcpe_tipAfeIGV.value,
            success: function (dcpe_valor) {
//                alert(dcpe_valor);
                var dcpe_mtoIgvItem = (parseFloat(dcpe_valor) * parseFloat(dcpe_ctdUnidadItem) * parseFloat(dcpe_mtoValorUnitario)) / 100;
                var dcpe_mtoValorVentaItem = dcpe_ctdUnidadItem * dcpe_mtoValorUnitario;
                var dcpe_mtoPrecioVentaItem = ((parseFloat(dcpe_valor) + 100) * dcpe_mtoValorUnitario) / 100;

                document.dcpeForm.dcpe_mtoIgvItem.value = dcpe_mtoIgvItem;
                document.dcpeForm.dcpe_mtoValorVentaItem.value = dcpe_mtoValorVentaItem;
                document.dcpeForm.dcpe_mtoPrecioVentaItem.value = dcpe_mtoPrecioVentaItem.toFixed(2);
            }
        });
    }
    else {
    }
}
function mtoOperGravadas() {
    $.ajax({
        url: 'index.php?option=com_facturacion&controller=cpe&task=mtoOperGravadas&cpe_id_cpe=' + document.adminForm.cpe_id_cpe.value,
        type: "POST",
        data: "cpe_id_cpe = " + document.adminForm.cpe_id_cpe.value,
        success: function (totalValor) {
            document.adminForm.cpe_mtoOperGravadas.value = totalValor;
        }
    });
}
function mtoOperInafectas() {
    $.ajax({
        url: 'index.php?option=com_facturacion&controller=cpe&task=mtoOperInafectas&cpe_id_cpe=' + document.adminForm.cpe_id_cpe.value,
        type: "POST",
        data: "cpe_id_cpe = " + document.adminForm.cpe_id_cpe.value,
        success: function (totalValor) {
            document.adminForm.cpe_mtoOperInafectas.value = parseFloat(totalValor);
        }
    });
}
function mtoOperExoneradas() {
    $.ajax({
        url: 'index.php?option=com_facturacion&controller=cpe&task=mtoOperExoneradas&cpe_id_cpe=' + document.adminForm.cpe_id_cpe.value,
        type: "POST",
        data: "cpe_id_cpe = " + document.adminForm.cpe_id_cpe.value,
        success: function (totalValor) {
            document.adminForm.cpe_mtoOperExoneradas.value = parseFloat(totalValor);
        }
    });
}
function calcIGVTotal() {
    $.ajax({
        url: 'index.php?option=com_facturacion&controller=cpe&task=calcIGVTotal&cpe_id_cpe=' + document.adminForm.cpe_id_cpe.value,
        type: "POST",
        data: "cpe_id_cpe = " + document.adminForm.cpe_id_cpe.value,
        success: function (totalValor) {

            document.adminForm.cpe_mtoIGV.value = parseFloat(totalValor);
        }
    });
}
function numero_mtoLetras() {
    jQuery.ajax({
        url: 'index.php?option=com_facturacion&controller=leyenda&task=numero_mtoLetras&cpe_id_cpe=' + document.leyendaForm.cpe_id_cpe.value,
        type: "POST",
        data: "cpe_id_cpe = " + document.leyendaForm.cpe_id_cpe.value,
        success: function (totalValor) {
            (totalValor);
        }
    });
}

function mtoLetras() {
    jQuery.ajax({
        url: 'index.php?option=com_facturacion&controller=leyenda&task=genMontLetras&cpe_mtoImpVenta=' + document.leyendaForm.cpe_mtoImpVenta.value,
        type: "POST",
        data: "cpe_mtoImpVenta = " + document.leyendaForm.cpe_mtoImpVenta.value,
        success: function (totalValor) {
            alert(totalValor);
            document.leyendaForm.ley_desLeyendaPers.value = totalValor;
        }
    });
}

function validateEmpresa() {

    document.getElementById('task').value = 'saveAction';
    document.getElementById('adminForm').submit();
}
function updateMontosTotales($cpe_id_cpe) {
    window.location.href = 'index.php?option=com_facturacion&controller=cpe&task=updateMontosTotales&cpeId=' + $cpe_id_cpe;
}

function impTotalVenta($cpe_id_cpe) {
    window.location.href = 'index.php?option=com_facturacion&controller=cpe&task=impTotalVenta&cpeId=' + $cpe_id_cpe;
}
function calcDescuento($cpe_id_cpe) {
    window.location.href = 'index.php?option=com_facturacion&controller=cpe&task=calcDescuento&cpeId=' + $cpe_id_cpe;
}

function grabarCPE() {

    var hoy = new Date();
//    alert(hoy.getTime());
//    var dd = hoy.getDate();
//    var mm = hoy.getMonth() + 1;
//
//    var yyyy = hoy.getFullYear();
//    if (dd < 10) {
//        dd = '0' + dd;
//    }
//    if (mm < 10) {
//        mm = '0' + mm;
//    }
//
//    var hoy = yyyy + '-' + mm + '-' + dd;
    var fec_vcto = new Date('2019-12-31 00:00:00');
    var fec_emis = document.adminForm.cpe_fecEmision.value;
    var anio = String(fec_emis).substring(6, 10); //YYYY
    var dia = String(fec_emis).substring(0, 2); //DD
    var mes = String(fec_emis).substring(3, 5); //MM
    fec_emis = Date.parse(anio + '-' + mes + '-' + dia + ' 00:00:00');
    
    var difer_pc = (fec_vcto.getTime() - hoy.getTime()) / (1000 * 60 * 60 * 24);
    var difer_emi = (fec_vcto.getTime() - fec_emis) / (1000 * 60 * 60 * 24) + 7;
    
    if (difer_emi === 0)
    {
        alert('El tiempo de uso ha caducado. Comúniquese con E-Tributa');
        return false;
    }
    
    if (difer_pc < 3)
    {
        alert('El tiempo está por vencer. Tiene: ' + difer_pc.toFixed(1) + ' días. Comúniquese con E-Tributaa');
    }

    if (difer_pc < 0)
    {
        alert('El tiempo de uso ha caducado. Comúniquese con E-Tributa');
        return false;
    }

    if (document.adminForm.cpe_tipCpe.value == '1')
    {
        alert('Selecione el tipo de CPE');
        document.getElementById('cpe_tipCpe').style.border = 'solid 0.5px red';
        return false;
    }
    if (document.adminForm.cpe_fecEmision.value == '')
    {
        alert('Ingrese la fecha de Emisión');
        document.getElementById('cpe_fecEmision').style.border = 'solid 0.5px red';
        return false;
    }
    if (document.adminForm.cpe_fecVencimiento.value == '')
    {
        alert('Ingrese la fecha de Vencimiento');
        document.getElementById('cpe_fecVencimiento').style.border = 'solid 0.5px red';
        return false;
    }
    if (document.adminForm.cpe_sumDsctoGlobal.value == '')
    {
        alert('Ingrese el descuento Global');
        document.getElementById('cpe_sumDsctoGlobal').style.border = 'solid 0.5px red';
        return false;
    }

    generarCorrelativo();

}

function generarCorrelativo($emp_id_emp, $cpe_tipCpe) {
    var emp_id_emp = document.adminForm.emp_id_emp.value;
    var cpe_tipCpe = document.adminForm.cpe_tipCpe.value;
    var cpe_serie = document.adminForm.cpe_serie.value;
//    alert(cpe_numero);
    if (document.adminForm.cpe_numero.value == '') {
//        alert('index.php?option=com_facturacion&controller=cpe&task=generarNumeroConsecutivo&emp_id_emp=' + document.adminForm.emp_id_emp.value + '&cpe_tipCpe=' + document.adminForm.cpe_tipCpe.value + '&cpe_serie=' + document.adminForm.cpe_serie.value);
        $.ajax({
            url: 'index.php?option=com_facturacion&controller=cpe&task=generarNumeroConsecutivo&emp_id_emp=' + document.adminForm.emp_id_emp.value + '&cpe_tipCpe=' + document.adminForm.cpe_tipCpe.value + '&cpe_serie=' + document.adminForm.cpe_serie.value,
            type: "POST",
            data: 'emp_id_emp=' + document.adminForm.emp_id_emp.value,
            success: function (valorSiguiente) {
//                alert(valorSiguiente);
                if (valorSiguiente === '') {
                    valorSiguiente = 1;
                }
                document.adminForm.cpe_numero.value = valorSiguiente;
                validacperepetido_save();
            }
        });
    }
    else {
        validacperepetido_save();
    }
}

function obtenerDescLeyC() {
//    var ley_codLeyenda = document.leyendaForm.ley_codLeyenda.value;
//    alert(ley_codLeyenda);
//    
//        alert('index.php?option=com_facturacion&controller=leyenda&task=obtenerDescLey&ley_codLeyenda=' + document.leyendaForm.ley_codLeyenda.value);
    jQuery.ajax({
        url: 'index.php?option=com_facturacion&controller=leyenda&task=obtenerDescLey&ley_codLeyenda=' + document.leyendaForm.ley_codLeyenda.value,
        type: "POST",
        data: 'ley_codLeyenda=' + document.leyendaForm.ley_codLeyenda.value,
        success: function (obtenerDescLeyPer) {
//                alert(obtenerDescLeyPer);
            document.leyendaForm.ley_desLeyendaPers.value = obtenerDescLeyPer;
        }
    });

}

function addSerie() {
    var cpe_tipCpe = document.adminForm.cpe_tipCpe.value;

    if (cpe_tipCpe === "01") {
        document.adminForm.cpe_serie.value = 'F001';
    }
    if (cpe_tipCpe === "03") {
        document.adminForm.cpe_serie.value = 'B001';
    }
    if (cpe_tipCpe === "07F") {
        document.adminForm.cpe_serie.value = 'F001';
    }
    if (cpe_tipCpe === "07B") {
        document.adminForm.cpe_serie.value = 'B001';
    }
    if (cpe_tipCpe === "08F") {
        document.adminForm.cpe_serie.value = 'F001';
    }
    if (cpe_tipCpe === "08B") {
        document.adminForm.cpe_serie.value = 'B001';
    }

}
function validacperepetido_save() {
    var id = document.adminForm.cpe_id_cpe.value;
    {
        var cpe_id_cpe = document.adminForm.cpe_id_cpe.value;
        var emp_id_emp = document.adminForm.emp_id_emp.value;
        var cpe_tipCpe = document.adminForm.cpe_tipCpe.value;
        var cpe_serie = document.adminForm.cpe_serie.value;
        var cpe_numero = document.adminForm.cpe_numero.value;
        $.ajax({
            url: 'index.php?option=com_facturacion&controller=cpe&task=indicadorduplicado',
            type: "POST",
            data: "emp_id_emp=" + emp_id_emp + "&cpe_tipCpe=" + cpe_tipCpe + "&cpe_serie=" + cpe_serie + "&cpe_numero=" + cpe_numero + "&cpe_id_cpe=" + cpe_id_cpe,
            success: function (datos) {
                if (datos === "invalid") {
                    alert('CPE repetido Verificar');
                } else {
                    document.getElementById('task').value = 'saveAction';
                    document.getElementById('adminForm').submit();
                }
            }
        });
    }
}


function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}


function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
    especiales = [8, 37, 39, 46];
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
function validaNum(e) {
    var tecla = e.keyCode || e.which;
    if (tecla === 8 || tecla === 9)
        return true; //Tecla de retroceso (para poder borrar) o pasar al siguiente campo
    patron = /\d/; // Solo acepta números 
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
function validateFields() {
    if (document.frmPct.nu_dni.value === "")
    {
        alert('Por favor ingrese el Responsable');
        document.getElementById('encuestador').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmPct.cod_2000.value === "")
    {
        alert('Por favor ingrese el Establecimiento');
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmPct.nu_ano.value === "211")
    {
        alert('Por favor ingrese Año');
        document.getElementById('nu_ano').style.border = 'solid 0.5px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    if (document.frmPct.nu_mes.value === "211")
    {
        alert('Por favor ingrese Mes');
        document.getElementById('nu_mes').style.border = 'solid 0.5px red';
        document.getElementById('nu_ano').style.border = 'solid 0px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    document.getElementById('task').value = 'saveAction';
    document.getElementById('frmPct').submit();
}

function validateFields_infindhosp() {
    if (document.frmInfindhosp.nu_dni.value === "")
    {
        alert('Por favor ingrese el Responsable');
        document.getElementById('encuestador').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmInfindhosp.cod_2000.value === "")
    {
        alert('Por favor ingrese el Establecimiento');
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmInfindhosp.nu_ano.value === "211")
    {
        alert('Por favor ingrese Año');
        document.getElementById('nu_ano').style.border = 'solid 0.5px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    if (document.frmInfindhosp.nu_mes.value === "211")
    {
        alert('Por favor ingrese Mes');
        document.getElementById('nu_mes').style.border = 'solid 0.5px red';
        document.getElementById('nu_ano').style.border = 'solid 0px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    document.getElementById('task').value = 'saveAction';
    document.getElementById('frmInfindhosp').submit();
}
function grabarCpe() {

    generarSerieNumero_save();

}
function generarSerieNumero_save() {
    var id = document.adminForm.cpe_id_cpe.value;
//    alert(id);
    if (id > 0) {
        document.getElementById('task').value = 'saveAction';
        document.getElementById('adminForm').submit();
    }
    else
    {
        var emp_id_emp = document.adminForm.emp_id_emp.value;
        var cpe_tipCpe = document.adminForm.cpe_tipCpe.value;

        $.ajax({
            url: 'index.php?option=com_facturacion&controller=cpe&task=generarSerieNumero',
            type: "POST",
            data: "emp_id_emp=" + emp_id_emp + "&cpe_tipCpe=" + cpe_tipCpe,
            success: function (datos) {
                if (datos === "invalid") {
                    document.adminForm.emp_id_emp.value = $resultado;
                    var as = el.getElementsByTagName('select');
                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0.5px red';
                    }
                } else {
                    document.getElementById('task').value = 'saveAction';
                    document.getElementById('adminForm').submit();
                }
            }
        });
    }
}

function verifyDelete($id_tbc) {

    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {
        alert("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=inftbc&task=removeInftbc&inftbcId=' + $id_tbc;
    }
    else
        alert("No eliminó el registro")

}
function verifyDelete_infits($id_its) {

    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {
        alert("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=infits&task=removeInfits&infitsId=' + $id_its;
    }
    else
        alert("No eliminó el registro")

}
function verifyDelete_indhosp($id_indhosp) {

    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {
        alert("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=infindhosp&task=removeInfindhosp&infindhospId=' + $id_indhosp;
    }
    else
        alert("No eliminó el registro")

}

function validateSearch() {
    if (document.adminForm.cod_2000.value === "")
    {
        alert('Por favor ingrese palabra clave');
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }
    document.getElementById('task').value = 'searchAction';
    document.getElementById('adminForm').submit();
}

function crear_item() {

    document.getElementById('dcpeTask').value = 'addDcpe';
    document.getElementById('itemForm').submit();
}
function crear_relacionado() {

    document.getElementById('relTask').value = 'addRel';
    document.getElementById('relacionadoForm').submit();
}
function crear_relacionado1() {

    document.getElementById('task').value = 'addRel';
    document.getElementById('relacionadoForm').submit();
}
function crear_leyenda() {

    document.getElementById('leyTask').value = 'addLey';
    document.getElementById('leyendaForm').submit();
}
function crear_leyenda1() {

    document.getElementById('task').value = 'addLey';
    document.getElementById('leyendaForm').submit();
}

function verifyDelete_ley($ley_id_ley, $cpe_id_cpe) {


    var answer = confirm("Deseas ELIMINAR el Leyenda?")
    if (answer) {

        alert("Registro Eliminado")
        window.location.href = 'index.php?option=com_facturacion&controller=cpe&task=deleteLey&cpeId=' + $cpe_id_cpe + '&Itemid=3&id=' + $ley_id_ley;
        //setTimeout( function() { alert('Registro Eliminado');}, 20000 ); 
    }
    else
        alert("No eliminó el registro")

}

function validateDcpe() {
    document.getElementById('task').value = 'saveAction';
    document.getElementById('dcpeForm').submit();
}

function verifyDelete_dcpe($idcpe_id_detalle_cpe, $cpe_id_cpe) {


    var answer = confirm("Deseas ELIMINAR el item?")
    if (answer) {

        alert("Registro Eliminado")
        window.location.href = 'index.php?option=com_facturacion&controller=cpe&task=deletedDcpe&cpeId=' + $cpe_id_cpe + '&Itemid=3&id=' + $idcpe_id_detalle_cpe;
        //setTimeout( function() { alert('Registro Eliminado');}, 20000 ); 
    }
    else
        alert("No eliminó el registro")

}

function verifyDelete_rel($rel_id_rel, $cpe_id_cpe) {


    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {

        alert("Registro Eliminado")
        window.location.href = 'index.php?option=com_facturacion&controller=cpe&task=deleteRel&cpeId=' + $cpe_id_cpe + '&Itemid=3&id=' + $rel_id_rel;
        //setTimeout( function() { alert('Registro Eliminado');}, 20000 ); 

    }
    else
        alert("No eliminó el registro")

}

function validainfrepetido() {
    var id = document.frmInfits.id_its.value;
//    alert(id);
    if (id === "0") {
        var cod_2000 = document.frmInfits.cod_2000.value;
        var nu_mes = document.frmInfits.nu_mes.value;
        var nu_ano = document.frmInfits.nu_ano.value;
        $.ajax({
            url: 'index.php?option=com_nutritions&controller=infits&task=indicadorduplicado',
            type: "POST",
            data: "cod_2000=" + cod_2000 + "&nu_mes=" + nu_mes + "&nu_ano=" + nu_ano,
            success: function (datos) {
                var el = document.getElementById('informe');
                var as = el.getElementsByTagName('select');
                if (datos === "invalid") {

                    alert('Establecimiento con Informe repetido');

                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0.5px red';
                    }

                } else {

                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0px ';
                    }

                }
            }
        });
    }
    else {
    }
}
function validainfrepetido_save() {
    var id = document.frmInfits.id_its.value;
//    alert(id);
    if (id > 0) {
        document.getElementById('task').value = 'saveAction';
        document.getElementById('frmInfits').submit();
    }
    else
    {
        var cod_2000 = document.frmInfits.cod_2000.value;
        var nu_mes = document.frmInfits.nu_mes.value;
        var nu_ano = document.frmInfits.nu_ano.value;
        $.ajax({
            url: 'index.php?option=com_nutritions&controller=infits&task=indicadorduplicado',
            type: "POST",
            data: "cod_2000=" + cod_2000 + "&nu_mes=" + nu_mes + "&nu_ano=" + nu_ano,
            success: function (datos) {
                if (datos === "invalid") {
                    alert('Establecimiento con Informe repetido');
                    var el = document.getElementById('informe');
                    var as = el.getElementsByTagName('select');
                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0.5px red';
                    }
                } else {
                    document.getElementById('task').value = 'saveAction';
                    document.getElementById('frmInfits').submit();
                }
            }
        });
    }
}

function validateFields_infzoo() {
    if (document.frmInfzoo.nu_dni.value === "")
    {
        alert('Por favor ingrese el Responsable');
        document.getElementById('encuestador').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmInfzoo.cod_2000.value === "")
    {
        alert('Por favor ingrese el Establecimiento');
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmInfzoo.nu_ano.value === "211")
    {
        alert('Por favor ingrese Año');
        document.getElementById('nu_ano').style.border = 'solid 0.5px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    if (document.frmInfzoo.nu_mes.value === "211")
    {
        alert('Por favor ingrese Mes');
        document.getElementById('nu_mes').style.border = 'solid 0.5px red';
        document.getElementById('nu_ano').style.border = 'solid 0px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }
    validainfzoorepetido_save();

}
function verifyDelete_infzoo($id_zoo) {

    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {
        alert("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=infzoo&task=removeInfzoo&infzooId=' + $id_zoo;
    }
    else
        alert("No eliminó el registro")

}
function validainfzoorepetido() {
    var id = document.frmInfzoo.id_zoo.value;
//    alert(id);
    if (id === "0") {
        var cod_2000 = document.frmInfzoo.cod_2000.value;
        var nu_mes = document.frmInfzoo.nu_mes.value;
        var nu_ano = document.frmInfzoo.nu_ano.value;
        $.ajax({
            url: 'index.php?option=com_nutritions&controller=infzoo&task=indicadorduplicado',
            type: "POST",
            data: "cod_2000=" + cod_2000 + "&nu_mes=" + nu_mes + "&nu_ano=" + nu_ano,
            success: function (datos) {
                var el = document.getElementById('informe');
                var as = el.getElementsByTagName('select');
                if (datos === "invalid") {

                    alert('Establecimiento con Informe repetido');

                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0.5px red';
                    }

                } else {

                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0px ';
                    }

                }
            }
        });
    }
    else {
    }
}
function validainfzoorepetido_save() {
    var id = document.frmInfzoo.id_zoo.value;
//    alert(id);
    if (id > 0) {
        document.getElementById('task').value = 'saveAction';
        document.getElementById('frmInfzoo').submit();
    }
    else
    {
        var cod_2000 = document.frmInfzoo.cod_2000.value;
        var nu_mes = document.frmInfzoo.nu_mes.value;
        var nu_ano = document.frmInfzoo.nu_ano.value;
        $.ajax({
            url: 'index.php?option=com_nutritions&controller=infzoo&task=indicadorduplicado',
            type: "POST",
            data: "cod_2000=" + cod_2000 + "&nu_mes=" + nu_mes + "&nu_ano=" + nu_ano,
            success: function (datos) {
                if (datos === "invalid") {
                    alert('Establecimiento con Informe repetido');
                    var el = document.getElementById('informe');
                    var as = el.getElementsByTagName('select');
                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0.5px red';
                    }
                } else {
                    document.getElementById('task').value = 'saveAction';
                    document.getElementById('frmInfzoo').submit();
                }
            }
        });
    }
}

// ----- METAXENICAS 
function validateFields_infmeta() {
    if (document.frmInfmeta.nu_dni.value === "")
    {
        alert('Por favor ingrese el Responsable');
        document.getElementById('encuestador').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmInfmeta.cod_2000.value === "")
    {
        alert('Por favor ingrese el Establecimiento');
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0.5px red';
        return false;
    }

    if (document.frmInfmeta.nu_ano.value === "211")
    {
        alert('Por favor ingrese Año');
        document.getElementById('nu_ano').style.border = 'solid 0.5px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }

    if (document.frmInfmeta.nu_mes.value === "211")
    {
        alert('Por favor ingrese Mes');
        document.getElementById('nu_mes').style.border = 'solid 0.5px red';
        document.getElementById('nu_ano').style.border = 'solid 0px red';
        document.getElementById('encuestador').style.border = 'solid 0px red';
        document.getElementById('establec').style.border = 'solid 0px red';
        return false;
    }
    validainfmetarepetido_save();

}
function verifyDelete_infmeta($id_meta) {

    var answer = confirm("Deseas ELIMINAR el registro?")
    if (answer) {
        alert("Registro Eliminado");
        window.location.href = 'index.php?option=com_nutritions&controller=infmeta&task=removeInfmeta&infmetaId=' + $id_meta;
    }
    else
        alert("No eliminó el registro")

}
function validainfmetarepetido() {
    var id = document.frmInfmeta.id_meta.value;
//    alert(id);
    if (id === "0") {
        var cod_2000 = document.frmInfmeta.cod_2000.value;
        var nu_mes = document.frmInfmeta.nu_mes.value;
        var nu_ano = document.frmInfmeta.nu_ano.value;
        $.ajax({
            url: 'index.php?option=com_nutritions&controller=infmeta&task=indicadorduplicado',
            type: "POST",
            data: "cod_2000=" + cod_2000 + "&nu_mes=" + nu_mes + "&nu_ano=" + nu_ano,
            success: function (datos) {
                var el = document.getElementById('informe');
                var as = el.getElementsByTagName('select');
                if (datos === "invalid") {

                    alert('Establecimiento con Informe repetido');

                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0.5px red';
                    }

                } else {

                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0px ';
                    }

                }
            }
        });
    }
    else {
    }
}
function validainfmetarepetido_save() {
    var id = document.frmInfmeta.id_meta.value;
//    alert(id);
    if (id > 0) {
        document.getElementById('task').value = 'saveAction';
        document.getElementById('frmInfmeta').submit();
    }
    else
    {
        var cod_2000 = document.frmInfmeta.cod_2000.value;
        var nu_mes = document.frmInfmeta.nu_mes.value;
        var nu_ano = document.frmInfmeta.nu_ano.value;
        $.ajax({
            url: 'index.php?option=com_nutritions&controller=infmeta&task=indicadorduplicado',
            type: "POST",
            data: "cod_2000=" + cod_2000 + "&nu_mes=" + nu_mes + "&nu_ano=" + nu_ano,
            success: function (datos) {
                if (datos === "invalid") {
                    alert('Establecimiento con Informe repetido');
                    var el = document.getElementById('informe');
                    var as = el.getElementsByTagName('select');
                    for (var i = 0; i < as.length; i++) {
                        as[i].style.border = 'solid 0.5px red';
                    }
                } else {
                    document.getElementById('task').value = 'saveAction';
                    document.getElementById('frmInfmeta').submit();
                }
            }
        });
    }
}
// ---- FIN METAXENICAS
