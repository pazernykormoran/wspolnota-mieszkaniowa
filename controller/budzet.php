<?php
include 'controller/controller.php';

class BudzetController extends Controller{

    public function call($name){
        if($name=="index") $this->index();
        if($name=="one") $this->one();
        if($name=="add") $this->add();
        if($name=="insert") $this->insert();
        if($name=="delete") $this->delete();
    }

    public function index() {
        $view=$this->loadView('logowanie');
        $view->index();
    }
    public function logowanieValidate() {
        $model=$this->loadModel('logowanie');
        $model->logowanieValidate($_POST);
        $this->redirect('?task=aplikacja&action=dashboard');
    }
    public function add() {
        $view=$this->loadView('articles');
        $view->add();
    }
    public function insert() {
        $model=$this->loadModel('articles');
        $model->insert($_POST);
        $this->redirect('?task=articles&action=index');
    }
    public function delete() {
        $model=$this->loadModel('articles');
        $model->delete($_GET['id']);
        $this->redirect('?task=articles&action=index');
    }
}
?>
