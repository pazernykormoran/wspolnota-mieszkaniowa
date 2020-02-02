<?php


include 'model/model.php';
include 'classes/adres.php';

class UsterkiModel extends Model{

    public function zglosUsterkePerform($postArray) {
         

      //  if(isset($postArray['temat'])&&isset($postArray['adres']) && isset($postArray['opis'])&&  $_SESSION['login'] &&  $_SESSION['imie']) ){
            //wyciagnij content z bazy

          //  ($id,$date,$stanRealizacji,$temat,$opis,$budynek, $wspolnotaMieszkaniowa) 
      //  }
      //  else{

     //   }


        //wyciagnij id uzytkownika z sesji i zapisz usterke  
            //postArray sa wszystkie rzeczy do zapisania w bazie usterki

        //zwraca bool czy usterka została poprawnie zapisna.

    }

    public function pobierzAdresyBudynkowWspolnoty($id) {
        $query="SELECT *
        From adresy
        Where idZewnetrzne = 1";
            
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=new Adres(null, $row["kodPocztowy"],$row["miejscowosc"],$row["nrMieszkania"],$row["ulica"], $row["idZewnetrzne"]);

        }
        foreach ($data as $key => $val) {
            echo $val["kodPocztowy"];
         }

        $select->closeCursor();

        return $data;
    }

   public function insert($data) {
        $ins=$this->pdo->prepare('INSERT INTO articles (idUżytkownika, idBudynku, dataZgłoszenia, temat, opis,stan) VALUES (
            :uzytkownik, :budynek, :dataZgloszenia, :opis, :stanRealizacji)');
        $ins->bindValue(':uzytkownik', '1', PDO::PARAM_STR);
        $ins->bindValue(':budynek', $data['uzytkownik'], PDO::PARAM_STR);
        $ins->bindValue(':dataZgloszenia', $data['budynek'], PDO::PARAM_STR);
        $ins->bindValue(':opis', $data['date_add'], PDO::PARAM_STR);
        $ins->bindValue(':stanRealizacji', $data['author'], PDO::PARAM_STR);
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
