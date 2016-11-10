<?php
class POOEscuela{
    
    private $idEscuela;
    private $nombreEsc;
    private $director;
    private $zona;
    private $claveEsc;
    private $sector;
    //private $calle;
    //private $colonia;
   // private $numero;
    
    public function __construct($idEscuela,$nombreEsc,$diretor,$zona,$claveEsc,$sector){
        
        $this -> idEscuela = $idEscuela;
        $this -> nombreEsc = $nombreEsc;
        $this -> director = $diretor;
        $this -> zona = $zona;
        $this -> claveEsc = $claveEsc;
        $this -> sector = $sector;
       // $this -> calle = $calle;
        //$this -> colonia =$colonia;
        //$this -> numero = $numero;
        
        
    }
    
    function getIdEscuela() {
        return $this->idEscuela;
    }

    function getNombreEsc() {
        return $this->nombreEsc;
    }

    function getDirector() {
        return $this->director;
    }

    function getZona() {
        return $this->zona;
    }

    function getClaveEsc() {
        return $this->claveEsc;
    }

    function getSector() {
        return $this->sector;
    }

    function getCalle() {
        return $this->calle;
    }

    function getColonia() {
        return $this->colonia;
    }

    function getNumero() {
        return $this->numero;
    }

    function setIdEscuela($idEscuela) {
        $this->idEscuela = $idEscuela;
    }

    function setNombreEsc($nombreEsc) {
        $this->nombreEsc = $nombreEsc;
    }

    function setDirector($director) {
        $this->director = $director;
    }

    function setZona($zona) {
        $this->zona = $zona;
    }

    function setClaveEsc($claveEsc) {
        $this->claveEsc = $claveEsc;
    }

    function setSector($sector) {
        $this->sector = $sector;
    }

    function setCalle($calle) {
        $this->calle = $calle;
    }

    function setColonia($colonia) {
        $this->colonia = $colonia;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

       
    
}


