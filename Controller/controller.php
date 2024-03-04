<?php
    $op = $_GET['pag'];

    if($op == 1){
        include("../View/VIniciodeSesion.php");
    }else if($op == 2){
        include("../View/VRegistrarse.php");
    }

?>