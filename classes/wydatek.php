<?php 
class Wydatek{
    private $id;
    private $data;
    private $opis;
    private $kwota;

    function __construct($id,$data,$opis,$kwota) {
        $this->id=$id;
        $this->data=$data;
        $this->opis=$opis;
        $this->kwota=$kwota;
     }

//todo zrobić gettery i settery
}
?>