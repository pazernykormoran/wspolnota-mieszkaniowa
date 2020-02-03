<?php


include 'model/model.php';
include 'classes/uzytkownik.php';

class AplikacjaModel extends Model{

    public function logowanieValidate($postArray) {
       
        if(isset($postArray['login'])&&isset($postArray['haslo'])){
            $query="SELECT DISTINCT uzytkownicy.id, uzytkownicy.imie, uzytkownicy.nazwisko, uzytkownicy.login, pytPomocnicze, odpPomocnicza, uzytkownicy.rola, idWspolnoty
            From uzytkownicy 
            LEFT JOIN uzytkownicy_mieszkania ON uzytkownicy_mieszkania.idUzytkownika=id
            LEFT JOIN uzytkownicy_lokale ON uzytkownicy_lokale.idUzytkownika=id
            LEFT JOIN mieszkania ON mieszkania.id=uzytkownicy_mieszkania.idMieszkania
            LEFT JOIN lokale ON lokale.id=uzytkownicy_lokale.idLokalu
            LEFT JOIN budynki ON lokale.idBudynku=budynki.id or mieszkania.idBudynku=budynki.id
            LEFT JOIN wspolnoty_mieszkaniowe ON wspolnoty_mieszkaniowe.id=budynki.idWspolnoty
            
            Where login= '".$postArray['login'] ."' AND haslo= '".$postArray['haslo'] ."'";
            
            $select=$this->pdo->query($query);
            $uzytkownik;
            foreach ($select as $row) {
                
                $uzytkownik=new Uzytkownik(
                    $row["id"],$row["login"],$row["imie"],$row["nazwisko"],$row["pytPomocnicze"],$row["odpPomocnicza"],$row["rola"],$row["idWspolnoty"]);
            }   
        }

        if($select->rowCount()>0){
            $_SESSION['uzytkownik']=strval( $uzytkownik->getLogin() );
            $_SESSION['idWspolnoty']=$uzytkownik->getWspolnotaMieszkaniowa();
            return true;
        }else{
            return false;
        }
    }
    public function zapomnialemHaslaValidate($postArray) {
        if(isset($postArray['login/email'])){
            $query="SELECT pytPomocnicze
            From uzytkownicy 
            Where login= '".$postArray['login/email']."'";
            $select=$this->pdo->query($query);
            $pytPomocznicze;
            foreach ($select as $row) {
                $pytPomocznicze=$row["pytPomocnicze"];
                $_SESSION['login']=$postArray['login/email'];
            }  
            if($pytPomocznicze){
                return $pytPomocznicze;
            }else{
                return null;
            }
        }
        else{
            return null;
        }
    }
    public function pytaniePomocniczeValidate($postArray) {


        if(isset($postArray['answer'])){
            $query="SELECT id
            From uzytkownicy 
            Where odpPomocnicza= '".$postArray['answer']."'";
            $select=$this->pdo->query($query);
            if($select->rowCount() > 0){
            return true;
            }
            return false;
        }
        else{
            return false;
        }

        
    }
    public function zmienHasloPerform($postArray) {
        //zapisz dane do bazy. (email pobierz z sesji jako email zapisany w funkcji zapomniałęm hasło albo po prostu z użytkownika zapisanego w sesji jeśli jest zalogowany)
            //postarray ma "haslo"

        //zwraca bool czy udało się zapisać

        if(isset($postArray['haslo1']) && isset($postArray['haslo2'])){
            //sprawdz czy dobra answer
            $login;
            if(isset($_SESSION['uzytkownik'])){
                $login=$_SESSION['uzytkownik'];
            }else if(isset($_SESSION['login'])){
                $login=$_SESSION['login'];
            }
            
            if($login&&$postArray['haslo1']==$postArray['haslo2']){
                $query="UPDATE uzytkownicy 
                SET haslo= '". $postArray['haslo1'] ."'
                WHERE login = '". $login ."'";
                $select=$this->pdo->query($query);
                return true;
            }else{
                return false;
            }
           
        }
        else{
            return false;
        }
    }
}
?>
