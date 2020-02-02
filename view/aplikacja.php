<?php

include 'view/view.php';

class AplikacjaView extends View{

    public function  dashboard() {
        $this->setNecessery();
        //todo wyciagnij z sesji i zsetuj informacje o użytkowniku do wyświetlania w dashboardzie TODO
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
    public function pytaniePomocnicze($pytaniePomocnicze) {
        $this->setNecessery();
        // pobierz pytanie pomocnicze z modelu oraz set pytanie pomocnicze TODO
        $this->set('pytaniePomocnicze',$pytaniePomocnicze);
        $this->render('aplikacja/pytaniePomocnicze');
    }
    public function zmienHaslo(){
        $this->setNecessery();
        $this->render('aplikacja/zmienHaslo');
    }
}
?>
