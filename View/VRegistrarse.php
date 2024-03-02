<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <header>
        <h1>
            <strong>Registro de Usuario</strong>
        </h1>
    </header>
    <main>
        <div>
            <form action="" method="post">
                <div class="Name-LastName">
                    <label for="">Nombre</label>
                    <input type="text">
                    <label for="">Apellido</label>
                    <input type="text">
                </div>
                <div class="Data">
                    <label for="">Correo</label>
                    <input type="email">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" name="FechNac" id="" min="<?php echo ((int)date("Y"))-30?>-01-01" max="<?php echo ((int)date("Y"))-18?>-12-31">
                    <label for="">Tipo De usuario</label>
                    <select name="tipo" id="">
                        <option value="" hidden>Seleccione</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuario</option>
                    </select>
                </div>
                <div class="Profile-Photo">
                    <label for="">Foto De Perfil</label>
                    <input type="file" name="fotP" id="" accept="image/*">
                </div>
                <div>
                    <input type="submit" value="Cancelar">
                    <input type="submit" value="Registrarse">
                </div>
            </form>
        </div>
    </main>
</body>
</html>|