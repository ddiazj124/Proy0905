<?php
//include 'Producto';
class ConsultaProductos{
    
    
    
    private function Conexion()
    {
        $miconn = new mysqli("localhost", "root", "avaras08", "venta");
                if ($miconn->connect_errno) {
                return "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        return $miconn;
    }
    
    public function Lista()
    {
        $sql="SELECT * FROM PRODUCTOS;";
        
        /* Consultas de selección que devuelven un conjunto de resultados */
        $resultado = $this->Conexion()->query($sql);
        
        $i=0;
        
        /*Obtencion de elementos*/
        while($fila = $resultado->fetch_assoc()){
            $oProducto = new Producto($fila["nombre"],$fila["precio"],$fila["codigo"]);
            $aProductos[$i]=$oProducto;
        }
        return $aProductos;
        
    }
    
    
    
}