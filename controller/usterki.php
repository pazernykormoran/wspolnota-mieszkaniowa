<?php
include 'controller/controller.php';

class UsterkiController extends Controller{

    public function zglosUsterke() {
        $view=$this->loadView('usterki');
        $view->zglosUsterke();
    }
    public function zglosUsterkePerform() {

        echo $postArray['login']
     //   if(isset($postArray['login'])&&isset($postArray['haslo'])){
            
      //  }

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
        if(isset($_GET['idUsterki'])){
            $view=$this->loadView('usterki');
            $view->szczegolyUsterki($_GET['idUsterki']);
        }else{
            $this->redirect('?task=usterki&action=przegladajUsterki&info=Błąd, nie ma takiej usterki');
        }
    }
}
?>
