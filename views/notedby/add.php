<h1>Ajouter une note à un etudiant </h1>
<form method="post" action="<?= base_url('Notedby/addnoteresponse') ?>/<?= $chkoun ?>">
   
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
    		<input type="text" name="note_S1" placeholder="Note S1" />
    		<input type="text" name="note_S2" placeholder="Note S2" />
    		<input type="text" name="note_Oral" placeholder="Note Oral" />

		<input type="submit" value="Ajouter une note" />

	</form>
