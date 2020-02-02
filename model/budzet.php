<?php


include 'model/model.php';
include 'classes/budzet.php';
include 'classes/planWydatku.php';
include 'classes/Kategoria.php';

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
            $budzet=new Budzet($row["id"],$row["idWspolnoty"],$row["rokRozliczeniowy"],$row["typ"],array());
        }
        //echo $budzet->getId();
        $query="SELECT a.id AS idPlanuWydatku ,a.idBudzetu,a.idKategorii, a.nazwa AS nazwaPlanuWydatku, a.czestotliwoscRoczna, a.kwota, k.id AS idKategorii, k.nazwa AS nazwaKategorii, k.podzialkosztow
        From plan_wydatku AS a
        JOIN kategorie AS k ON a.idKategorii=k.id
        Where idBudzetu = '".$budzet->getId()."'";
        $select=$this->pdo->query($query);
        $plany_wydatkow=[];
        foreach ($select as $row) {
            $plany_wydatkow[]=new planWydatku($row["idPlanuWydatku"],$row["czestotliwoscRoczna"],$row["kwota"],$row["nazwaPlanuWydatku"],
            new Kategoria($row["idKategorii"],$row["podzialkosztow"],$row["nazwaKategorii"]),array());
            //echo $row["nazwaKategorii"]; echo "<br>";
        }     
        $budzet->setPlanyWydatkow($plany_wydatkow);
        
        return $budzet;
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
