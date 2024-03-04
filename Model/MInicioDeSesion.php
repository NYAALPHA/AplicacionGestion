<?php
    include("../Config/config.php");

    if(isset($_POST['iniciar'])){

        $correo = $_POST['corr'];
        $psword = $_POST['pswrd'];

        $sql = "SELECT * FROM usuario WHERE Correo='$correo' AND pssword='$psword'";

        $conInicio = mysqli_query($conexion,$sql);

        if(mysqli_num_rows($conInicio)>0){
            $datos = mysqli_fetch_assoc($conInicio);
            if($datos['Tipo'] == "Administrador"){
                header("Location: ../View/VInicioAdministrador.php?ide=".$datos['IdUsuario']);
            }elseif($datos['Tipo'] == "Usuario"){
                header("Location: ../View/VInicioUsuario.php?ide=".$datos['IdUsuario']);
            }
        }else{
            ?>
            <html>
                <script>
                    alert("No se encontro al usuario");
                </script>
            </html>
            <?php
            header("Location: ../View/VIniciodeSesion.php");
        }

    }else if(isset($_POST['cancel'])){
        header("Location: ../index.html");
    }


?>