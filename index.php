
        <?php

        require_once 'Controlador/Controlador.php';
        require_once 'Modelo/GestorCita.php';
        require_once 'Modelo/Cita.php';
        require_once 'Modelo/Paciente.php';
        require_once 'Modelo/Conexion.php';

        $controlador = new Controlador();

            if( isset($_GET["accion"])){

                if($_GET["accion"] == "asignar"){
                    $controlador->cargarAsignar();
                }

            elseif($_GET["accion"] == "consultar"){
                $controlador->verPagina('Vista/html/consultar.php');
            }

                elseif($_GET["accion"] == "cancelar"){
                    $controlador->verPagina('Vista/html/cancelar.php');
                }

                // guarda la cita
                // elseif($_GET["accion"] == "guardarCita"){ $controlador->agregarCita( 
                //     $_POST["asignarDocumento"], $_POST["medico"],
                //     $_POST["fecha"],
                //     $_POST["hora"],
                //     $_POST["consultorio"]);
                // }


                // ]}}]

                elseif($_GET["accion"] == "consultarCita"){
                    $controlador->consultarCitas($_GET["consultarDocumento"]);
                }

                // cansela la cita
                elseif($_GET["accion"] == "cancelarCita"){
                    $controlador->cancelarCitas($_GET["cancelarDocumento"]);
                }

                // cosultar pasiente
                elseif($_GET["accion"] == "consultarPaciente"){
                    $controlador->consultarPaciente($_GET["documento"]);
                }

                // ingresa un paciente
                elseif($_GET["accion"] == "ingresarPaciente"){
                    $controlador->agregarPaciente(
                    $_GET["PacDocumento"],
                    $_GET["PacNombres"],
                    $_GET["PacApellidos"],
                    $_GET["PacNacimiento"],
                    $_GET["PacSexo"] 
                    );
                }
    

                elseif($_GET["accion"] == "consultarHora"){
                    $controlador->consultarHorasDisponibles($_GET["medico"], $_GET["fecha"]);
                }

                elseif($_GET["accion"] == "verCita"){
                    $controlador->verCita($_GET["numero"]);
                }

                elseif($_GET["accion"] == "confirmarCancelar"){
                    $controlador->confirmarCancelarCita($_GET["numero"]);
                }

                // medicos

                elseif($_GET['accion'] == "medico"){
                      $controlador->verPagina('Vista/html/medicos.php');

                }


                elseif($_GET['accion'] == 'listarMedicos' ){
                    $controlador->listarMed();

                }
                elseif($_GET["accion"] == "eliminarMedico"){
                    $controlador->eliminarMedico($_GET["numero"]);
                } 

                
                // cosultar pasiente /// medico
                elseif($_GET["accion"] == "consultarMedico"){
                    $controlador->consultarMedico($_GET["documento"]);
                }

                // agregar medico
                elseif($_GET["accion"] == "ingresarPaciente"){
                    $controlador->agregarPaciente(
                    $_GET["PacDocumento"],
                    $_GET["PacNombres"],
                    $_GET["PacApellidos"],
                    $_GET["PacNacimiento"],
                    $_GET["PacSexo"] 
                    );
                }
    

            }else {
                    $controlador->verPagina('Vista/html/inicio.php');
            }

        ?>