<?php
$pesoVehiculo = $_POST['peso'];
$pesoPermitido = 3;

if ($pesoVehiculo > $pesoPermitido) {
    $resultado = "El peso del vehiculo no esta permitido" .PHP_EOL. "El peso del vehiculo es de ".$pesoVehiculo. " toneladas";
} else  {
    $resultado = "El peso del vehiculo esta permitido "."El peso del vehiculo es de ".$pesoVehiculo. " toneladas";
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