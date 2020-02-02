<?php
//sprawdź czy użytkownik jest zalogowany. -----TODO

function callAction($controller){
    if(isset($_GET['action'])){
        $controller->{$_GET['action']}();
    }else{
        $controller->call('index');
    }
}

if(isset($_GET['task'])){
    if($_GET['task']=='categories') {
        include 'controller/categories.php';
        $ob = new CategoriesController();
        callAction($ob);
    } else if($_GET['task']=='articles') {
        include 'controller/articles.php';
        $ob = new ArticlesController();
        callAction($ob);
    }
    //=--------------prawilnie:
    else if($_GET['task']=='aplikacja') {
        include 'controller/aplikacja.php';
        $ob = new AplikacjaController();
        callAction($ob);
    }
    else if($_GET['task']=='usterki') {
        include 'controller/usterki.php';
        $ob = new UsterkiController();
        callAction($ob);
    }else if($_GET['task']=='budzet') {
        include 'controller/budzet.php';
        $ob = new BudzetController();
        callAction($ob);
    }
}
 else {
include 'controller/aplikacja.php';
    $ob = new AplikacjaController();
    $_GET['action']='logowanie';
    callAction($ob);
}
?>
