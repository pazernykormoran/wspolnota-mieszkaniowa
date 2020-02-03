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
