<?php
/** 
 * Page d'accueil de l'application web AppliFrais
 * @package default
 * @todo  RAS
 */
  $repInclude = './include/';
  require($repInclude . "_init.inc.php");

  // page inaccessible si visiteur non connecté
  if ( ! estVisiteurConnecte() ) 
  {
        header("Location: cSeConnecter.php");  
  }
  require($repInclude . "_entete.inc.html");
  require($repInclude . "_sommaire.inc.php");
?>

<?php
$sql = 'SELECT * FROM stockvisiteur';
$connexion=connecterServeurBD();
$req = mysqli_query($connexion,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on va scanner tous les tuples un par un
/*while ($data = mysqli_fetch_array($req)) {
  // on affiche les résultats
  echo 'Id visiteur : '.$data['idvisiteur'].'<br />';
  echo 'Id medicament : '.$data['idmedic'].'<br />';
  echo 'Quantite  :' .$data['quantite']. '</br>';
}*/

// debut du tableau
echo '<table bgcolor="#FFFFFF">'."\n";

        // première ligne on affiche les titres prénom et surnom dans 2 colonnes

  echo '<tr>';

  echo '<td bgcolor="#669999"><b><u>Id visiteur</u></b></td>';

  echo '<td bgcolor="#669999"><b><u>Id medecin</u></b></td>';

  echo '<td bgcolor="#669999"><b><u>Quantite</u></b></td>';

  echo '</tr>'."\n";

    // lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.    

    while($row = mysql_fetch_array($req, MYSQL_NUM)) {

        echo '<tr>';

        echo '<td bgcolor="#CCCCCC">'.$row["idvisiteur"].'</td>';

        echo '<td bgcolor="#CCCCCC">'.$row["idmedic"].'</td>';

      echo '<td bgcolor="#CCCCCC">'.$row["quantite"].'</td>';

      echo '</tr>'."\n";

    }

    echo '</table>'."\n";




mysqli_free_result ($req);
?>

<?php        
  require($repInclude . "_pied.inc.html");
  require($repInclude . "_fin.inc.php");
?>
