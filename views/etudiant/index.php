<div class="container">

<?php if(isset($successMessage)) { ?>
<div class="alert alert-success"><?= $successMessage ?></div>
   <?php } ?>
        

<h2>Liste des Etudiants</h2>
    
  <a class="btn btn-success" role="button" href="<?= base_url('Etudiant/add') ?>"><img src="http://localhost/MarmoozMadrassapp/res/svg/diff-added.svg"> Ajouter un étudiant</a>
            <a class="btn btn-dark" role="button" href="<?= base_url('Inscrit/index') ?>"><img src="http://localhost/MarmoozMadrassapp/res/svg/clippy.svg" > Les inscriptions</a>  
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
    
<?php foreach ($lezEtudz as $letudiant): ?>
<tr>
    <td><?= $letudiant['prenomStudent'] ?></td>
	<td><?= $letudiant['nomStudent'] ?></td>
    <td><?= $letudiant['emailStudent'] ?></td>
    <td>
    <a href="<?= base_url('Etudiant/edit') ?>/<?=$letudiant['idStudent'] ?>" class="btn btn-info"><img src="http://localhost/MarmoozMadrassapp/res/svg/pencil.svg"> Fiche</a>
  


  
      <a href="<?= base_url('index.php/Inscrit/addins') ?>/<?=$letudiant['idStudent'] ?>"class="btn btn-warning"><img src="http://localhost/MarmoozMadrassapp/res/svg/diff-added.svg"> AddIns</a>
        
      <a href="<?= base_url('inscrit/edit') ?>/<?=$letudiant['idStudent'] ?>/<?=$letudiant['idFiliere'] ?>/<?=$letudiant['annee'] ?>" class="btn btn-info"><img src="http://localhost/MarmoozMadrassapp/res/svg/pencil.svg"> EditIns</a>
        
      <a href="<?= base_url('inscrit/desinscrire') ?>/<?=$letudiant['idStudent'] ?>/<?=$letudiant['idFiliere'] ?>/<?=$letudiant['annee'] ?>" class="btn btn-danger"><img src="http://localhost/MarmoozMadrassapp/res/svg/trashcan.svg">Desinc</a>
      
        
          <a href="<?= base_url('Etudiant/delete') ?>/<?=$letudiant['idStudent'] ?>" class="btn btn-danger"><img src="http://localhost/MarmoozMadrassapp/res/svg/trashcan.svg"><img src="http://localhost/MarmoozMadrassapp/res/svg/trashcan.svg"></a>



    
    <a href="<?=  base_url('Notedby/fiche') ?>/<?=  $letudiant['idStudent'] ?>" class="btn btn-warning"><img src="http://localhost/MarmoozMadrassapp/res/svg/file.svg"> Notes</a>
    <a href="<?=  base_url('Notedby/addnote') ?>/<?= $letudiant['idStudent'] ?>" class="btn btn-info"><img src="http://localhost/MarmoozMadrassapp/res/svg/diff.svg"> Ajouter</a>
</td>


</tr>
<?php endforeach; ?>
    

  </table>
</div>
    
    
            

    
    </div>
