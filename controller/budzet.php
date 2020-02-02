<?php
include 'controller/controller.php';

class BudzetController extends Controller{

    public function przegladajBudzet() {
        $view=$this->loadView('budzet');
        $view->przegladajBudzet();
    }
    public function elementBudzetu() {
        if(isset($_GET['idElementuBudzetu'])){
            $view=$this->loadView('budzet');
            $view->elementBudzetu();
        }else{
            $this->redirect('?task=budzet&action=przegladajBudzet&info=Błąd, nie ma takiego wydatku');
        }
    }
    public function przegladajPlanBudzetowy() {
        $view=$this->loadView('budzet');
        $view->przegladajPlanBudzetowy();
    }
    public function elementPlanuBudzetowego() {
        if(isset($_GET['idElementuPlanuBudzetowego'])){
            $view=$this->loadView('budzet');
            $view->elementBudzetu();
        }else{
            $this->redirect('?task=budzet&action=przegladajBudzet&info=Błąd, nie ma takiego wydatku');
        }
    }
}
?>
