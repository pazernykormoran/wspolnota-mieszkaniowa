<?php


include 'model/model.php';

class UsterkiModel extends Model{

    public function zglosUsterkePerform($postArray) {
         

        if(isset($postArray['temat'])&&isset($postArray['adres']) && isset($postArray['opis'])&&  $_SESSION['login'] &&  $_SESSION['imie']) ){
            //wyciagnij content z bazy

            ($id,$date,$stanRealizacji,$temat,$opis,$budynek, $wspolnotaMieszkaniowa) 
        }
        else{

        }


        //wyciagnij id uzytkownika z sesji i zapisz usterke  
            //postArray sa wszystkie rzeczy do zapisania w bazie usterki

        //zwraca bool czy usterka została poprawnie zapisna.

    }

    public function insert($data) {
        $ins=$this->pdo->prepare('INSERT INTO articles (title, content, date_add, autor, id_categories) VALUES (
            :title, :content, :date_add, :autor, :id_categories)');
        $ins->bindValue(':title', $data['title'], PDO::PARAM_STR);
        $ins->bindValue(':content', $data['content'], PDO::PARAM_STR);
        $ins->bindValue(':date_add', $data['date_add'], PDO::PARAM_STR);
        $ins->bindValue(':autor', $data['author'], PDO::PARAM_STR);
        $ins->bindValue(':id_categories', $data['cat'], PDO::PARAM_INT);
        $ins->execute();
    }
    public function pobierzUsterki() {
        //pobierz id wspolnoty z sesji 
        if(isset($_SESSION['idWspolnoty'])){

        }
        //pobiera z bazy liste zgloszonych usterek dla danej wspolnoty
        
        //zwraca liste pobranych usterek klasy Usterka
    }
    public function pobierzSzczegolyUsterki($id) {
        //pobiera z bazy usterke dla id wspolnoty mieszkaniowej oraz id usterki z parametru funkcji.
        if(isset($_SESSION['idWspolnoty'])&&isset($id)){

        }
        //zwraca usterke klasy Usterka
    }

}
?>
