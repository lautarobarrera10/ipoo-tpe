<?php

/**
 * La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
 * Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros). Utilice clases y arreglos para almacenar la información correspondiente a los pasajeros. Cada pasajero guarda su “nombre”, “apellido” y “numero de documento”.
 * Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.
 * Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.
 * Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.
 */

include "Viaje.php";
include "Pasajero.php";
include "ResponsableV.php";

$lautaro = new Pasajero("Lautaro", "Barrera", 12345678, 3325568489);
$sandra = new Pasajero("Sandra", "Peréz", 55345678, 3311568489);
$camila = new Pasajero("Camila", "Guerra", 12325678, 1325568489);

$carla = new ResponsableV(1, 123456, "Carla", "Fernandez");

$mardelplata = new Viaje(123, "Mar del Plata", 10, [$lautaro, $camila, $sandra], $carla);

do {
    echo "\n📑 MENÚ PRINCIPAL \n\n" .
    "1) Ver viaje \n" .
    "2) Editar viaje \n" .
    "3) Ver responsable del viaje \n" .
    "4) Editar responsable del viaje \n" .
    "5) Ver pasajeros \n" .
    "6) Buscar pasajero \n" .
    "7) Agregar pasajero \n";
    "8) Editar pasajero \n";
    $opcion = trim(fgets(STDIN));

    switch ($opcion){
        case 1:
            echo $mardelplata->obtenerDatosDelViaje();
            break;
        case 2:
            echo "\n📑 EDITAR VIAJE \n\n" .
            "1) Editar código \n" .
            "2) Editar destino \n" .
            "3) Editar máximo de pasajeros \n";
            $editarViaje = trim(fgets(STDIN));
            switch ($editarViaje){
                case 1:
                    echo "\n📑 EDITAR CÓDIGO DE VIAJE \n\n" .
                    "Ingrese el nuevo código: \n";
                    $nuevoCodigo = intval(trim(fgets(STDIN))); // intval devuelve 0 si se ingresa un string
                    if ($nuevoCodigo != 0){
                        $mardelplata->setCodigo($nuevoCodigo);
                        echo "\n✅ Código cambiado con éxito\n";
                    } else {
                        echo "\n❌ El código sólo puede estar compuesto por números.\n";
                    }
                    break;
                case 2:
                    echo "\n📑 EDITAR DESTINO DE VIAJE \n\n" .
                    "Ingrese el nuevo destino: \n";
                    $nuevoDestinto = trim(fgets(STDIN));
                    $mardelplata->setDestino($nuevoDestinto);
                    echo "\n✅ Destino cambiado con éxito\n";
                    break;
                case 3:
                    echo "\n📑 EDITAR MÁXIMO DE PASAJEROS\n\n" .
                    "Ingrese el nuevo máximo: \n";
                    $nuevoMaximo = intval(trim(fgets(STDIN))); // intval devuelve 0 si se ingresa un string
                    if ($nuevoMaximo != 0){
                        if ($nuevoMaximo >= count($mardelplata->getColPasajeros())){
                            $mardelplata->setMaximoPasajeros($nuevoMaximo);
                            echo "\n✅ Máximo de pasajeros cambiado con éxito\n";
                        } else {
                            echo "\n❌ El nuevo máximo no puede ser menor que los pasajeros actuales\n";
                        }
                    } else {
                        echo "\n❌ Ingresa un número distinto de 0\n";
                    }
                    break;
                default:
                    echo "\n❌ Opción incorrecta\n";
            }
            break;
        case 3:
            echo $mardelplata->getObjResponsable();
            break;
        case 4:
            echo "\n📑 EDITAR RESPONSABLE DE VIAJE \n\n" .
            "1) Editar un dato del responsable actual \n" .
            "2) Ingresar un nuevo responsable \n";
            $editarResponsable = trim(fgets(STDIN));
            switch($editarResponsable){
                case 1:
                    echo "\n📑 EDITAR DATOS RESPONSABLE DE VIAJE \n\n" .
                    "1) Editar número de empleado \n" .
                    "2) Editar número de licencia \n" .
                    "3) Editar nombre \n" .
                    "4) Editar apellido \n";
                    $editarDato = trim(fgets(STDIN));
                    switch($editarDato){
                        case 1:
                            echo "\n📑 EDITAR DATOS RESPONSABLE DE VIAJE \n\n" .
                            "Ingrese el nuevo número de empleado \n";
                            $nuevoNumeroEmpleado = intval(trim(fgets(STDIN))); // intval devuelve 0 si se ingresa un string
                            if ($nuevoNumeroEmpleado != 0){
                                $mardelplata->getObjResponsable()->setNumEmpleado($nuevoNumeroEmpleado);
                                echo "\n✅ Número de empleado cambiado con éxito\n";
                            } else {
                                echo "\n❌ Ingresa un número distinto de 0\n";
                            }
                            break;
                        case 2:
                            echo "\n📑 EDITAR DATOS RESPONSABLE DE VIAJE \n\n" .
                            "Ingrese el nuevo número de licencia \n";
                            $nuevoNumeroLicencia = intval(trim(fgets(STDIN))); // intval devuelve 0 si se ingresa un string
                            if ($nuevoNumeroLicencia != 0){
                                $mardelplata->getObjResponsable()->setNumLicencia($nuevoNumeroLicencia);
                                echo "\n✅ Número de licencia cambiado con éxito\n";
                            } else {
                                echo "\n❌ Ingresa un número distinto de 0\n";
                            }
                            break;
                        case 3:
                            echo "\n📑 EDITAR DATOS RESPONSABLE DE VIAJE \n\n" .
                            "Ingrese el nuevo nombre: \n";
                            $nuevoNombre = trim(fgets(STDIN));
                            $mardelplata->getObjResponsable()->setNombre($nuevoNombre);
                            echo "\n✅ Nombre cambiado con éxito\n";
                            break;
                        case 4:
                            echo "\n📑 EDITAR DATOS RESPONSABLE DE VIAJE \n\n" .
                            "Ingrese el nuevo apellido: \n";
                            $nuevoApellido = trim(fgets(STDIN));
                            $mardelplata->getObjResponsable()->setApellido($nuevoApellido);
                            echo "\n✅ Apellido cambiado con éxito\n";
                            break;
                        default:
                            echo "\n❌ Opción incorrecta\n";
                    }
                    break;
                case 2:
                    echo "\n📑 CREAR NUEVO RESPONSABLE DE VIAJE \n\n" .
                    "Ingrese el número de empleado: \n";
                    $numEmpleado = intval(trim(fgets(STDIN)));
                    if($numEmpleado != 0){
                        echo "\n📑 CREAR NUEVO RESPONSABLE DE VIAJE \n\n" .
                        "Ingrese el número de licencia: \n";
                        $numLicencia = intval(trim(fgets(STDIN)));
                        if($numLicencia != 0){
                            echo "\n📑 CREAR NUEVO RESPONSABLE DE VIAJE \n\n" .
                            "Ingrese el nombre: \n";
                            $nombre = trim(fgets(STDIN));
                            echo "\n📑 CREAR NUEVO RESPONSABLE DE VIAJE \n\n" .
                            "Ingrese el apellido: \n";
                            $apellido = trim(fgets(STDIN));
                            $nuevoResponsable = new ResponsableV($numEmpleado, $numLicencia, $nombre, $apellido);
                            $mardelplata->setObjResponsable($nuevoResponsable);
                        } else {
                            echo "\n❌ Ingresa un número distinto de 0\n";
                        }
                    } else {
                        echo "\n❌ Ingresa un número distinto de 0\n";
                    }
                    break;
                default:
                    echo "\n❌ Opción incorrecta\n";
            }
    }

} while ($opcion != 0);