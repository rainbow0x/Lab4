<?php
    if (array_key_exists('enviar', $_POST))
    {
        if($_REQUEST ['NFactorial'] != "")
        { $numF = 1;
            for ($num=1; $num<=intVal($_REQUEST['NFactorial']);$num++)
            {   
                $numF = ($numF) * ($num);
            }
            echo $numF;
        }
        else
        {
            echo "No ha introducido un numero";
        }
    }
    else
    {
        echo "No ha introducido un numero";
    }
?>