<?php
    if (array_key_exists('enviar', $_POST))
    {
        if($_REQUEST ['VentasT'] != "")
        {
            if($_REQUEST ['VentasT'] >= 80)
            {
                echo "<img src=Bueno.jpg>";
            }
            elseif ($_REQUEST ['VentasT']>=50 & $_REQUEST['VentasT']<=79)
            {
                echo "<img src=Medio.jpg>";
            }
            else
            {
                echo "<img src=Malo.jpg>";
            }
        }
        else
        {
            echo "No ha introducido un porcentaje valido";
        }
    }
    else
    {
        echo "No ha introducido un porcentaje valido";
    }
?>