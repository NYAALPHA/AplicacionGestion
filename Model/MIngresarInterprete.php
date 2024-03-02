<?php

    include("../Config/config.php");

    $nombre = $_POST['interp'];
    $biografia = $_POST['bio'];


    $foto = file_get_contents($_FILES["fto"]["tmp_name"]);
    $foto = mysqli_real_escape_string($conexion,$foto);

    $sql = "INSERT INTO interprete(Interprete,Biografia,Foto) VALUES ('$nombre','$biografia','$foto')";

    $execution = mysqli_query($conexion,$sql);

    header("Location: ../index.html");
?>