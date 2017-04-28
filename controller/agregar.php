<?php
require_once "../model/producto.php";


$p = new Producto();

$cant = $_POST["txtCantidad"];
$p->id = $_POST["txtId"];
$p->nombre = $_POST["txtNombre"];
$p->precio = $_POST["txtPrecio"];
$p->stock = $_POST["txtStock"];

echo $p->id;
echo "<br>";
echo $p->nombre;
echo "<br>";
echo $p->precio;
echo "<br>";
echo $p->stock;
echo "<br>";
echo $cant;


?>