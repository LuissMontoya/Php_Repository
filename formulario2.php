<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <style>

    </style>

    <title>Formulario de validacion PHP</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <br>
            <div class="col-md-6" style="border: 2px solid;">

                <h2>Formulario de Validación en PHP</h2>
                <br>
                <form action="formulario2.php" method="POST" name="frm">
                  
                    <div class="form-group row">
                        <div style="width: 30%">
                            <label>Nombre *</label>
                        </div>

                        <div style="width: 70%">
                            <input type="text" placeholder="Introduce tu nombre..." required class="form-control" name="nombre">
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <div style="width: 30%">
                            <label class="form-label">Email address: *</label>
                        </div>

                        <div style="width: 70%">
                            <input type="email" class="form-control" name="email" placeholder="correo@example.com" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div style="width: 30%">
                            <label class="form-label">Website: </label>
                        </div>

                        <div style="width: 70%">
                            <input type="text" class="form-control" name="website">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div style="width: 30%">
                            <label class="form-label">Comentario: </label>
                        </div>

                        <div style="width: 70%">
                            <textarea class="form-control" name="comentario" rows="3"></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <div style="width: 30%">
                            <label class="form-label" name="txtArea">Género: *</label>
                        </div>

                        <div style="width: 70%">

                            <input type="radio" value="Femenino" name="genero" checked>
                            <label class="form-check-label">
                                Femenino
                            </label>

                            <input type="radio" value="Masculino" name="genero">
                            <label class="form-check-label">
                                Masculino
                            </label>

                        </div>
                    </div>
                    <br>

                    <div class=" form-group  mb-3">
                        <input class="btn btn-secondary" type="submit" name="boton" value="Enviar">
                    </div>

                </form>
                <hr>

                <div class="row">
                    <h2>Datos procesados: </h2>
                    <div class="container" name="datos">
                        <?php

                        if (isset($_POST['boton'])) {
                            $nombre = $_POST['nombre'];
                            $email = $_POST['email'];
                            $website =  $_POST['website'];
                            $comentario = $_POST['comentario'];

                            echo 'Nombre: '.$nombre . "<br>";
                            echo 'Correo: '.$email . "<br>";
                            echo 'Sitio Web: '.$website . "<br>";
                            if (!isset($_POST['comentario']) == '') {
                                echo 'Comentario : '.$comentario . "<br>";
                            }
                            if ($_POST['genero'] == "Femenino") {
                                echo 'Género: '.'Femenino' . "<br>";
                            } else if ($_POST['genero'] == "Masculino") {
                                echo 'Género: '.'Masculino' . "<br>";
                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>

</html>