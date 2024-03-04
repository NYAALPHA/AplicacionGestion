<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <script src="../JS/confirmarPS.js"></script>
</head>
<body>
    <header>
        <h1>
            <strong>Registro de Usuario</strong>
        </h1>
    </header>
    <main>
        <div>
            <form action="../Model/MRegistrarse.php" method="post" onsubmit="validarFormulario()" enctype="multipart/form-data">
                <div class="Name-LastName">
                    <label for="">Nombre</label>
                    <input type="text" name="nom">
                    <label for="">Apellido</label>
                    <input type="text" name="ape">
                </div>
                <div class="Data">
                    <label for="">Correo</label>
                    <input type="email" name="corr">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" name="FechNac" id="" min="<?php echo ((int)date("Y"))-30?>-01-01" max="<?php echo ((int)date("Y"))-18?>-12-31">
                    <label for="">Tipo De usuario</label>
                    <select name="tipo" id="">
                        <option value="" hidden>Seleccione...</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuario</option>
                    </select>
                </div>
                <div class="Profile-Photo">
                    <label for="">Foto De Perfil</label>
                    <input type="file" name="fotp" id="" accept="image/*">
                </div>
                <div class="password-view">
                    <label for="">Ingrese su contraseña</label>
                    <input type="password" name="pwrd" id="pass1">
                    <label for="">Confirme la contraseña</label>
                    <input type="password" name="cpwrd" id="pass2">
                </div>
                <div>
                    <input type="submit" value="Cancelar" name="cancel">
                    <input type="submit" value="Registrarse" name="registr">
                </div>
            </form>

        </div>
    </main>
</body>
</html>|