<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
/* Tarea 3: Nuevo diseño del formulario */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(135deg, #1a102b, #24123a, #2d1b4e);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.card {
    background: #ffffff;
    border-radius: 16px;
    padding: 40px;
    width: 100%;
    max-width: 420px;
    box-shadow: 0 20px 60px rgba(60, 20, 90, 0.35);
}

.card h2 {
    text-align: center;
    color: #5e2ca5;
    font-size: 1.8rem;
    margin-bottom: 6px;
}

.card .subtitulo {
    text-align: center;
    color: #8a7f9a;
    font-size: 0.9rem;
    margin-bottom: 28px;
}

.campo {
    margin-bottom: 18px;
}

.campo label {
    display: block;
    font-size: 0.85rem;
    font-weight: 600;
    color: #3a2a4d;
    margin-bottom: 6px;
}

.campo input,
.campo textarea {
    width: 100%;
    padding: 12px 14px;
    border: 2px solid #e3d9f3;
    border-radius: 8px;
    font-size: 0.95rem;
    color: #333;
    transition: border-color 0.3s;
    outline: none;
    font-family: inherit;
}

.campo input:focus,
.campo textarea:focus {
    border-color: #9b5de5;
}

.campo textarea {
    resize: vertical;
    min-height: 110px;
}

.contador {
    font-size: 0.78rem;
    color: #9a90a8;
    text-align: right;
    margin-top: 4px;
}

.contador.ok  { color: #7c3aed; }
.contador.mal { color: #c084fc; }

.error-msg {
    background: #f3e8ff;
    color: #5b21b6;
    border-left: 4px solid #9b5de5;
    padding: 10px 14px;
    border-radius: 6px;
    font-size: 0.88rem;
    margin-bottom: 18px;
}

.btn-enviar {
    width: 100%;
    padding: 13px;
    background: linear-gradient(135deg, #6d28d9, #9b5de5);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: opacity 0.3s;
}

.btn-enviar:hover {
    opacity: 0.88;
}
    </style>
</head>
<body>
<div class="card">
    <h2>Contáctanos</h2>
    <p class="subtitulo">Rellena el formulario y te respondemos pronto</p>

    <?php if (!empty($error)): ?>
        <div class="error-msg">⚠️ <?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" action="index.php">

        <!-- Tarea 1: Campo teléfono -->
        <div class="campo">
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre"
                   value="<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>"
                   required>
        </div>

        <div class="campo">
            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo"
                   placeholder="Ej. ana@correo.com"
                   value="<?php echo htmlspecialchars($_POST['correo'] ?? ''); ?>"
                   required>
        </div>

        <div class="campo">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono"
                   value="<?php echo htmlspecialchars($_POST['telefono'] ?? ''); ?>"
                   pattern="[0-9]{10}"
                   title="Ingresa 10 dígitos"
                   required>
        </div>

        <div class="campo">
            <label for="mensaje">Mensaje <span style="color:#aaa;font-weight:400">(mín. 10 caracteres)</span></label>
            <textarea id="mensaje" name="mensaje"
                      placeholder="Escribe tu mensaje aquí..."
                      required><?php echo htmlspecialchars($_POST['mensaje'] ?? ''); ?></textarea>
            <div class="contador mal" id="contador">0 / 10 caracteres mínimos</div>
        </div>

        <button type="submit" class="btn-enviar">Enviar mensaje</button>
    </form>
</div>

<script>
    // Contador en tiempo real para validación del mensaje
    const textarea  = document.getElementById('mensaje');
    const contador  = document.getElementById('contador');

    function actualizarContador() {
        const len = textarea.value.length;
        if (len >= 10) {
            contador.textContent = len + ' caracteres ✓';
            contador.className   = 'contador ok';
        } else {
            contador.textContent = len + ' / 10 caracteres mínimos';
            contador.className   = 'contador mal';
        }
    }

    textarea.addEventListener('input', actualizarContador);
    actualizarContador(); // ejecutar al cargar por si hay valor previo
</script>
</body>
</html>