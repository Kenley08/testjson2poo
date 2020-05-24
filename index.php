<?php
  require_once 'Modele/connexion.php';
  require_once 'Modele/Madresse.php';
  require_once 'Dao/adresseDao.php';
  try {
  $resultat=[];
  if(isset($_POST['btndeposer'])){

    $adresse=new adresse("1021","sud","Cavaillon","centre ville","jackson09@gmail.com");
    //echo $adresse->getId();
    //$adresse->setDepart("sud");
    //echo $adresse->depart;
    $ad=new adresseDao();
    $ad->insererdonnees($adresse);
  echo $adresse->getId();

  }

  } catch (PDOException $e) {
      die('Erreur:'.$e->getMessage());
  }

?>
<!DOCTYPE HTML>
<html>
    <head>
      <meta charset="utf-8">
      <title>Formulaire</title>
      <head>
        <body>

        <form action="index.php" method="post">
          <table>
            <thead>
              <tr>
                  <th><label for="txtnom">Votre nom:</label></th>
                    <th><label for="txtprenom">Votre Prenom:</label></th>
                      <th>  <label for="txteamil">Votre email:</label></th>
                        <th><label for="txtprenom">Votre message:</label></th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                      <td><input type="text" name="txtnom" placeholder="Nom:Fleurine" /></td>
                      <td><input type="text" name="txtprenom" placeholder="Ex:Kenley" /></td>
                      <td><input type="email" name="txtemail" placeholder="Ex:fleurinekenley@gmail.com" /></td>
                      <td><textarea name="txtmessage" placeholder="Laissez votre messaje ici"></textarea></td>
                      <td><input type="submit" name="btndeposer" value="Deposer le message"/></td>
                  </tr>
            </tbody>

          </table>









          </form>
        </body>

</html>
