<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <h3 align="center">Datos</h3>

                <form method="post" action="Recibe_Datos/Ejercicio_4_post.php">
                    <div class="form-group">
                        <label for="variable_input">Ingrese una url:</label> <br>
                        
                        <input id="variable_input" class="form-control" type="text" name="variable_input" />
                    </div>

                    <br />
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <br>
        <div id="Msg">

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="ajax/Ejer1fun.js"></script>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>