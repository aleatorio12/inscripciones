<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RootSystem\Inscripciones\Utilidades;

/**
 * Description of StringValidators
 *
 * @author Victor Matías <vitomany@reproducir.net>
 */
class StringValidators {

    private static $REGEX_NOMBRE_PERSONA = "/^(((Del?) )?(([A-Z][a-zñ]*[áéíóú]?[a-zñ]{2,})|[ÁÉÍÓÚ][a-zñ]{2,}))/";
    
    private static $REGEX_PRECIO = "/^(([1-9][0-9]*|0)\.[0-9]{2,})/";
    
    private static $REGEX_ENTERO = "/^([1-9][0-9]*|0)/";
    
    private static $REGEX_BOOL = "/^((true)|(false))/";
    
    private static $REGEX_NIT = "/^([1-9][0-9]{6}([0-9]|[A-Z]))/";
    
    private static $REGEX_DIRECCION = "/[A-Z0-9a-z\.\-\s\,]*/";
    
    private static $REGEX_CODIGO_CUPON = "/^([A-Z0-9])*/";

    private static $REGEX_DESCRIPCION = "/^([A-ZÁÉÍÓÚa-záéíóú0-9(\.|\,)?]{1,}(\s)?)*/";

    public static function esNombreValido($nombre){
        if (preg_match( self::$REGEX_NOMBRE_PERSONA, $nombre, $coincidencias)){            
            if ( self::esIgualLongitudCadenas($coincidencias[0], $nombre) ){
                return true;
            }
        }       
        return false;
    }
    
    public static function esPrecioValido($precio){
        
        if (preg_match(self::$REGEX_PRECIO, $precio, $coincidencias)){
            if (self::esIgualLongitudCadenas($coincidencias[0], $precio)){
                return true;
            }
        }
        
        return false;        
    }
    
    public static function esEnteroValido($entero){
        if(preg_match(self::$REGEX_ENTERO, $entero, $coincidencias)){
            if (self::esIgualLongitudCadenas($coincidencias[0], $entero)){
                return true;
            }
        }        
        return false;
    }
    
    public static function esBooleanValido($booleano){
        if(preg_match(self::$REGEX_BOOL, $booleano, $coincidencias)){
            if (self::esIgualLongitudCadenas($coincidencias[0], $booleano)){
                return true;
            }
        }        
        return false;
    }
    
    public static function esNitValido($nit){
        if(preg_match(self::$REGEX_NIT, $nit, $coincidencias)){
            if (self::esIgualLongitudCadenas($coincidencias[0], $nit)){
                return true;
            }
        }
        return false;
    }
    
    public static function esDireccionValida($direccion){
        if(preg_match(self::$REGEX_DIRECCION, $direccion, $coincidencias)){
            if (self::esIgualLongitudCadenas($coincidencias[0], $direccion)){
                return true;
            }
        }
        return false;
    }

    /**
     * 
     * @param string $codigoCupon
     * @return boolean
     */
    public static function esCodigoCuponValido($codigoCupon){
        if(preg_match(self::$REGEX_CODIGO_CUPON, $codigoCupon, $coincidencias)){
            if (self::esIgualLongitudCadenas($coincidencias[0], $codigoCupon)){
                return true;
            }
        }
        return false;
    }    

    /**
     * Determina si los caracteres de la descripcion
     * son válidos.
     * 
     * @param string $descripcion
     * @return boolean
     */
    public static function esDescripcionValida($descripcion){
        if(preg_match(self::$REGEX_DESCRIPCION, $descripcion, $coincidencias)){
            if (self::esIgualLongitudCadenas($coincidencias[0], $descripcion)){
                return true;
            }
        }
        return false;
    }    
    
    /**
     * Elimina tildes y eñes de la cadena que recibe
     * y los sustituye por letras sin tildes o la N
     * 
     * @param string $username El username a ser limpiado.
     * @return string El username limpio.
     */
    public static function usernameLimpio($username){

        $regex = array();
        $sustitucion = array();

        $regex[0] = '/á|Á/';
        $regex[1] = '/é|É/';
        $regex[2] = '/í|Í/';
        $regex[3] = '/ó|Ó/';
        $regex[4] = '/ú|Ú/';
        $regex[5] = '/ñ|Ñ/';
        $regex[6] = '/ /';
        
        $sustitucion[0] = 'a';
        $sustitucion[1] = 'e';
        $sustitucion[2] = 'i';
        $sustitucion[3] = 'o';
        $sustitucion[4] = 'u';
        $sustitucion[5] = 'n';
        $sustitucion[6] = '';
        
        return preg_replace($regex, $sustitucion, $username);
        
    }
    
    private static function esIgualLongitudCadenas($cadena1, $cadena2){
        if (strlen($cadena1) === strlen($cadena2) ){
            return true;
        }
        return false;
    }
    
}
