<?php
require_once "models/Contacto.php";

class ContactoController {

    public function mostrarFormulario() {
        require_once "views/formulario.php";
    }

    public function procesarFormulario() {
        $nombre  = trim($_POST["nombre"]);
        $correo  = trim($_POST["correo"]);
        $telefono = trim($_POST["telefono"]);
        $mensaje = trim($_POST["mensaje"]);

        // Tarea 2: Validar que el mensaje tenga mínimo 10 caracteres
        if (strlen($mensaje) < 10) {
            $error = "El mensaje debe tener al menos 10 caracteres.";
            require_once "views/formulario.php";
            return;
        }

        // Enviar datos al modelo
        $resultado = Contacto::guardar($nombre, $correo, $telefono, $mensaje);

        require_once "views/resultado.php";
    }
}
?>