<?php
  class adresse{
      public $idadr;
      public $depart;
      public $com;
      public$adr;
      public $email;

      // public function __construct(){
      //   $this->idadr="";
      //   $this->depart="";
      //   $this->com="";
      //   $this->adr="";
      //   $this->email="";
      // }

      public function __construct($idadr,$depart,$com,$adr,$email){
        $this->idadr=(string)$idadr;
        $this->depart=(string)$depart;
        $this->com=(string)$com;
        $this->adr=(string)$adr;
        $this->email=(string)$email;
      }

      public function getId(){
        return $this->idadr;
      }

      public function setDepart($depart){
        $this->depart=$depart;
      }


  }
?>
