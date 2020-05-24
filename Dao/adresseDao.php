<?php
    class adresseDao{
        // public function getAdresseUser(){
        //   $con=new connexion();
        //   if($con){
        //     $req="select Id_adr,Departement,Commune,Adresse,Email from tbladresse";
        //     $cont=$con->executerequete2($req);
        //
        //   //  $req->closeCursor();
        //     $con->closeconnexion();
        //
        //   }
        //
        //   return $cont;
        // }

      public static function insererdonnees($adresse){
      $con=new connexion();
      $con->executeactualisation("insert into tbladresse (Id_adr,Departement,Commune,Adresse,Email) values('" . $adresse->idadr . "','" . $adresse->depart. "','" . $adresse->com. "','" . $adresse->adr. "','" . $adresse->email. "')");
      $con->closeconnexion();
    }
    }
?>
