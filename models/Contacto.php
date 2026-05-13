<?php
class Contacto {

    public static function guardar($nombre, $correo, $telefono, $mensaje) {

        // Fecha y hora del envío
        $fechaHora = date("d/m/Y H:i:s");

        // Línea a guardar
        $linea = "[$fechaHora] Nombre: $nombre | Correo: $correo | Teléfono: $telefono | Mensaje: $mensaje" . PHP_EOL;

        // Guardar en Contacto.txt
        file_put_contents(__DIR__ . "/Contacto.txt", $linea, FILE_APPEND);

        return [
            "nombre"    => $nombre,
            "correo"    => $correo,
            "telefono"  => $telefono,
            "mensaje"   => $mensaje,
            "fechaHora" => $fechaHora,
            "estado"    => "¡Mensaje enviado correctamente!"
        ];
    }
}
?>