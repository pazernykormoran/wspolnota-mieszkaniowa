<?php

include 'view/view.php';

class UsterkiView extends View{
    public function  zglosUsterke() {
        $this->setNecessery();
        $usterkiModel= $this->loadModel('usterki');
        $this->set('adresy', $usterkiModel->pobierzAdresyBudynkowWspolnoty($_SESSION['idWspolnoty']));

        $this->render('usterki/zglosUsterke');
    }
    public function  przegladajUsterki() {
        $this->setNecessery();
        $usterkiModel= $this->loadModel('usterki');
        $this->set('usterki', $usterkiModel->pobierzUsterki("1"));
        $this->render('usterki/usterki');
    }
    public function szczegolyUsterki($idUsterki) {
        $this->setNecessery();
        $usterkiModel=$this->loadModel('usterki');
      //  $this->set('szczegolyUsterki',$usterkiModel->pobierzSzczegolyUsterki($idUsterki));
        $this->render('usterki/szczegolyUsterki');
    }
}
?>
