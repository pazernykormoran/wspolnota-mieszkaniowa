<?php


include 'model/model.php';

class BudzetModel extends Model{

    public function pobierzDochodyRoczneZMieszkan() {
        
        //zwraca liczbe;
    }
    public function pobierzDochodyRoczneZLokali() {
        
        //zwraca liczbe;
    }
    public function pobierzBudzet($typ) {
        
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
