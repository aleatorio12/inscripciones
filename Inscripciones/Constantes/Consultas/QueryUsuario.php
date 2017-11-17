<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RootSystem\Inscripciones\Constantes\Consultas;

/**
 * Description of QueryUsuario
 *
 * @author Victor Matías <vitomany@reproducir.net>
 */
class QueryUsuario {
    
    const QRY_INSERT_USUARIO = "INSERT INTO USUARIO(NOMBRE, EMAIL, SEXO, NIVEL_ACADEMICO, TELEFONO) VALUES(:nombre, :email, :sexo, :nivelAcademico, :telefono)";
    
}
