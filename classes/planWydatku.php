<?php 
class PlanWydatku{
    private $id;
    private $nazwa;
    private $czestotliwoscRoczna;
    private $kwota;
    private $nazwa;
    private $kategoria;
    private $wydatki=array();

    function __construct($id,$nazwa,$czestotliwoscRoczna,$kwota,$nazwa,$kategoria,$wydatki) {
        $this->id=$id;
        $this->nazwa=$nazwa;
        $this->czestotliwoscRoczna=$czestotliwoscRoczna;
        $this->kwota=$kwota;
        $this->nazwa=$nazwa;
        $this->kategoria=$kategoria;
        $this->wydatki=$wydatki;
     }

//todo zrobić gettery i settery
}
?>