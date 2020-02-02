<?php 
class Budzet{
    private $id;
    private $saldoRealizacji;
    private $typ;//plan budzetowy  albo aktualny budzet
    private $wspolnotaMieszkaniowa;
    private $planyWydatkow=array();

    function __construct($id,$saldoRealizacji,$typ,$wspolnotaMieszkaniowa,$planWydatku) {
        $this->id=$id;
        $this->saldoRealizacji=$saldoRealizacji;
        $this->typ=$typ;
        $this->wspolnotaMieszkaniowa=$wspolnotaMieszkaniowa;
        $this->planWydatku=$planWydatku;
    }

//todo zrobić gettery i settery
}
?>