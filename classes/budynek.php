<?php 
class Budynek{
    private $id;
    private $adres;
    private $wspolnotaMieszkaniowa;

    function __construct($id,$adres,$wspolnotaMieszkaniowa) {
        $this->id=$id;
        $this->adres=$adres;
        $this->wspolnotaMieszkaniowa=$wspolnotaMieszkaniowa;
     }

//todo zrobić gettery i settery
}
?>