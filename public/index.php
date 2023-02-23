<?php 

require '../clases/Producto.php';

$producto = new Producto(
    1,
    'iPhone X',
    'El mejor smartphone de Apple',
    999.99, 
    10,
    'https://www.apple.com/newsroom/images/product/iphone/standard/iphonex_front_back_glass_big.jpg.large.jpg'
);

echo $producto->getNombre();
echo "<br />";
echo $producto->getPrecio();
echo "<br />";

$producto->setPrecio(19.84);
echo $producto->getPrecio();
