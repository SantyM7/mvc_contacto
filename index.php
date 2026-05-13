<?php
require_once "controllers/ContactoController.php";

$controller = new ContactoController();

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->procesarFormulario();
} else {
    $controller->mostrarFormulario();
}
?>