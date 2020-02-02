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

//todo zrobić gettery i settery
}
?>