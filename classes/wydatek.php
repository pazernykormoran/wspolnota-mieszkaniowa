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

     public function getId(){
        return $this->id;
    }

    public function getOpis(){
        return $this->opis;
    }

    public function getData(){
        return $this->data;
    }

    public function getKwota(){
        return $this->kwota;
    }

}
?>