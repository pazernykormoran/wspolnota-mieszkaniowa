<?php 
class Budzet{
    private $id;
    private $rokRozliczeniowy;
    private $typ;//plan budzetowy  albo aktualny budzet
    private $wspolnotaMieszkaniowa;
    private $planyWydatkow=array();

    function __construct($id,$rokRozliczeniowy,$typ,$wspolnotaMieszkaniowa,$planWydatku) {
        $this->id=$id;
        $this->rokRozliczeniowy=$rokRozliczeniowy;
        $this->typ=$typ;
        $this->wspolnotaMieszkaniowa=$wspolnotaMieszkaniowa;
        $this->planWydatku=$planWydatku;
    }

//todo zrobić gettery i settery
}
?>