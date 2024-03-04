<?php
    include("../Config/config.php");

    if (isset($_POST['registr'])){

        $nombre = $_POST['nom'];
        $apellido = $_POST['ape'];
        $correo = $_POST['corr'];
        $fechaNac = $_POST['FechNac'];
        $tipoUs =  $_POST['tipo'];
        $passwrd = $_POST['pwrd'];
        $cpasswrd = $_POST['cpwrd'];
        
        $foto = file_get_contents($_FILES['fotp']['tmp_name']);
        $foto = mysqli_real_escape_string($conexion,$foto);

        if($passwrd != $cpasswrd){
            header("Location: ../index.html");
        }

        $sql = "INSERT INTO usuario(Nombre,Apellido,Correo,AnioN,Tipo,Foto,pssword) VALUES ('$nombre','$apellido','$correo','$fechaNac','$tipoUs','$foto','$passwrd')";

        $conRegistro = mysqli_query($conexion,$sql);

        header("Location: ../index.html");

    } elseif (isset($_POST['cancel'])) {
        header("Location: ../index.html");
        exit();
    }
    
?>