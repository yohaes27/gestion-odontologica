$(document).ready(function(){
    $("#frmPaciente").dialog({
    autoOpen: false,
    height: 310,
    width: 400,
    modal: true,
    buttons: {
    "Insertar":insertarPaciente,
    "Cancelar":cancelar
    }
    });
});

// consultar paciente
function consultarPaciente(){
    var url = "index.php?accion=consultarPaciente&documento=" + $("#asignarDocumento").val(); 
    $("#paciente").load(url,function(){
    });
}

// para ingresar nuevo usuario
function mostrarFormulario(){
    documento = "" + $("#asignarDocumento").val();
    $("#PacDocumento").attr("value",documento);
    $("#frmPaciente").dialog('open');
}

// nubo paciente
function insertarPaciente(){
    queryString = $("#agregarPaciente").serialize();
    url = "index.php?accion=ingresarPaciente&" + queryString ;
    $("#paciente").load(url);
    $("#frmPaciente").dialog('close'); 
}

function cancelar(){
    $(this).dialog('close'); 
}

function cargarHoras(){
    if( ($("#medico").val() == -1 ) || ($("#fecha").val() == "")){
        $("#hora").html("<option value='-1' selected='selected'>--Selecione la hora </option>")
    } else {
        queryString = "medico="+$("#medico").val()+"&fecha="+$("#fecha").val();
        url = "index.php?accion=consultarHora&" + queryString ;
        $("#hora").load(url);
    
    }
}

function seleccionarHora(){
        if($("#medico").val() == -1 ){
            alert("Debe seleccionar un médico");
        } else if ($("#fecha").val() == ""){
            alert("Debe seleccionar una fecha");
        
        }
}

function consultarCita(){
    url = "index.php?accion=consultarCita&consultarDocumento=" + $("#consultarDocumento").val() ;
    $("#paciente2").load(url);
}

function cancelarCita(){
    url = "index.php?accion=cancelarCita&cancelarDocumento=" + $("#cancelarDocumento").val() ;
    $("#paciente3").load(url); 
}
    
function confirmarCancelar(numero){
    if(confirm("Esta seguro de cancelar la cita " + numero)){
    $.get("index.php",{accion:'confirmarCancelar',numero:numero},function(mensaje)
    {
    alert(mensaje);
    });
    }
    $("#cancelarConsultar").trigger("click");
}
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
    $("#PacDocumento").attr("value",documento);
    $("#frmPaciente").dialog('open');
}

// agregar medico nuevo mediante el formulario
function mostrarFormularioMedico(){
    documento = "" + $("#consulMedico").val();
    $("#MedDocumento").attr("value" , documento);
    $("#frmPaciente").dialog('open');
}

// nubo paciente
// function insertarPaciente(){
//     queryString = $("#agregarPaciente").serialize();
//     url = "index.php?accion=ingresarPaciente&" + queryString ;
//     $("#paciente").load(url);
//     $("#frmPaciente").dialog('close'); 
// }