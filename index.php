<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 12 - Panel de Control</title>
    <!-- Mantenemos la hoja de estilos externa -->
    <link rel="stylesheet" href="interface.css">
</head>
<body>

    <!-- Nuevo contenedor principal solicitado -->
    <div id="controls">

        <!-- Bloque de Temperatura original -->
        <div id="temp">
            <span id="temp-int">00</span>
            <span>ºC.00</span>
        </div>

        <!-- Bloque de Humedad -->
        <div id="humed">
            <span id="humed-int">00</span>
            <span>%.00</span>
        </div>

        <!-- Bloque de Viento -->
        <div id="viento">
            <span id="viento-int">00</span>
            <span>km/h.00</span>
        </div>

        <!-- Bloque de Incendio -->
        <div id="incendio">
            <span id="incendio-int">00</span>
            <span>%.00</span>
        </div>

    </div>

    <!-- El script al final asegura que se cargue la estructura HTML primero -->
    <script src="refresh.js"></script>
</body>
</html>