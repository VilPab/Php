<?php
function validarFecha($fecha)
{

    $dia = (int)substr($fecha, 0, 2);
    $mes = (int)substr($fecha, 3, 2);
    $año = (int)substr($fecha, 6, 4);

    switch ($mes) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            if ($dia > 0 && $dia <= 31) {
                $errorF = true;
            } else {

                $errorF = false;
            }
            break;

        case 4:
        case 6:
        case 8:
        case 11:
            if ($dia > 0 && $dia <= 30) {

                $errorF = true;
            } else {

                $errorF = false;

            }
            break;

        case 2:

            if ($dia <= 28 && $dia >= 1) {

                $errorF = true;
            } else if (($dia == 29 && (($año % 4 == 0 && $año % 100 != 0) || $año % 400 == 0))) {

                $errorF = true;

            } else {

                $errorF = false;


            }
            break;
    }
    return $errorF;
}

?>