<?php 
class CzynszMieszkaniowy{
    private $id;
    private $mieszkanie;
    private $uzytkownik;
    private $data;
    private $kwota;
    private $budzet;

    function __construct($id,$mieszkanie,$uzytkownik,$data,$kwota,$budzet) {
        $this->id=$id;
        $this->mieszkanie=$mieszkanie;
        $this->uzytkownik=$uzytkownik;
        $this->data=$data;
        $this->kwota=$kwota;
        $this->budzet=$budzet;
     }

//todo zrobić gettery i settery
}
?>