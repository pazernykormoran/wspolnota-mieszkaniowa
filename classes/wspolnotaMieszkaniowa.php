<?php 
class WspolnotaMieszkaniowa{
    private $id;
    private $nazwa;
    private $numerKonta;

    function __construct($id,$nazwa, $numerKonta) {
        $this->id=$id;
        $this->nazwa=$nazwa;
        $this->numerKonta=$numerKonta;
     }

     // todo zrobić gettery
}
?>