<?php include 'includes/header.php';

$productos =[  
    
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Laptop',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 400,
        'disponible' => false
    ],
];

//Se accede a cada uno de ellos y sirve para simplificar el manejo de datos 
// Se puede usar en conjunto con el HTML   
foreach ( $productos as $producto){ ?>
<li>
    <p>Producto: <?php echo $producto['nombre']; ?></p>
    <p>Precio: <?php echo "$" . $producto['precio']; ?></p>
    <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No Disponible'; ?> </p>
</li>
<?php
}


include 'includes/footer.php';