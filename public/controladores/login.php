<?php
session_start();
include '../../config/conexionBD.php';
$usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
$contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

$sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_contrasenia ='$contrasena'";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()) {
    $aux= $row["usu_rol"];
}




if ($result->num_rows > 0) {
    $_SESSION['isLogged'] = TRUE;

    if( $aux == 'admin'){
        echo " $aux";

      header("Location: ../../admin/vista/usuario/index.php");
    }
    if($aux == 'usuario'){
       /* header("Location: ../../admin/vista/usuario/index.php");*/
    }
    
} else {
    header("Location: ../vista/login.html");
}

$conn->close();
?>