<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de edad</title>
</head>

<body>
    <?php

    $a = 15;
    $b = 18;
    $pro = 0;

    $pro = ($a + $b) / 2;
    echo "El promedio de edad es: " . $pro;

    echo "<br>";

    if ($a > $b) {
        echo $a; echo " Es mayor que "; echo $b;
    }else{
        echo $b; echo " Es mayor que "; echo $a;
    }

    ?>
</body>

</html>