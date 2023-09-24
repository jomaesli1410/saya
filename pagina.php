<?php
session_start();
if(isset($_SESSION['verificado']))
{

echo"<html>
    <head>
        <title>Manejo de sessiones</title>
        <meta sharset ='UTF-8'/>
    </head>
    <body>
        <font size=7 color=blue> PAGINA DE SAYAYIN </font>
    </body>
</html>
";
}
else
{
    header("location:login.php?error=si");
}
