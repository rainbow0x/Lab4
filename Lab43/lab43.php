<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>
<body>
<form action="lab433.php" method="post">
        <?php for ($i = 1; $i <= 20; $i++) : ?>
            <h1>Ingresa el numero en la posicion: <?php echo $i  ?></h1>
            <input type="number" name="num[]">
            <br>
            <?php endfor; 
        ?>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>