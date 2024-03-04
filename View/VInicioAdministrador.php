<?php
    $id = $_GET['ide'];
    include("../Model/MMostrarTareas.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body>
    <header>
        <h1>
            <strong>Pagina: Administrador</strong>
        </h1>
    </header>
    <main>
        <div>
            <div>
                <h2>
                    Gestion de Tareas
                </h2>
            </div>
            <div>
                <form action="">
                    <input type="submit" value="Agregar Nueva Tarea">
                </form>
            </div>
            <div>
                <?php
                
                ?>
            </div>
        </div>
    </main>
</body>
</html>