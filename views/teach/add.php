<div class="container">
    <h4><a href="<?= base_url('Enseignant/index') ?>">Gestion des enseignants</a></h4>

<h1>Affecter une matiere à un Enseignant</h1>

<form method="post" action="<?= base_url('teach/addresponse') ?>/">
   
   <select name="Lannee">
 <?php foreach ($lesannees as $zeyear): ?>
  <option value="<?= $zeyear['annee'] ?>"><?= $zeyear['annee']-1 ?>/<?= $zeyear['annee'] ?></option>
  <?php endforeach; ?>
</select>
  
 <select name="Lafiliere">
<?php foreach ($lesfilieres as $ft): ?>
  <option value="<?= $ft['idFiliere'] ?>"><?= $ft['nomFiliere'] ?></option>
  <?php endforeach; ?>
</select>
    
    
<select name="Lamatiere">
<?php foreach ($lesmatieres as $mt): ?>
  <option value="<?= $mt['idMatiere'] ?>"><?= $mt['nomMatiere'] ?></option>
  <?php endforeach; ?>
</select>
  
  <select name="LeTeacher">
<?php foreach ($lesteachers as $tc): ?>
  <option value="<?= $tc['idTeacher'] ?>"><?= $tc['nomTeacher'] ." ". $tc['prenomTeacher'] ?></option>
  <?php endforeach; ?>
</select>


<input type="text" name="nb_heure" placeholder="Nombre d'heure par semestre"/>
<input type="submit" value="Affecter la matière" />

	</form>



</div>



