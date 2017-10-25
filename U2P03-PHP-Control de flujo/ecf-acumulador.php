<html>

<head>
    <meta charset="utf-8">
</head>
<body>
<?php



if($_POST["oculto"]<50) {


    if (isset($_POST['cadena'])) {
        echo 'No es una cadena';
        die;
    }
    ;?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
        Numero:<input type="numeric" name="numero"><br>
        <?php $acum = $_POST["numero"]+$_POST["oculto"];  ?>
        <input type="hidden" name="oculto" value=<?php echo $acum ?>>
        <input type="submit" name="enviar">
    </>
    <?php



}else {

    echo "<p>El acumulador a llegado a 50</p>";

}



?>
