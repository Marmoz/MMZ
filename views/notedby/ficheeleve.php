<?php if(isset($successMessage)) {    ?>
<div class="alert alert-success"><?= $successMessage ?>
</div>   <?php  }    ?>
    

<!--
<pre>
<?php   // print_r($noqat);
// print_r($lesetudiants[$chkoun-1]);
   //    echo count($inafil);

    ?>

</pre>
 --> 

   <div class="container">
   

       <h2>Les Informations personnelles </h2> 
    
<div class="table-responsive">
<table class="table">
<tr><th>Identifiant</th>
	<th>Prenom</th>
    <th>Nom</th>
    <th>E-mail</th>
    <th>Date de naissance</th>
    <th>Compte n°</th>
    <th>Numéro de Téléphone</th>
    <th>Nom Contact</th>
    <th></th>
  


</tr>
    
<tr>    <td><?= $lesetudiants[$chkoun-1]['idStudent'] ?></td>

    <td><?= $lesetudiants[$chkoun-1]['prenomStudent'] ?></td>
	<td><?= $lesetudiants[$chkoun-1]['nomStudent'] ?></td>
    <td><?= $lesetudiants[$chkoun-1]['emailStudent'] ?></td>
    <td><?= $lesetudiants[$chkoun-1]['naissanceStudent'] ?></td>
    <td><?= $lesetudiants[$chkoun-1]['user_id'] ?></td>
    	<td><?= $lesetudiants[$chkoun-1]['nomStudent'] ?></td>
    <td><?= $lesetudiants[$chkoun-1]['emailStudent'] ?></td>



</tr>
    

  </table>
                    <a href="<?= base_url('Etudiant/edit') ?>/<?= $chkoun ?>" class="btn btn-info"> Modifier les informations</a>

</div>
       
       
       
  <br> <br> <br>   <br>  
<h2>Les Inscriptions </h2>  

       
       <br>

 <div class="table-responsive">
  <table class="table">
<tr>    <th>N° inscription</th>
	  <th>AS</th>
    <th>Filière</th>

    <th>Actions Admin</th>

</tr>
<?php foreach ($mesinsc as $uneinsc): ?>
<tr>  <td><?= $uneinsc['numInscription'] ?></td>
  <td><?= $uneinsc['annee']-1 ."/" .$uneinsc['annee'] ?></td>

	<td><?= $uneinsc['nomFiliere'] ?></td>


    <td>
      <a href="<?= base_url('notedby/downAttestation') ?>/<?=$uneinsc['idStudent'] ?>"class="btn btn-secondary"><img src="http://localhost/MarmoozMadrassapp/res/svg/desktop-download.svg"> Attestation</a>
      <a href="<?= base_url('inscrit/edit') ?>/<?=$uneinsc['idStudent'] ?>/<?=$uneinsc['idFiliere'] ?>/<?=$uneinsc['annee'] ?>" class="btn btn-info"><img src="http://localhost/MarmoozMadrassapp/res/svg/pencil.svg"> EditIns</a>
      <a href="<?= base_url('inscrit/desinscrire') ?>/<?=$uneinsc['idStudent'] ?>/<?=$uneinsc['idFiliere'] ?>/<?=$uneinsc['annee'] ?>" class="btn btn-danger"><img src="http://localhost/MarmoozMadrassapp/res/svg/trashcan.svg">Desinc</a>
      
</td>



</tr>
<?php endforeach; ?>

</table>
<a href="<?= base_url('index.php/Inscrit/addins') ?>/<?=$uneinsc['idStudent'] ?>"class="btn btn-warning"><img src="http://localhost/MarmoozMadrassapp/res/svg/diff-added.svg"> Ajouter une inscription</a>
</div>
       
       
       
   <br> <br>      <br> <br>     

<h2>Les Documents </h2> 
       
       <ul>
       <li>Attestation d'inscription</li>
                  <li>Certificat de scolarité</li>

                  <li>Bulletin</li>
                             <li>Convocation aux Examens </li>


       </ul>
       
        <br> <br> <br>        
<br> 
<h2>Notes et Résultats des examens</h2>
              <?php 
    if (!empty($noqat)) {
        echo '<h4>Bulletin de notes de '. $lesetudiants[$chkoun-1]['prenomStudent']. ' '. $lesetudiants[$chkoun-1]['nomStudent'].  '</h4>'  ; 
                       
       ?>
          
        <table>
<tr>
	<th>Matière</th>
    <th>Note Controle</th>
    <th>Note Exam</th>
    <th>Note S2</th>
    <th>Enseignant</th>

</tr>
<?php foreach ($noqat as $noqta): ?>
<tr>
	<td><?= $noqta['nomMatiere'] ?></td>
	<td><?= $noqta['note_S1'] ?></td>
    <td><?= $noqta['note_S2'] ?></td>
    <td><?= $noqta['note_Oral'] ?></td>
	<td><?= $noqta['nomTeacher'] ?></td>
</tr>
<?php endforeach; ?>

        </table>
       
       
       

<a class="btn btn-info" role="button" href="<?= base_url('Notedby/downPDF')?>/<?=$chkoun?>">TELECHARGER</a>

<?php file_put_contents('monbulletin.txt', var_export($noqat, TRUE));?>
       
       
       <?php
                       
                       }

    
    else { ?>
  <h4>Aucune note pour <?php echo  $lesetudiants[$chkoun-1]['prenomStudent']. ' '. $lesetudiants[$chkoun-1]['nomStudent'];  ?></h4>

     
              
  <?php  } ?>

    
    <a class="btn btn-info" role="button" href="<?= base_url('Notedby/addnote')?>/<?=$chkoun?>">Ajouter une note</a>
    
    

       <br><br>



</div>
