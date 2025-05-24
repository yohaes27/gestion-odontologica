<?php
class Controlador {
    public function verPagina($ruta){
        require_once $ruta;
    } 
    public function agregarCita($doc,$med,$fec,$hor,$con){
        $cita = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada",      "Ninguna");
        $gestorCita = new GestorCita();
        $id = $gestorCita->agregarCita($cita);
        $result = $gestorCita->consultarCitaPorId($id);
        require_once 'Vista/html/confirmarCita.php';
    }
    public function cancelarCitas($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/cancelarCitas.php';
    }
    public function consultarCitas($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/consultarCitas.php';
    }

    // consulta o busca el paciente
    public function consultarPaciente($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarPaciente($doc);
        require_once 'Vista/html/consultarPaciente.php';
    }
        
    public function agregarPaciente($doc,$nom,$ape,$fec,$sex){
        $paciente = new Paciente($doc, $nom, $ape, $fec, $sex);
        $gestorCita = new GestorCita();
        $registros = $gestorCita->agregarPaciente($paciente);
        if($registros > 0){
            echo "Se insertó el paciente con exito";
        } else {
            echo "Error al grabar el paciente";
        }
    }
    

    public function cargarAsignar(){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarMedicos();
        $result2 = $gestorCita->consultarConsultorios();
        require_once 'Vista/html/asignar.php';
    }


    // public function cargarAsignar(){
    //     $gestorCita = new GestorCita();
    //     $result = $gestorCita->consultarMedicos();
    //     require_once 'Vista/html/asignar.php';
    // }

    public function consultarHorasDisponibles($medico,$fecha){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarHorasDisponibles($medico, $fecha);
        require_once 'Vista/html/consultarHoras.php';
    }

    public function verCita($cita){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitaPorId($cita);
        require_once 'Vista/html/confirmarCita.php';
    }

    // cansela la cita
    public function confirmarCancelarCita($cita){
        $gestorCita = new GestorCita();
        $registros = $gestorCita->cancelarCita($cita);
        if($registros > 0){
        echo "La cita se ha cancelado con éxito";
        } else {
        echo "Hubo un error al cancelar la cita";
        }
    }
    public function listarMed(){
        $gestorCita = new GestorCita();
        $result = $gestorCita->listarMedicos();
        require_once 'Vista/html/listarMedicos.php';
    }
    // elimana elmedico
    public function eliminarMedico($cita){
        $gestorCita = new GestorCita();
        $registros = $gestorCita->medicoEliminar($cita);
        if($registros > 0){
        echo "El medico ha cido Eliminado con éxito";
        } else {
        echo "Hubo un error Eliminar al Medico";
        }

    }

    // busca paciente // medico
    public function consultarMedico($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultaMedica($doc);
        require_once 'Vista/html/medicosCosulta';
    }
    

}


?>