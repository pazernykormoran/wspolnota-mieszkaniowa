<?php 
class Adres{
    private $id;
    private $kodPocztowy;
    private $numer;
    private $ulica;

    function __construct($id,$kodPocztowy,$numer,$ulica) {
        $this->id=$id;
        $this->kodPocztowy=$kodPocztowy;
        $this->numer=$numer;
        $this->ulica=$ulica;
     }

//todo zrobić gettery i settery
}
?>