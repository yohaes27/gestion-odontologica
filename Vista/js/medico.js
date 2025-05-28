
$(document).ready(function(){
    $("#frmMedico").dialog({
    autoOpen: false,
    height: 310,
    width: 400,
    modal: true,
    buttons: {
    "Insertar":insertarMedico,
    "Cancelar":cancelar
    }
    });
});


// medicos
function listarMedicos(){
    url = "index.php?accion=listarMedicos&listamedico=" + $("#listamedico").val() ;
    $("#medico").load(url);
}

// eliminar medico
function eliminarMedico(numero){
    if(confirm("Esta seguro que quiere eliminar al medico con identificacion" + numero)){
    $.get("index.php",{accion:'eliminarMedico',numero:numero},function(mensaje)
    {
    alert(mensaje);
    });
    }
    $("#listamedico").trigger("click");
}

// buscar medico
function consultarMedico(){
    var url = "index.php?accion=consultarMedico&documento=" + $("#consulMedico").val(); 
    $("#mostrarMedico").load(url,function(){
    });
}


// para ingresar pacienttes /// ingresar medicos
function agrgarMedico(){
    documento = "" + $("#consulMedico").val();
    $("#medDocumento").attr("value",documento);
    $("#frmMedico").dialog('open');
}

// agregar medico nuevo mediante el formulario
function mostrarFormularioMedico(){
    documento = "" + $("#consulMedico").val();
    $("#MedDocumento").attr("value",documento);
    $("#frmMedico").dialog('open');
}

// nubo paciente //// medico
function insertarMedico(){
    queryString = $("#agregarMedico").serialize();
    url = "index.php?accion=ingresarMedico&" + queryString ;
    $("#mostrarMedico").load(url);
    $("#frmMedico").dialog('close'); 
}