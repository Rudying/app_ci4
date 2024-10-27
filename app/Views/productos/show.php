<?php echo $this->extend('plantilla/layout');?>

<?php echo $this->section('contenido');?>
<h2>Detalles del Producto <?php echo $producto['nombre'];?> </h2>
<?php echo $this->endSection();?>