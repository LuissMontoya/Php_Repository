<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo que se escriba se invertirá</title>
</head>

<body>

    <form action="" method="post" action="index5.php">
        </br>
        Escribe una palabra: <input type="text" name="pal" value="" />
        </br>
        </br>
        <input value="Invertir" type="submit" name="boton" />
        </br>
    </form>

    <?php
    if (isset($_POST['boton'])) {
        $string = $_POST['pal'];
        $length = strlen($string);

        for ($i = $length - 1; $i >= 0; $i--) {
            echo $string[$i];
        }
    }

    ?>


</body>

</html>