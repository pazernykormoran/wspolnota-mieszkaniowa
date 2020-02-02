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
        $usterkiModel= $this->loadModel('budzet');

        //todo wywołaj niezbedne funkcje modelu oraz zsetuj dane. 
        $query="SELECT a.id, a.title, a.date_add, a.autor, c.name FROM articles AS a 
        LEFT JOIN categories AS c ON a.id_categories=c.id";
        
        $select=$this->pdo->query($query);

        $budzetArray=[];
        array_push($budzetArray,new Budzet('id',1234,'typ','wspolnota',array()));
        $this->set('budzetArray',$budzetArray);
        $planWydatkowArray=[];
        array_push($planWydatkowArray,new PlanWydatku('id',2,342,'nazwa','kategoria',array() ));

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
