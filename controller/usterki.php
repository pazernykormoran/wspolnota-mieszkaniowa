<?php
include 'controller/controller.php';

class UsterkiController extends Controller{

    public function zglosUsterke() {
        $view=$this->loadView('usterki');
        $view->zglosUsterke();
    }
    public function zglosUsterkePerform() {
        $model=$this->loadModel('usterki');
        if($model->zglosUsterkePerform($_POST)){
            $this->redirect('?task=aplikacja&action=dashboard&info=Usterka została pomyślnie zgłoszona');
        }else{
            $this->redirect('?task=aplikacja&action=dashboard&info=Błąd, nie udało się zgłosić usterki');
        }
    }
    public function przegladajUsterki() {
        $view=$this->loadView('usterki');
        $view->przegladajUsterki();
    }
    public function szczegolyUsterki() {
        $view=$this->loadView('usterki');
        if(isset($_GET['idUsterki'])){
            $view->szczegolyUsterki($_GET['idUsterki']);
        }else{
            $this->redirect('?task=usterki&action=przegladajUsterki&info=Błąd, nie ma takiej usterki');
        }
    }
}
?>
