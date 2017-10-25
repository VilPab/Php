<html>

<head>
    <meta charset="utf-8">
</head>
<body>
<?php
if (!isset($_POST['enviar'])) {
?>

<?php
if (isset($_POST['cadena']))  {
    echo 'No es una cadena';
    die;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
    Numero:<input type="text" name="cadena"><br>
    <input type="submit" name="enviar">
</form>
<?php } else {

    for($i=strlen($_POST["cadena"]);$i>1;$i--){
        echo substr(0,$i);
    }

}
?>

<a href="index.php">Volver</a>
</body>
</html>