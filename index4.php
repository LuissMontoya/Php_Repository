<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor a Menor</title>
</head>

<body>
    <?php

    $a =50;
    $b =60;
    $c =70;


    if ($a>$b and $a>$c and $b>$c){
        echo "".$a; echo "<br>".$b; echo "<br>".$c;
    }
    if($a>$b and $a>$c and $c>$b){
        echo "".$a; echo "<br>".$c; echo "<br>".$b;
    }
    if($b>$a and $b>$c and $a>$c){
        echo "".$b; echo "<br>".$a; echo "<br>".$c;
    }
    if($b>$a and $b>$c and $c>$a){
        echo "".$b; echo "<br>".$c; echo "<br>".$a;
    }
    if($c>$a and $c>$b and $a>$b){
        echo "".$c; echo "<br>".$a; echo "<br>".$b;
    }
    if($c>$a and $c>$b and $b>$a){
        echo "".$c; echo "<br>".$b; echo "<br>".$a;
    }

    ?>
</body>

</html>