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

        $this->render('budzet/przegladajBudzet');
    }

    public function elementBudzetu($id) {
        $this->setNecessery();
        $usterkiModel=$this->loadModel('budzet');

        //todo wywołaj niezbedne funkcje modelu oraz zsetuj dane.

        $this->render('budzet/elementBudzetu');
    }
    public function  przegladajPlanBudzetowy() {
        $this->setNecessery();
        $usterkiModel= $this->loadModel('budzet');

        //todo wywołaj niezbedne funkcje modelu oraz zsetuj dane. 

        $this->render('budzet/przegladajPlanBudzetowy');
    }

    public function elementPlanuBudzetowego($id) {
        $this->setNecessery();
        $usterkiModel=$this->loadModel('budzet');
        
        //todo wywołaj niezbedne funkcje modelu oraz zsetuj dane. 

        $this->render('budzet/elementPlanuBudzetowego');
    }
}
?>
