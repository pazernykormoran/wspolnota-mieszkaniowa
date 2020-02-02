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

     public function getId(){
        return $this->id;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getImie(){
        return $this->imie;
    }

    public function getNazwisko(){
        return $this->nazwisko;
    }

    public function getPytaniePomocnicze(){
        return $this->pytaniePomocnicze;
    }

    public function getOdpowiedzPomocnicza(){
        return $this->odpowiedzPomocnicza;
    }

    public function getRola(){
        return $this->rola;
    }

    public function getStanKonta(){
        return $this->stanKonta;
    }

    public function getWspolnotaMieszkaniowa(){
    return $this->wspolnotaMieszkaniowa;
    }

}
?>