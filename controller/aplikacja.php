<?php
include 'controller/controller.php';

class AplikacjaController extends Controller{
    public function dashboard() {
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
            $this->redirect('?task=aplikacja&action=logowanie');
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
            //dodaj coś do get. //TODO
            $this->redirect('?task=aplikacja&action=zapomnialemHasla');
        } 
    }
    public function pytaniePomocnicze() {
        $view=$this->loadView('aplikacja');
        $view->pytaniePomocnicze();
    }
    public function pytaniePomocniczeValidate() {
        $model=$this->loadModel('aplikacja');
        if($model->pytaniePomocniczeValidate($_POST)){
            //zapisz do sesji, że można zmienić hasło, TODO
            $this->redirect('?task=aplikacja&action=zmienHaslo');
        }else{
            //dodaj coś do get ??TODO
            $this->redirect('?task=aplikacja&action=pytaniePomocnicze');
        }
    }
    public function zmienHaslo() {
        //sprawdź czy użytkownik jest zalogowany albo czy ustawione jest w sesji, że można zmienić hasło. jeśli nie to powrót na stonę logowanie: TODO
        $view=$this->loadView('aplikacja');
        $view->zmienHaslo();
    }
    public function zmienHasloPerform() {
        $model=$this->loadModel('aplikacja');
        if($model->zapomnialemHaslaValidate($_POST)){
            $this->redirect('?task=aplikacja&action=logowanie');
        }else{
            //dodaj cos do GET // TODO
            $this->redirect('?task=aplikacja&action=zmienHaslo');
        }
    }
}
?>
