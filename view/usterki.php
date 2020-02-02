<?php

include 'view/view.php';

class UsterkiView extends View{
    public function  zglosUsterke() {
        $this->setNecessery();
        $this->render('usterki/zglosUsterke');
    }
    public function  przegladajUsterki() {
        $this->setNecessery();
        $usterkiModel= $this->loadModel('usterki');
        $this->set('usterki', $usterkiModel->pobierzUsterki());
        $this->render('usterki/usterki');
    }
    public function szczegolyUsterki($idUsterki) {
        $this->setNecessery();
        $usterkiModel=$this->loadModel('usterki');
        $this->set('szczegolyUsterki',$usterkiModel->pobierzSzczegolyUsterki($idUsterki));
        $this->render('usterki/szczegolyUsterki');
    }
}
?>
