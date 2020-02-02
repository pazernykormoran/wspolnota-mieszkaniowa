<?php 
class Usterka{
    private $id;
    private $dataZgloszenia;
    private $stanRealizacji;
    private $temat;
    private $opis;
    private $budynek;
    private $uzytkownik;
    private $wspolnotaMieszkaniowa;

    function __construct($id,$dataZgloszenia,$stanRealizacji,$temat,$opis,$budynek,$uzytkownik, $wspolnotaMieszkaniowa) {
        $this->id=$id;
        $this->dataZgloszenia=$dataZgloszenia;
        $this->stanRealizacji=$stanRealizacji;
        $this->temat=$temat;
        $this->opis=$opis;
        $this->budynek=$budynek;
        $this->uzytkownik=$uzytkownik;
        $this->wspolnotaMieszkaniowa=$wspolnotaMieszkaniowa;
     }

//todo zrobić gettery i settery
}
?>