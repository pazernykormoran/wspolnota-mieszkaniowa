<?php 
class PlanWydatku{
    private $id;
    private $czestotliwoscRoczna;
    private $kwota;
    private $nazwa;
    private $kategoria;
    private $wydatki=array();

    function __construct($id,$czestotliwoscRoczna,$kwota,$nazwa,$kategoria,$wydatki) {
        $this->id=$id;
        $this->czestotliwoscRoczna=$czestotliwoscRoczna;
        $this->kwota=$kwota;
        $this->nazwa=$nazwa;
        $this->kategoria=$kategoria;
        $this->wydatki=$wydatki;
     }
     public function getId(){
        return $this->id;
    }
//todo zrobić gettery i settery
}
?>