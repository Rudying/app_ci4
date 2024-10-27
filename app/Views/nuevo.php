<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<h1>Nuevo producto</h1>

<?php echo form_open('productos/guarda'); ?>

<?php 
$atributos =[
    'type' => 'text',
    'id' => 'codigo',
    'name' => 'codigo',
    'class' => 'form-control',
    'required' => true
];

?>

<p>
    <?php echo form_label('Codigo', 'codigo', ['class' => 'form-label']); ?>
    <?php echo form_input($atributos); ?>
</p>

<p>
    <?php echo form_label('Nombre', 'nombre'); ?>
    <?php echo form_input('nombre', '', ['id' => 'nombre', 'class' => 'form-control']); ?>
</p>

<p>
    <?php echo form_label('Precio', 'precio'); ?>
    <?php echo form_input('precio', '0.00', ['id' => 'precio', 'min' => 1, 'class' => 'form-control'], 'number'); ?>
</p>

<p>
    <?php echo form_label('Stock', 'stock'); ?>
    <?php echo form_input('stock', '0', ['id' => 'stock', 'min' => 0, 'class' => 'form-control'], 'number'); ?>
</p>

<p>
    <?php echo form_submit('submit', 'Guardar'); ?>
</p>

<?php echo form_close(); ?>

</body>

</html>