<?php


include 'model/model.php';

class UsterkiModel extends Model{

    public function zglosUsterkePerform($postArray) {
        //wyciagnij id uzytkownika z sesji i zapisz usterke  
            //postArray sa wszystkie rzeczy do zapisania w bazie usterki

        //zwraca bool czy usterka została poprawnie zapisna.

    }
    public function pobierzUsterki() {
        //pobierz id wspolnoty z sesji użytkownik->wspolnowaMieszkaniowa->id;
        //pobiera z bazy liste zgloszonych usterek dla danej wspolnoty
        
        //zwraca liste pobranych usterek klasy Usterka
    }
    public function pobierzSzczegolyUsterki($id) {
        //pobiera z bazy usterke dla id wspolnoty mieszkaniowej oraz id usterki z parametru funkcji.
            
        //zwraca usterke klasy Usterka
    }

}
?>
