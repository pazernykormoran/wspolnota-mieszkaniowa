<?php 
class Adres{
    private $id;
    private $kodPocztowy;
    private $miejscowosc;
    private $numerMieszkania;
    private $ulica;
    private $budynek;

    function __construct($id,$kodPocztowy,$miejscowosc,$numerMieszkania,$ulica,$budynek) {
        $this->id=$id;
        $this->kodPocztowy=$kodPocztowy;
        $this->miejscowosc=$miejscowosc;
        $this->numerMieszkania=$numerMieszkania;
        $this->ulica=$ulica;
        $this->budynek=$budynek;
     }

//todo zrobić gettery i settery\
function getMiejscowosc(){
    return $this->miejscowosc;
}

function getNumerMieszkania(){
    return $this->numerMieszkania;
}

function getUlica(){
    return $this->ulica;
}

function getBudynek(){
    return $this->budynek;
}
function getId(){
    return $this->id;
}

function getKodPocztowy(){
    return $this->kodPocztowy;
}

}
?>