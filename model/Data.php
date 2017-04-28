<?php
require_once "Conexion.php";
require_once "Producto.php";
class Data{
    private $con;

    public function __construct(){
        $this->con = new Conexion("localhost", "ventas", "root", "");

    }

    public function getProductos(){
        $productos = array();

        $query = "select * from producto";
        $res = $this->con->ejecutar($query);

        while($reg = mysql_fetch_array($res)){
            $p = new Producto();

            $p->id = $reg[0];
            $p->nombre = $reg[1];
            $p->precio = $reg[2];
            $p->stock = $reg[3];

            array_push($productos, $p);
            
        }

        return $productos;
    }
}


?>