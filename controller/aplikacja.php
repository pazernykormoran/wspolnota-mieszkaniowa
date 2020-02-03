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
        if($this->czyWczytanoPytPomocnicze()){
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
        if($this->czyMoznaZmienicHaslo()){
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

<<<<<<< HEAD
    public function wyloguj() {
        //zapisz dane do bazy. (email pobierz z sesji jako email zapisany w funkcji zapomniałęm hasło albo po prostu z użytkownika zapisanego w sesji jeśli jest zalogowany)
            //postarray ma "haslo"

        //zwraca bool czy udało się zapisać

        unset($_SESSION['uzytkownik']);
        unset($_SESSION['idWspolnoty']);
        $this->redirect('?task=aplikacja&action=logowanie&info=Pomyślnie wylogowano');
    }
=======
>>>>>>> 3836750e8de34edfcee8c8f939c3fc4e731b8955
    private function czyMoznaZmienicHaslo() {
        if((isset($_SESSION['uzytkownik'])&&isset($_SESSION['idWspolnoty'])) || isset($_SESSION['moznaZmienicHaslo'])){
            return true;
        }
        else {
            return false;
        }
    }

    private function czyWczytanoPytPomocnicze() {
        if(isset($_GET['pytaniePomocnicze'])){
            return true;
        }
        else {
            return false;
        }
    }
}
?>
