<?php
  $repInclude = './include/';
  require($repInclude . "_init.inc.php");

  // page inaccessible si visiteur non connecté
  if ( ! estVisiteurConnecte() ) {
        header("Location: cSeConnecter.php");  
  }
  require($repInclude . "_entete.inc.html");
  require($repInclude . "_sommaire.inc.php");

  
?>

  
<div id="contenu">          
<?php
  //Traitement Retrait echantillon
  $connexion=connecterServeurBD();
  $sql= "SELECT libelee FROM stockgeneral";
  $requete= mysqli_query($connexion, $sql) or die('Erreur SQL !<br />'.$sql. '<br />'.mysql_error());
  echo '<form>';
  echo 'Selectionner votre echantillon :';
  echo '<select name="echantillon" >';

    while ($row = mysqli_fetch_array($requete))     
      { 
     
      echo'<option>'.$row['libelee'].'</option>';
    
      }  
  
  echo '</select>';
  //Choisir quantité
  echo '<br>';
  echo 'Selectionner la quantité:';
  echo '<input type="text" name="quantité">';
  echo '<br>';
  echo '<input type="submit" value="valider"';
  echo '</form>';

  ?>
<?php
$unIdMedic = $_POST['echantillon'];
$uneQuantite = $_POST['quantité'];
?>

 </div>
<?php     
  require($repInclude . "_pied.inc.html");
  require($repInclude . "_fin.inc.php");
?>
        