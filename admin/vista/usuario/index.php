<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios</title>
</head>

<body>

    <table style="width:100%">
        <tr>
            <th>Correo</th>   
            <th>Contraseña</th> 
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Eliminado</th>
            
           
        </tr>
        <?php
        include '../../../config/conexionBD.php';
        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo "Usuarios";
            while ($row = $result->fetch_assoc()) {
                
                echo "<tr>";
                echo " <td>" . $row["usu_correo"] . "</td>";
                echo " <td>" . $row["usu_contrasenia"] . "</td>";
                echo " <td>" . $row["usu_cedula"] . "</td>";
                echo " <td>" . $row['usu_nombre'] . "</td>";
                echo " <td>" . $row['usu_apellido'] . "</td>";
                echo " <td>" . $row['usu_direccion'] . "</td>";
                echo " <td>" . $row['usu_telefono'] . "</td>";
                echo " <td>" . $row["usu_eliminado"] . "</td>";
                echo " <td> <a href='eliminar.php?codigo=" . $row['usu_id'] . "'>Eliminar</a> </td>";
                echo " <td> <a href='modificar.php?codigo=" . $row['usu_id'] . "'>Modificar</a> </td>";
                echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_id'] . "'>Cambiarcontraseña</a> </td>";
             
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
            echo "</tr>";
        }



        $conn->close();
        ?>
    </table>

    <table style="width:100%">
        <tr>
            <th>Fecha</th>   
            <th>Hora</th> 
            <th>Lugar</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Motivo</th>
            <th>Observaciones</th>
           
            
           
        </tr>
        <?php
        include '../../../config/conexionBD.php';
      

        /************************************************************************************************ */

        $sql1 = "SELECT * FROM reunion";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {

            echo "Reuniones";
            while ($row1 = $result1->fetch_assoc()) {
                
                echo "<tr>";
                echo " <td>" . $row1["reu_fecha"] . "</td>";
                echo " <td>" . $row1["reu_hora"] . "</td>";
                echo " <td>" . $row1["reu_lugar"] . "</td>";
                echo " <td>" . $row1['reu_latitud'] . "</td>";
                echo " <td>" . $row1['reu_longitud'] . "</td>";
                echo " <td>" . $row1['reu_motivo'] . "</td>";
                echo " <td>" . $row1['reu_observaciones'] . "</td>";
             
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen reuniones registradas en el sistema </td>";
            echo "</tr>";
        }
        /******************************************************************************* */



        $conn->close();
        ?>
    </table>


    
</body>

</html>