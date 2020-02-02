<?php
include 'controller/controller.php';

class AplikacjaController extends Controller{
    public function dashboard() {
        if(!$this->sprawdzCzyZalogowany()){
            $this->redirect('?task=aplikacja&action=logowanie&error=Użytkownik nie jest zalogowany');
        }
        $view=$this->loadView('aplikacja');
        $view->dashboard();
    }
    public function logowanie() {
        $view=$this->loadView('aplikacja');
        $view->logowanie();
    }
    public function logowanieValidate() {
        $model=$this->loadModel('aplikacja');
        $uzytkownik=$model->logowanieValidate($_POST);
        if(isset($uzytkownik)){
            //zapisz użytkownika w sesji // TODO
            $this->redirect('?task=aplikacja&action=dashboard');
        }else{
            // dodaj coś do get // TODO
            $this->redirect('?task=aplikacja&action=logowanie&error=Złe dane logowania');
        }
    }
    public function zapomnialemHasla() {
        $view=$this->loadView('aplikacja');
        $view->zapomnialemHasla();
    }
    public function zapomnialemHaslaValidate() {
        $model=$this->loadModel('aplikacja');
        $pytaniePomocnicze=$model->zapomnialemHaslaValidate($_POST);
        if(isset($pytaniePomocnicze)){
            $this->redirect('?task=aplikacja&action=pytaniePomocnicze&'."pytaniePomocnicze=".$pytaniePomocnicze);
        }else{
            $this->redirect('?task=aplikacja&action=zapomnialemHasla&error=Zły adres e-mail');
        } 
    }
    public function pytaniePomocnicze() {
        if(isset($_GET['pytaniePomocnicze'])){
            $view=$this->loadView('aplikacja');
            $view->pytaniePomocnicze($_GET['pytaniePomocnicze']);
        }else{
            $this->redirect('?task=aplikacja&action=logowanie&'."error="."Nie ma takiego użytkownika");
        }
    }
    public function pytaniePomocniczeValidate() {
        $model=$this->loadModel('aplikacja');
        if($model->pytaniePomocniczeValidate($_POST)){
            $_SESSION['moznaZmienicHaslo']=true;
            $this->redirect('?task=aplikacja&action=zmienHaslo');
        }else{
            $this->redirect('?task=aplikacja&action=pytaniePomocnicze&error=Zła odpowiedź');
        }
    }
    public function zmienHaslo() {
        if((isset($_SESSION['uzytkownik'])&&isset($_SESSION['idWspolnoty'])) || isset($_SESSION['moznaZmienicHaslo'])){
            $view=$this->loadView('aplikacja');
            $view->zmienHaslo();
        }else{
            $this->redirect('?task=aplikacja&action=logowanie&error=Nie można zmienić hasła');
        }

    }
    public function zmienHasloPerform() {
        $model=$this->loadModel('aplikacja');
        if($model->zmienHasloPerform($_POST)){
            $this->redirect('?task=aplikacja&action=logowanie');
        }else{
            //dodaj cos do GET // TODO
            $this->redirect('?task=aplikacja&action=zmienHaslo&error=Nie udało się zmienić hasła');
        }
    }
}
?>
