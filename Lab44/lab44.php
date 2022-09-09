<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Laboratorio 4.4</title>
</head>
<body>
<form action="lab44.php" method="post">
    <?php 
    $numero = '';
    $numeropar = '';
    $mensaje= '';
    echo "<h1>Ingresa los numeros del arreglo: </h1>";
        for ($i = 0; $i <= 2; $i++) : ?>
            <br>
            <input type="number" name="num[]">
            <br>
            <?php
                if(array_key_exists('enviar', $_POST))
                {
                    $numero = $_POST["num"];
                    $numeropar=intval($numero[$i]);
                    if($numeropar %2 == 0)
                    {
                        $par = 0;
                    }
                    else
                    {
                        $par = 1;  
                        $i=3;
                    }
            echo "<br>";
                }
            endfor; 

        if($par==0) 
        {
            $mensaje = "Todos son pares.";
        }
        else
        {
            $mensaje = "Introdujo un numero impar";
        }
        $i=0;
        echo $mensaje;
        ?>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>