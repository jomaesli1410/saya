<?php
    $usuario="saya";
    $clave="123";

    if ($_POST['usuario']==$usuario && $_POST['pass']==$clave)
    {
        session_start();
        $_SESSION['verificado']="si";
        echo "Tines acceso............";
        echo "<a href='pagina.php'> Ir a la pagina </a>";
    }
    else
    {
        header("location:login.php?error=si");
    }
?> 