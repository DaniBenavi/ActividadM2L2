<?php
$enlace = $_POST['variable_input'];
function filtroUrl($enlace)
{
    if (trim($enlace) == '') {
        $resultado = 'No has introducido ningun valor<br>';
        return false;
    } else {
        if (!filter_var($enlace, FILTER_VALIDATE_URL)) {
            $resultado = 'La direccion introducida no es valida<br>';
            return false;
        }
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|](\.)[a-z]{2}/i", $enlace)) {
            $resultado = 'La direccion introducida no es valida<br>';
            return false;
        } else {
            $resultado = 'Direccion valida<br>';
            return true;
        }
    }
}
if (!filtroUrl($enlace)) {
    $resultado = '¡Cuidado estas fastidiando un enlace a una pagina!';
} else {
    $resultado ='Bien estas haciendo un favor al mundo del SEO!';
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