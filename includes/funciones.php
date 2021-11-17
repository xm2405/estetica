<?php

function obtenerServicios() : array{
    try{
        //**IMPORTANDO LA CONEXION**/
        require 'database.php';
        

        //**CODIGO SQL**/
        $sql = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $sql);
        
        //ARREGLO VACIO
        $servicios = [];
        $i = 0;

        //**RESULTADOS**/
        while($row=mysqli_fetch_assoc($consulta)){
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }

       return $servicios;

    }catch(\Throwable $th){
        var_dump( $th);
    }
}


obtenerServicios();