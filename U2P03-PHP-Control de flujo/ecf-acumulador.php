<html>

<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$acum=0;
while($acum<=50) {

        ?>

        <?php
        if (isset($_POST['cadena'])) {
            echo 'No es una cadena';
            die;
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
            Numero:<input type="numeric" name="numero"><br>
            <input type="hidden" name="oculto">
            <input type="submit" name="enviar">
        </>
    <?php

        $acum+=$_POST["numero"];


}
?>
