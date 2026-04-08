
<?php

function inicio() {
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .welcome-container, .section {
            text-align: center;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        h1, h2 {
            color: #4CAF50;
        }

        img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;
        }
    </style>

    <div class="welcome-container">
        <table align="center">
            <tr>
                <td>
                    <img src="imagenes/logo.png" alt="logo">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <h1>BIENVENIDOS</h1>
                </td>
            </tr>
        </table>
        <p>Estamos felices de tenerte aquí. Explora nuestras secciones para más información.</p>
    </div>
    <?php
}

function registro() {
    ?>
    <div class="section">
        <h2>Registro de Docentes</h2>
        <img src="imagenes/personal.png" alt="Nuevo Docente">
        <p>En esta sección podrás registrar nuevos docentes en el sistema. Asegúrate de ingresar todos los datos requeridos.</p>
    </div>
    <?php
}

function listado() {
    ?>
    <div class="section">
        <h2>Listado de Docentes</h2>
        <img src="imagenes/docentes.png" alt="Listado de Docentes">
        <p>Aquí podrás ver el listado completo de docentes registrados en nuestra institución:</p>
        <ul>
            <li>ISAI ROGER QUISPE QUISPE</li>
            <li>JONATHAN FLOR VELASQUEZ</li>
            <li>NOELIA QUISPE GOMEZ</li>
            <li>PAUL CORDOVA YAÑEZ</li>
            <li>JOSE CACERES LINARES</li>
            <li>JOSE CARLOS LUQUE ROMERO</li>
            <li>VICTOR ARPASI FLORES</li>
            <li>FREDDY CRUZ FLORES</li>
            <li>HUGO QUISPE MAMANI</li>
            <li>ROBERT PARILLO HUAMAN</li>
            <li>ISRAEL MARIO FIGUEROA PAZ</li>
            <li>EDWIN ESPINOZA ARELLANO</li>
            <li>DEIBI ABALOS QUISPITUPAC</li>
            <li>ESTEFANY GOMEZ ARENAS</li>
            <li>WILLIAM MORAN QUISPE</li>
            <li>DIEGO JOAQUIN CAPPA TICONA</li>
            <li>MARINA IRE CHOQUE MAQUERA</li>
            <li>KATTY ROJAS LEON</li>
            <li>ISMAEL CHATA GUILLEN</li>
            <li>ALEX ANGULO FLORES</li>
        </ul>
        <p>Además, contamos con un administrativo:</p>
        <ul>
            <li>DIONISIA CHOQUE HUILLCA</li>
        </ul>
    </div>
    <?php
}



function reportes() {
    ?>
    <div class="section">
        <h2>Reportes</h2>
        <img src="imagenes/ggf.png" alt="Reportes">
        <p>En esta sección, podrás generar y visualizar diferentes tipos de reportes relacionados con la gestión de docentes y estudiantes.</p>
    </div>
    <?php
}

function ayuda() {
    ?>
    <div class="section">
        <h2>Ayuda</h2>
        <img src="imagenes/ayuda.png" alt="Ayuda">
        <p>Si tienes alguna pregunta o necesitas asistencia, aquí encontrarás recursos útiles y opciones de contacto para obtener ayuda.</p>
        <p>Te recomendamos revisar nuestra sección de preguntas frecuentes (FAQ) donde podrás encontrar respuestas a las dudas más comunes. Además, puedes contactar a nuestro equipo de soporte a través del formulario de contacto en esta página.</p>
    </div>
    <?php
}

?>

