<?php 
class Usterka{
    private $id;
    private $date;
    private $stanRealizacji;
    private $temat;
    private $opis;
    private $budynek;
    private $wspolnotaMieszkaniowa;

    function __construct($id,$date,$stanRealizacji,$temat,$opis,$budynek, $wspolnotaMieszkaniowa) {
        $this->id=$id;
        $this->date=$date;
        $this->stanRealizacji=$stanRealizacji;
        $this->temat=$temat;
        $this->opis=$opis;
        $this->budynek=$budynek;
        $this->wspolnotaMieszkaniowa=$wspolnotaMieszkaniowa;
     }

//todo zrobić gettery i settery
}
?>