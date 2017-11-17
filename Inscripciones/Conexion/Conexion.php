<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RootSystem\Inscripciones\Conexion;

use RootSystem\Inscripciones\Constantes\DBConstantes;

/**
 * Description of Conexion
 *
 * @author Victor Matías <vitomany@reproducir.net>
 */
class Conexion {
    
    public static function getConexion(){
            
        $conexion = new \mysqli(DBConstantes::BD_HOST, DBConstantes::BD_USERNAME, DBConstantes::BD_PASSWORD);
        if($conexion->connect_error){
            return null;
        }else{
            $this->conexion = $conexion;
            return $conexion;
        }
    }
    
}
