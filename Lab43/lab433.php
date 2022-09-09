<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $arreglo = $_POST['num'];
        $cantidad = sizeof($arreglo);
            if(array_values(array_diff_assoc($arreglo, array_unique($arreglo))))
            {
                echo "Inserto numeros repetidos";
            }
            else
            {
                $mayor = max($arreglo);
                $posicion = array_search($mayor, $arreglo);
                echo "El mayor de los numeros en el arreglo es: " . $mayor . " en la posicion " . $posicion+1;
            }
    }
    else
    {
        echo "No ha introducido ningun valor";
    }
?>