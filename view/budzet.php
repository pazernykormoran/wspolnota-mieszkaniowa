<?php
/**
 * @author Łukasz Socha <kontakt@lukasz-socha.pl>
 * @version: 1.0
 * @license http://www.gnu.org/copyleft/lesser.html
 */

include 'view/view.php';

class BudzetView extends View{
    public function  przegladajBudzet() {
        $this->setNecessery();
        $budzetModel= $this->loadModel('budzet');

        //todo wywołaj niezbedne funkcje modelu oraz zsetuj dane. 
        $budzet=$budzetModel->pobierzBudzet('aktualny');
        $this->set('budzet',$budzet);

        $sumaActM = $budzetModel->pobierzAktualneDochodyRoczneZMieszkan();
        $sumaActL = $budzetModel->pobierzAktualneDochodyRoczneZLokali();
        $this->set('sumaActM',$sumaActM);
        $this->set('sumaActL',$sumaActL);

        $wszystkieCzynszeM = $budzetModel->pobierzWszystkieDochodyZMieszkan();
        $wszystkieCzynszeL = $budzetModel->pobierzWszystkieDochodyZLokali();
        $this->set('wszystkieCzynszeM',$wszystkieCzynszeM);
        $this->set('wszystkieCzynszeL',$wszystkieCzynszeL);

        $Lokale = $budzetModel->pobierzDaneOLokalachUzytkownika($_SESSION['uzytkownik']);
        $this->set('Lokale',$Lokale);


        $actWplywy = $budzetModel->pobierzAktualneWyplywy();
        $this->set('actWplywy',$actWplywy);

        $this->render('budzet/przegladajBudzet');
    }

    public function elementBudzetu($id) {
        $this->setNecessery();
        $budzetModel=$this->loadModel('budzet');

        $elementBudzetu=$budzetModel->pobierzSzczegolyWydatkowBudzetu($id);
        $this->set('elementBudzetu',$elementBudzetu);
        $this->render('budzet/elementBudzetu');
    }
    public function  przegladajPlanBudzetowy() {
        $this->setNecessery();
        $budzetModel= $this->loadModel('budzet');

        //todo wywołaj niezbedne funkcje modelu oraz zsetuj dane. 
        $budzet=$budzetModel->pobierzBudzet('planowany');
        $this->set('budzet',$budzet);

        $this->render('budzet/przegladajPlanBudzetowy');
    }

    public function elementPlanuBudzetowego($id) {
        $this->setNecessery();
        $budzetModel=$this->loadModel('budzet');
        
        $elementBudzetu=$budzetModel->pobierzSzczegolyWydatowPlanuBudzetowego($id);
        $this->set('elementBudzetu',$elementBudzetu);

        $this->render('budzet/elementPlanuBudzetowego');
    }
}
?>
