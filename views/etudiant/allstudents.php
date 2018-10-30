<div class="container">

<?php if(isset($successMessage)) { ?>
<div class="alert alert-success"><?= $successMessage ?></div>
   <?php } ?>
        

<h2>Liste des Etudiants</h2>
    
  <a class="btn btn-success" role="button" href="<?= base_url('Etudiant/add') ?>"><img src="<?php echo base_url('res/svg/diff-added.svg') ?>"> Ajouter un étudiant</a>
            <a class="btn btn-warning" role="button" href="<?= base_url('Inscrit/index') ?>"><img src="<?php echo base_url('res/svg/clippy.svg') ?>" > Les inscriptions</a>  
            <a class="btn btn-secondary" role="button" href="<?= base_url('notedby/index') ?>">Toutes les notes</a>

        <br>
    <br>

 <div class="table-responsive">
  <table class="table">
<tr>
	<th>Prenom</th>
    <th>Nom</th>
    <th>email</th>
    <th>Actions Admin</th>
  


</tr>
    
<?php foreach ($listetudiants as $letudiant): ?>
<tr>
    <td><?= $letudiant['prenomStudent'] ?></td>
	<td><?= $letudiant['nomStudent'] ?></td>
    <td><?= $letudiant['emailStudent'] ?></td>
    <td>
    <a href="<?= base_url('Notedby/ficheStudent') ?>/<?=$letudiant['idStudent'] ?>" class="btn btn-info"><img src="http://localhost/MadrassAppBeta/res/svg/pencil.svg"> Fiche</a>
  
  
   
      <?php if ( $letudiant['user_id'] == 0) {
  ?>  
       <a href="<?= base_url('Examples/dakhla') ?>/<?=$letudiant['idStudent'] ?>" style="color: #28a745" class="btn btn-link" ><img src="http://localhost/MarmoozMadrassapp/res/svg/shield.svg"> Compte</a>


 <?php
}
    else {  ?>
   <a href="<?= base_url('Etudiant/deleteCompte') ?>/<?=$letudiant['idStudent'] ?>"  style="color: #b36a72" class="btn btn-link" ><img src="http://localhost/MarmoozMadrassapp/res/svg/shield.svg"> Compte</a>

<?php
    }
?>

  
      <a href="<?= base_url('index.php/Inscrit/addins') ?>/<?=$letudiant['idStudent'] ?>"class="btn btn-warning"><img src="http://localhost/MarmoozMadrassapp/res/svg/diff-added.svg"> Inscription</a>
        

        
        
        
          <a href="<?= base_url('Etudiant/delete') ?>/<?=$letudiant['idStudent'] ?>" class="btn btn-danger"><img src="http://localhost/MarmoozMadrassapp/res/svg/trashcan.svg"> Supprimer</a>




</td>


</tr>
<?php endforeach; ?>
    

  </table>
</div>
    
    
            

    
    </div>
