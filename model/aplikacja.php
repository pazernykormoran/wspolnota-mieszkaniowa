<?php


include 'model/model.php';

class AplikacjaModel extends Model{

    public function logowanieValidate($postArray) {
        //wyciagnij użytkownika i zapisz w sesji, z sesji pobierz również wspolnote mieszkaniową dla tego użytkownika i zapisz ją w użytkowniku. 
            //postArray ma "login", "haslo"

        //zwraca bool czy używkotnik został zapisany

    }
    public function zapomnialemHaslaValidate($postArray) {
        //sprawdź czy podany email istnieje
            //postArray ma "email"
        
        //jeśli podany email istnieje to zapisz go do sesji pod nazwą "email" oraz wyciagnij pytanie pomocnicze dla tego emaila
    
        //zwraca pytanie pomocnicze lub null

    }
    public function pytaniePomocniczeValidate($postArray) {
        //sprawdź czy pytanie pomocnicze zgadza się z tym w bazie
            //postarray ma "odpowiedz"
            
        //zwraca bool

    }
    public function zmienHasloPerform($postArray) {
        //zapisz dane do bazy. (email pobierz z sesji jako email zapisany w funkcji zapomniałęm hasło albo po prostu z użytkownika zapisanego w sesji jeśli jest zalogowany)
            //postarray ma "haslo"

        //zwraca bool czy udało się zapisać
    }
}
?>
