<?php
$mensaje = $_POST['mensaje'];
$CadenaDevuelta=strtolower($mensaje);


if ($CadenaDevuelta == "hola") {
    $resultado = "Muy buenas, usuario";
} else if ($CadenaDevuelta == "adios") {
    $resultado = "Hasta Pronto";
} else {
    $resultado = "No se reconoce el texto INTRODUCIDO!";
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container col-6 p-5">
    <table class="table table-success table-striped" border="1"">
        <br>
        <thead>
            <tr>
        <th scope=" col">Resultado</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $resultado ?></td>

            </tr>
        </tbody>
    </table>
</div>