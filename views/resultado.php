<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
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
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
            text-align: center;
        }

        .icono { font-size: 3rem; margin-bottom: 10px; }

        .estado {
            font-size: 1.4rem;
            font-weight: 700;
            color: #27ae60;
            margin-bottom: 6px;
        }

        /* Tarea 5: Mostrar fecha y hora */
        .fecha {
            font-size: 0.82rem;
            color: #999;
            margin-bottom: 28px;
        }

        .datos {
            background: #f7f9fc;
            border-radius: 10px;
            padding: 20px;
            text-align: left;
            margin-bottom: 24px;
        }

        .dato {
            display: flex;
            gap: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            font-size: 0.93rem;
            color: #333;
        }

        .dato:last-child { border-bottom: none; }

        .dato strong {
            min-width: 90px;
            color: #0f3460;
        }

        .btn-volver {
            display: inline-block;
            padding: 12px 28px;
            background: linear-gradient(135deg, #0f3460, #533483);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: opacity 0.3s;
        }

        .btn-volver:hover { opacity: 0.85; }
    </style>
</head>
<body>
<div class="card">
    <div class="icono">✅</div>
    <div class="estado"><?php echo htmlspecialchars($resultado["estado"]); ?></div>

    <!-- Tarea 5: Fecha y hora del envío -->
    <div class="fecha">Enviado el <?php echo htmlspecialchars($resultado["fechaHora"]); ?></div>

    <div class="datos">
        <div class="dato">
            <strong>Nombre:</strong>
            <span><?php echo htmlspecialchars($resultado["nombre"]); ?></span>
        </div>
        <div class="dato">
            <strong>Correo:</strong>
            <span><?php echo htmlspecialchars($resultado["correo"]); ?></span>
        </div>
        <!-- Tarea 1: Mostrar teléfono en resultado -->
        <div class="dato">
            <strong>Teléfono:</strong>
            <span><?php echo htmlspecialchars($resultado["telefono"]); ?></span>
        </div>
        <div class="dato">
            <strong>Mensaje:</strong>
            <span><?php echo htmlspecialchars($resultado["mensaje"]); ?></span>
        </div>
    </div>

    <a href="index.php" class="btn-volver">← Enviar otro mensaje</a>
</div>
</body>
</html>