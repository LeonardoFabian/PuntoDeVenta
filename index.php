<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
       <h1>Listado de Productos</h1>
       <table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Añadir a venta</th>
            </tr>

            <?php
        require_once "model/Data.php";

        $d = new Data();        

        $productos = $d->getProductos();


       // foreach ($p as $key => $value){ //VIDEO 5 MIN 1:10
        foreach ($productos as $p) {
            echo "<tr>";
                echo "<td>".$p->id."</td>";
                echo "<td>".$p->nombre."</td>";
                echo "<td>$".$p->precio."</td>";
                echo "<td>".$p->stock."</td>";
                echo "<td>";
                    echo "<form action='controller/agregar.php' method='post'>"; //tener un formulario para ir agregando tipo controlador
                        echo "<input type='hidden' name='txtId' value='".$p->id."'>";
                        echo "<input type='hidden' name='txtNombre' value='".$p->nombre."'>";
                        echo "<input type='hidden' name='txtPrecio' value='".$p->precio."'>";
                        echo "<input type='hidden' name='txtStock' value='".$p->stock."'>";
                        echo "<input type='number' name='txtCantidad'>";
                        echo "<input type='submit' name='btnAnadir' value='Añadir'>";
                    echo "</form>";
                echo "</td>";
            echo "</tr>";


        }
        ?>
       </table> 
    </body>
</html>