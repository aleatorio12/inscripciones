<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RootSystem\Inscripciones\Entidades;

/**
 * Description of Usuario
 *
 * @author Victor Matías <vitomany@reproducir.net>
 */
class Usuario {

    /**
     *
     * @var string Nombre completo de la persona.
     */
    private $nombre;
    
    /**
     *
     * @var int Último nivel académico de estudio
     */
    private $formacionAcademcia;
    
    /**
     * @var int[] Talleres a participar.
     */
    private $talleres;
    
    /**
     * @var boolean False = Hombre; True = Mujer;
     */
    private $esMujer;
    
    /**
     *
     * @var string Número telefónico.
     */
    private $telefono;
    
    /**
     * @var string Correo electrónico.
     */
    private $correoElectronico;
    
    /**
     * 
     * @return string
     */
    function getNombre() {
        return $this->nombre;
    }

    /**
     * 
     * @return int
     */
    function getFormacionAcademcia() {
        return $this->formacionAcademcia;
    }

    /**
     * 
     * @return int[]
     */
    function getTalleres() {
        return $this->talleres;
    }

    /**
     * 
     * @return boolean
     */
    function esMujer() {
        return $this->esMujer;
    }

    /**
     * 
     * @return string
     */
    function getTelefono() {
        return $this->telefono;
    }

    /**
     * 
     * @return string
     */
    function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    /**
     * 
     * @param string $nombre
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * 
     * @param int $formacionAcademcia
     */
    function setFormacionAcademcia($formacionAcademcia) {
        $this->formacionAcademcia = $formacionAcademcia;
    }

    /**
     * 
     * @param int[] $talleres
     */
    function setTalleres($talleres) {
        $this->talleres = $talleres;
    }

    /**
     * 
     * @param boolean $esMujer
     */
    function setMujer($esMujer) {
        $this->esMujer = $esMujer;
    }

    /**
     * 
     * @param string $telefono
     */
    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    /**
     * 
     * @param string $correoElectronico
     */
    function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }


}
