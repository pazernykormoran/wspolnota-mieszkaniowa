<?php

include 'view/view.php';

class AplikacjaView extends View{

    public function  dashboard() {
        $this->setNecessery();
        //todo wyciagnij z sesji i zdetuj ifnroaje o użytkowniku itd. TODO
        $this->render('aplikacja/dashboard');
    }
    public function  logowanie() {
        $this->setNecessery();
        $this->render('aplikacja/logowanie');
    }
    public function zapomnialemHasla() {
        $this->setNecessery();
        $this->render('aplikacja/zapomnialemHasla');
    }
    public function pytaniePomocnicze() {
        $this->setNecessery();
        // pobierz pytanie pomocnicze z modelu oraz set pytanie pomocnicze TODO
        $this->render('aplikacja/pytaniePomocnicze');
    }
    public function zmienHaslo(){
        $this->setNecessery();
        $this->render('aplikacja/zmienHaslo');
    }
}
?>
