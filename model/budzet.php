<?php


include 'model/model.php';
include 'classes/budzet.php';
include 'classes/planWydatku.php';

class BudzetModel extends Model{

    public function pobierzDochodyRoczneZMieszkan() {
        
        //zwraca liczbe;
    }
    public function pobierzDochodyRoczneZLokali() {
        
        //zwraca liczbe;
    }
    public function pobierzBudzet($typ) {
        $idWspolnoty=$_SESSION['idWspolnoty'];
        $query="SELECT DISTINCT id,idWspolnoty,rokRozliczeniowy, typ
        From budzety
        Where typ = '".$typ."' AND idWspolnoty='".$idWspolnoty."'";
        $select=$this->pdo->query($query);
        $budzet;
        foreach ($select as $row) {
            $budzet=new Budzet($row["id"],$row["idWspolnoty"],$row["rokRozliczeniowy"],$row["typ"]);
        }

        $query="SELECT id,idBudzetu,idKategorii, nazwa, czestotliwoscRoczna, kwota
        From plan_wydatku
        Where idBudzetu = '".$budzet->getId()."'";
        $select=$this->pdo->query($query);
        $plany_wydatkow=[];
        foreach ($select as $row) {
            $plany_wydatkow[]=new planWydatku($row["id"],$row["czestotliwoscRoczna"],$row["kwota"],$row["nazwa"],"",array());
        }               

        //return $data;
        //zwraca obiekt Budzet;
    }
    private function pobierzSzczegolyWydatkowBudzetu($idPlanuWydatku) {
        
        //zwraca tablice oboektow PlanWydatku;
    }
    private function pobierzSzczegolyWydatowPlanuBudzetowego($idPlanuWydatku) {
        
        //zwraca tabice oboektow PlanWydatku;
    }
    private function pobierzWydatki($idPlanuWydatku) {
        
        //zwraca tablice oboektow Wydatek;
    }
    private function pobierzKategorie($idPlanuWydatku) {
        
        //zwraca tablice obiektow Kategoria;
    }

}
?>
