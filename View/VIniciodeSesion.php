<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <header>
        <h1>
            <strong>Inicio de Sesión</strong>
        </h1>
    </header>
    <main>
        <form action="../Model/MInicioDeSesion.php" method="post">
            <div>
                <label for="">Correo</label>
                <input type="email" name="corr">
            </div>
            <div>
                <label for="">Contraseña</label>
                <input type="password" name="pswrd" id="">
            </div>
            <div>
                <input type="submit" value="Cancelar" name="cancel">
                <input type="submit" value="Iniciar Sesión" name="iniciar">
            </div>
        </form>
    </main>
</body>
</html>