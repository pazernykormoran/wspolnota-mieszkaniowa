<?php


include 'model/model.php';
include 'classes/adres.php';
include 'classes/usterka.php';
include 'classes/budynek.php';

class UsterkiModel extends Model{

    public function zglosUsterkePerform($postArray) {
         

        if(isset($postArray['temat'])&&isset($postArray['adres']) && isset($postArray['opis'])&&  $_SESSION['uzytkownik'] &&  $_SESSION['idWspolnoty']) {
      
          $usterka = new Usterka(null, date("Y/m/d"),"Zgloszono",$postArray['temat'],$postArray['opis'],$postArray['adres'],$_SESSION['uzytkownik'],$_SESSION['idWspolnoty']);
          $this->dodajUsterke($usterka);
          return true;
        }
       else{
            return false;
        }

    }

    public function pobierzAdresyBudynkowWspolnoty($id) {
        $query="SELECT DISTINCT miejscowosc,nrMieszkania,ulica, kodPocztowy, idZewnetrzne
        From adresy
        Where idZewnetrzne IN ( 
            SELECT id 
            From budynki
            Where idWspolnoty =".$id.")";
            
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=new Adres(null, $row["kodPocztowy"],$row["miejscowosc"],$row["nrMieszkania"],$row["ulica"], $row["idZewnetrzne"]);

        }

        $select->closeCursor();

        return $data;
    }

   private function dodajUsterke($usterka) {
        $ins=$this->pdo->prepare('INSERT INTO usterki (idUzytkownika, idBudynku, dataZgloszenia, temat, opis, stan) VALUES (
            :uzytkownik, :budynek, :dataZgloszenia, :opis, :temat, :stanRealizacji)');
        $ins->bindValue(':uzytkownik',$usterka->getUzytkownik() , PDO::PARAM_INT);
        $ins->bindValue(':budynek', $usterka->getBudynek(), PDO::PARAM_INT);
        $ins->bindValue(':dataZgloszenia', $usterka->getDataZgloszenia(), PDO::PARAM_STR);
        $ins->bindValue(':opis', $usterka->getOpis(), PDO::PARAM_STR);
        $ins->bindValue(':temat', $usterka->getTemat(), PDO::PARAM_STR);
        $ins->bindValue(':stanRealizacji', $usterka->getStanRealizacji(), PDO::PARAM_STR);
        $ins->execute();
    }
    public function pobierzUsterki($id) {
        //pobierz id wspolnoty z sesji 
        if(isset($_SESSION['idWspolnoty'])){

        }
    
        $query="SELECT u.temat,u.id, a.miejscowosc, a.nrMieszkania, a.ulica, a.kodPocztowy
        From adresy as a
        LEFT JOIN `usterki` as u
        ON a.idZewnetrzne = u.idBudynku
        LEFT JOIN budynki as b
        ON b.id = u.idBudynku
        WHERE b.idWspolnoty = ".$id;
            
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=new Usterka($row["id"],null,null,$row["temat"],null, new Budynek(null, new Adres(null,$row["kodPocztowy"],$row["miejscowosc"],$row["nrMieszkania"],$row["ulica"],null), $id),null,$id );
        }

        $select->closeCursor();

        return $data;

    }
    public function pobierzSzczegolyUsterki($id) {
        //pobiera z bazy usterke dla id wspolnoty mieszkaniowej oraz id usterki z parametru funkcji.
        if(isset($_SESSION['idWspolnoty'])&&isset($id)){

        }
        //zwraca usterke klasy Usterka
    }

}
?>
