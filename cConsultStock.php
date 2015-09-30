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
echo '<div id="contenu">';
echo '<table width="100%" length="80%">';
 
$rows = mysqli_fetch_assoc($req);
echo '<tr><th>', implode('</th><th>', array_keys($rows)), '</th></tr>';
 
do {
    echo '<tr><td>', implode('</td><td>', $rows), '</td></tr>';
} while($rows = mysqli_fetch_assoc($req));


mysqli_free_result ($req);
echo '</table>';
echo '</div>';
?>

<?php        
  require($repInclude . "_pied.inc.html");
  require($repInclude . "_fin.inc.php");
?>