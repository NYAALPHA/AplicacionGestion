<?php
    include("../Config/config.php");

    $sql = "SELECT * FROM tarea";

    $conMostrar = mysqli_query($conexion,$sql);
?>