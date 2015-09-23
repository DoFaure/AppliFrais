 <?php
  $repInclude = './include/';
  require($repInclude . "_init.inc.php");
  require($repInclude . "_entete.inc.html");
  require($repInclude . "_sommaire.inc.php");
  // traitement des distribution
  $connexion = connecterServeurBD();
?>
 <form id="frmConnexion" action="" method="post">
        <label for="idPatient" accesskey="n">ID Patient : </label>
        <input type="text" id="IdPatient" name="IdPatient" maxlength="20" size="15" value="" title="Entrez votre ID" />
      </p>
      <p>
        <label for="medicamentDonner" accesskey="m">Medicament prescript : </label>
        <input type="text" id="medicamentDonner" name="medicamentDonner" maxlength="8" size="15" value=""  title="Entrez le medicament prescrit"/>
		 <label for="medicamentDonner" accesskey="m">Quantiter : </label>
        <input type="text" id="quantiter" name="quantiter" maxlength="8" size="15" value=""  title="Entrez la quandtiter"/>
      </p>
      </div>
      <p>
        <input type="submit" id="ok" value="Valider" />
        <input type="reset" id="annuler" value="Effacer" />
      </p> 
      </div>
      </form>
    </div>
<?php
  require($repInclude . "_pied.inc.html");
  require($repInclude . "_fin.inc.php");
 ?>