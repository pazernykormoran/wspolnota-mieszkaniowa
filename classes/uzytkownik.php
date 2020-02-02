<?php 
class Uzytkownik{
    private $id;
    private $login;
    private $imie; 
    private $nazwisko; 
    private $pytaniePomocnicze;
    private $odpowiedzPomocnicza;  
    private $rola;
    private $stanKonta;
    private $wspolnotaMieszkaniowa;

    function __construct($id, $login, $imie, $nazwisko, $pytaniePomocnicze,$odpowiedzPomocnicza, $rola, $stanKonta, $wspolnotaMieszkaniowa) {
        $this->id=$id;
        $this->login=$login;
        $this->imie=$imie;
        $this->nazwisko=$nazwisko;
        $this->pytaniePomocnicze=$pytaniePomocnicze;
        $this->odpowiedzPomocnicza=$odpowiedzPomocnicza;
        $this->rola=$rola;
        $this->stanKonta=$stanKonta;
        $this->wspolnotaMieszkaniowa=$wspolnotaMieszkaniowa;
     }

     //todo zrobić gettery i settery
}
?>