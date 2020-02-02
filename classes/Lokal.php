<?php 
class Lokal{
    private $id;
    private $czynsz;
    private $numer;
    private $powierzchnia;
    private $subkonto;
    private $wynajęty;
    private $zagospodarowanie;

    function __construct($id,$czynsz,$numer,$powierzchnia,$subkonto,$wynajęty,$zagospodarowanie) {
        $this->id=$id;
        $this->czynsz=$czynsz;
        $this->numer=$numer;
        $this->powierzchnia=$powierzchnia;
        $this->wynajęty=$wynajęty;
        $this->zagospodarowanie=$zagospodarowanie;
     }

//todo zrobić gettery i settery
}
?>