
<div class="container">
 <h3>Liste des absences</h3>


<?php if(isset($successMessage)) {
    ?>
<div class="alert alert-success"><?= $successMessage ?></div>
   <?php }    ?>


<table>
<tr>
	<th>Student</th>
    <th>Teacher</th>
    <th>Matiere</th>
    <th>Date Absence</th>
    <th>Justification</th>
    <th>AS</th>
    <th>Actions</th>


</tr>
<?php foreach ($listabsence as $manote): ?>
<tr>	<td><?= $manote['idStudent'] ?></td>
    	<td><?= $manote['idTeacher'] ?></td>

	<td><?= $manote['idMatiere'] ?></td>
	<td><?= $manote['dateabsence'] ?></td>
    <td><?= $manote['justification'] ?></td>
    <td><?= $manote['annee']-1 .'/'. $manote['annee'] ?></td>
    <td>
        <a class="btn btn-danger" role="button" href="<?= base_url('Absence/effacer') ?>/<?=$manote['idStudent'] ?>/<?=$manote['idTeacher'] ?>/<?=$manote['idMatiere'] ?>/<?=$manote['annee'] ?>"><img src="http://localhost/MarmoozMadrassapp/res/svg/trashcan.svg"></a>

        
        <a class="btn btn-info" role="button" href="<?= base_url('Absence/edit') ?>/<?=$manote['idStudent'] ?>/<?=$manote['idTeacher'] ?>/<?=$manote['idMatiere'] ?>/<?=$manote['annee'] ?>"><img src="http://localhost/MarmoozMadrassapp/res/svg/pencil.svg"></a>
   
        <a href="<?=  base_url('Absence/addnote') ?>/<?= $manote['idStudent'] ?>" class="btn btn-warning"><img src="http://localhost/MarmoozMadrassapp/res/svg/diff-added.svg"></a>
    </td>
           
            



</tr>
<?php endforeach; ?>
</table>

     

        <a class="btn btn-success" role="button" href="<?= base_url('notedby/addnote') ?>">Ajouter une absence SOON</a>
</div>
