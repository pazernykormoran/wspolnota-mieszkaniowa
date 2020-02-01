<?php


include 'view/view.php';

class UsterkiView extends View{
    public function  zglosUsterke() {
        $this->render('usterki/zglosUsterke');
    }
    public function  przegladajUsterki() {
        $usterkiModel= $this->loadModel('usterki');
        $this->set('usterki', $usterkiModel->pobierzUsterki());
        $this->render('usterki/usterki');
    }
    public function szczegolyUsterki($idUsterki) {
        $usterkiModel=$this->loadModel('usterki');
        $this->set('szczegolyUsterki',$usterkiModel->pobierzSzczegolyUsterki($idUsterki));
        $this->render('usterki/szczegolyUsterki');
    }
}
?>
