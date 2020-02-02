<?php 
class Usterka{
    private $id;
    private $date;
    private $stanRealizacji;
    private $temat;
    private $opis;
    private $budynek;
    private $uzytkownik;
    private $wspolnotaMieszkaniowa;

    function __construct($id,$date,$stanRealizacji,$temat,$opis,$budynek,$uzytkownik, $wspolnotaMieszkaniowa) {
        $this->id=$id;
        $this->date=$date;
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