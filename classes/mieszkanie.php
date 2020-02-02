<?php 
class Mieszkanie{
    private $id;
    private $czynsz;
    private $numer;
    private $powierzchnia;
    private $subkonto;

    function __construct($id,$czynsz,$numer,$powierzchnia,$subkonto) {
        $this->id=$id;
        $this->czynsz=$czynsz;
        $this->numer=$numer;
        $this->powierzchnia=$powierzchnia;
        $this->subkonto=$subkonto;
     }

     public function getId(){
        return $this->id;
    }
    
    public function getCzynsz(){
        return $this->czynsz;
    }

    public function getNumer(){
        return $this->numer;
    }

    public function getPowierzchnia(){
        return $this->powierzchnia;
    }

    public function getSubkonto(){
        return $this->subkonto;
    }
}
?>