<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RootSystem\Inscripciones\Repositorios;

use RootSystem\Inscripciones\Entidades\Usuario;
use RootSystem\Inscripciones\Conexion\Conexion;
use RootSystem\Inscripciones\Constantes\Consultas\QueryUsuario;

/**
 * Description of RepositorioUsuario
 *
 * @author Victor Matías <vitomany@reproducir.net>
 */
class RepositorioUsuario {
    
    /**
     * Registra el nuevo usuario en la BD.
     * 
     * @param Usuario $usuario
     * @return Usuario
     */
    public function registrarUsuario(Usuario $usuario){
        
        try{

            $conexion = Conexion::getConexion();
            $conexion->begin_transaction();
            $query = $conexion->prepare(QueryUsuario::QRY_INSERT_USUARIO);
            $query->bind_param("nombre", $usuario->getNombre(), \PDO::PARAM_STR);
            $query->bind_param("email", $usuario->getCorreoElectronico(), \PDO::PARAM_STR);
            $query->bind_param("telefono", $usuario->getTelefono(), \PDO::PARAM_STR);
            $query->bind_param("sexo", $usuario->esMujer(), \PDO::PARAM_INT);
            $query->bind_param("nivel_academico", $usuario->getFormacionAcademcia(), \PDO::PARAM_INT);
            $query->execute();
            $conexion->commit();
            return $usuario;
            
        }catch(\PDOException $e){
            return null;
        }

    }
    
}
