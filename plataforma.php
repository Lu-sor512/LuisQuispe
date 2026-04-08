<?php
if (isset($_GET['Op'])) {
    $opcion = $_GET['Op'];
    $Id=$_GET[ 'Id'];
} else {
    $opcion = 1; // Opción por defecto
}

include "vistas.php";
?>  

<table width="100%" border="1">
    <tr>
        <td align="right" colspan="2">
        <h1>Bienvenido: <?Admin echo$id; ?><img align="left" src="imagenes/benjamin.png" width="70px"></h1>
        </td>
    </tr>
    <tr>
        <td>
            <table width="100%" border="0">
                <tr>
                    <td width="200"><a href="plataforma.php?Op=1">Menu</a></td>
                    <td width="200"><a href="plataforma.php?Op=2">Nuevo Docente</a></td>
                    <td width="200"><a href="plataforma.php?Op=3">Reportes</a></td>
                    <td width="200"><a href="plataforma.php?Op=4">Ayuda</a></td>
                </tr>
            </table>
        </td>
        <td width="70%">
            <?php
            switch ($opcion) {
                case '1':
                    inicio();
                    break;
                case '2':
                    registro();
                    break;
                case '3':
                    listado();
                    break;  
                case '4': // Caso para Ayuda
                    ayuda();
                    break;
                default:
                    inicio(); // Opcional: manejar opción no válida
            }
            ?>
        </td>
    </tr>
</table>

<?php
?>
