<?php 
class CzynszLokalowy{
    private $id;
    private $lokal;
    private $uzytkownik;
    private $data;
    private $kwota;
    private $budzet;

    function __construct($id,$lokal,$uzytkownik,$data,$kwota,$budzet) {
        $this->id=$id;
        $this->lokal=$lokal;
        $this->uzytkownik=$uzytkownik;
        $this->data=$data;
        $this->kwota=$kwota;
        $this->budzet=$budzet;
     }

//todo zrobić gettery i settery
}
?>