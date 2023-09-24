<html>
    <head>
        <title>Manejo de sessiones</title>
        <meta sharset ="UTF-8"/>
    </head>
    <body>
        <?php
            if($_GET['error']=="si")
            {
                echo "Tu usuario y/o contraseña no son correctos ";
            }
        ?>
        <h1> LOGIN PROYECTO SAYA </H1>
        <form action="valida.php" method="post">
            <label for "Usuario"> Nombre de Usuario </label>
            <input type="text" name="usuario" placeholder="Digite usuario!!!"><br>
            <label for "pass">Digite contraseña </label>
            <input type = "password" name="pass">
            <br>
            <input type="submit" value="Entrar">
        </form>
        <h1> Se agrega esta linea para proabr el commit 2 </h1>  
        <h1> Se agrega texto en la ramasaya1 </h1> 
    </body>
</html>