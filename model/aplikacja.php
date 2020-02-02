<?php


include 'model/model.php';
include 'classes/uzytkownik.php';

class AplikacjaModel extends Model{

    public function logowanieValidate($postArray) {
        //wyciagnij użytkownika i zapisz w sesji, z sesji pobierz również wspolnote mieszkaniową dla tego użytkownika i zapisz ją w użytkowniku. 
            //postArray ma "login", "haslo"
       //zwraca bool czy używkotnik został zapisany
       
            if(isset($postArray['login'])&&isset($postArray['haslo'])){
            //wyciagnij content z bazy
        }

        //mok:
        $uzytkownik=new Uzytkownik('id','login','imie','nazwisko','pytPomocnicze','odp','rola','stanKonta','wspolnotaMieszkaniowa');
        
        if(isset($uzytkownik)){
            $_SESSION['uzytkownik']=$uzytkownik;
            $_SESSION['idWspolnoty']=1;
            return true;
        }else{
            return false;
        }
    }
    public function zapomnialemHaslaValidate($postArray) {
        //sprawdź czy podany email istnieje
            //postArray ma "email"
        
        //jeśli podany email istnieje to zapisz go do sesji pod nazwą "email" oraz wyciagnij pytanie pomocnicze dla tego emaila
    
        //zwraca pytanie pomocnicze lub null
        if(isset($postArray['login/email'])){
            return "siema tu pytanie pomocnicze mordo";
        }
        else{
            return "nie dziala post";
        }
    }
    public function pytaniePomocniczeValidate($postArray) {
        //sprawdź czy odp na  pytanie pomocnicze zgadza się z tym w bazie
            //postarray ma "odpowiedz"
            
        //zwraca bool

        if(isset($postArray['answer'])){
            //sprawdz czy dobra answer
            return true;
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
            return true;
        }
        else{
            return false;
        }
    }
}
?>
