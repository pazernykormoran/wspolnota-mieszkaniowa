<?php 
class Uzytkownik{
    private $id;
    private $login;
    private $imie; 
    private $nazwisko; 
    private $pytPomocnicze; 
    private $rola;
    private $stanKonta;
    private $wspolnotaMieszkaniowa;

    function __construct($id, $login, $imie, $nazwisko, $pytPomocnicze, $rola, $stanKonta, $wspolnotaMieszkaniowa) {
        $this->id=$id;
        $this->login=$login;
        $this->imie=$imie;
        $this->nazwisko=$nazwisko;
        $this->pytPomocnicze=$pytPomocnicze;
        $this->rola=$rola;
        $this->stanKonta=$stanKonta;
        $this->wspolnotaMieszkaniowa=$wspolnotaMieszkaniowa;
     }

     //todo zrobić gettery i settery
}
?>