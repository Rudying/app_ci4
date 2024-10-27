<?php echo $this->extend('plantilla/layout');?>

<?php echo $this->section('contenido');?>
<table>
    <thead>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Stock</th>
        <th>Almacen</th>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto) : ?>
            <tr>
                <td><?php echo $producto['codigo'];   ?></td>
                <td><?php echo $producto['nombre'];   ?></td>
                <td><?php echo $producto['stock'];    ?></td>
                <td><?php echo $producto['almacen'];  ?></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->endSection();?>

<?php echo $this->section('scripts');?>

<script>
    alert("hola rudy")
</script>

<?php echo $this->endSection();?>