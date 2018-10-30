<div class="container">
	    <h4><a href="<?= base_url('Enseignant/index') ?>">Gestion des enseignants</a></h4>

<h1>Modifier la matiere enseignée</h1>




<form method="post" action="<?= base_url('teach/editresponse') ?>/<?= $idTeacher ?>/<?= $idMatiere ?>/<?= $annee ?>/<?= $idFiliere ?>">   


	    <select name="Lafiliere">
        <option value="<?= $idFiliere ?>"><?= $idFiliere ?></option> 
</select>
        <select name="Lenseignant">
        <option value="<?= $idTeacher ?>"><?= $idTeacher ?></option> 
</select>
        <select name="Lamatiere">
        <option value="<?= $idMatiere ?>"><?= $idMatiere ?></option> 
</select>


   <select name="Lannee">
  <option value="<?= $annee ?>"><?= $annee-1 ?>/<?= $annee ?></option>
</select>
  



<input type="text" name="nb_heure" placeholder="Nombre d'heure par semestre"/>
<input type="submit" value="Affecter la matière" />

	</form>





</div>



