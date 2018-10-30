<h1>Ajouter une absence à un etudiant </h1>
<form method="post" action="<?= base_url('Absence/addabresponse') ?>/<?= $chkoun ?>">
   
    <!-- cf variables dans boucle -->


    <select name="Lannee">
 <?php foreach ($lesannees as $zeyear): ?>
  <option value="<?= $zeyear['annee'] ?>"><?= $zeyear['annee']-1 ?>/<?= $zeyear['annee'] ?></option>
  <?php endforeach; ?>
</select>
    <select name="Filiere">
 <?php foreach ($lesfilieres as $filiere): ?>
  <option value="<?= $filiere['idFiliere']?>"><?= $filiere['nomFiliere'] ?></option>
  <?php endforeach; ?>
</select>

<select name="Enseignant">
 <?php foreach ($lesenseignants as $enseignant): ?>
  <option value="<?= $enseignant['idTeacher']?>"><?= $enseignant['nomTeacher'] ?></option>
  <?php endforeach; ?>
</select>
    <select name="Matiere">
 <?php foreach ($lesmatieres as $matiere): ?>
  <option value="<?= $matiere['idMatiere']?>"><?= $matiere['nomMatiere'] ?></option>
  <?php endforeach; ?>
</select>
    		<input type="text" id="datepicker" name="datedelabsence" placeholder="Date de L'absence" />
    		<input type="text" name="justif" placeholder="Justification" />

		<input type="submit" value="Ajouter une absence" />

	</form>


 
 
 
