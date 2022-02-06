<?php

class Conexion {
    public $conexion;
    public $dbname;

    public function __construct($dbname){
        try{

        }catch(\Exception $e){
            echo "Error in Conexion :" . $e->getMessage();
        }
    }

}