


<html>

<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/**Mostrar en pantalla los múltiplosde 3 y 5 entre el 1 y el 1000.
 *A continuación mostrar en pantalla los 20 primeros múltiplos de 3 y 5.
 */
    $cont=0;

    for($i=1;$i<1000;$i++){
        if($i%3==0){
            echo "<p> $i es multiplo de 3</p>";
        }
        if($i%5==0){
            echo "<p> $i es multiplo de 5</p>";
        }
    }
    $i=1;
    while($cont<20){

        if(($i%3==0) || ($i%5==0)) {
            if ($i % 3 == 0) {
                echo "<p> $i es multiplo de 3</p>";

            }
            if ($i % 5 == 0) {
                echo "<p> $i es multiplo de 5</p>";

            }
            $cont++;
        }
        $i++;

    }

?>
