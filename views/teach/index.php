<pre>
<?php   if ( isset($mesetudz) ) {
    print_r($mesetudz); }

if(isset($successMessage)) {
    ?>
<div class="alert alert-success"><?= $successMessage ?></div>
   <?php }    


if ( isset($nozDet) ) {
    ?>
</pre>
    <h4><a href="<?= base_url('Enseignant/index') ?>">Gestion des enseignants</a></h4>


<h1>Les Matières Enseignées</h1>
<br>
<table>
<tr><th>Filiere</th>
    <th>Annee</th>
    <th>Matiere</th>
    <th>Enseignant</th>
    <th>Nombre d'heure</th>
        <th>Action</th>

 </tr>
    
<?php foreach ($nozDet as $data): ?>
<tr><td><?= $data['nomFiliere'] ?></td>
    <td><?= $data['annee'] ?></td>  
    <td><?= $data['nomMatiere'] ?></td>
    <td><?= $data['nomTeacher'] ?></td>
    <td><?= $data['nb_heures'] ?></td>
    <td> <a class="btn btn-danger" role="button" href="<?= base_url('teach/effacer') ?>/<?=$data['idTeacher'] ?>/<?=$data['idMatiere'] ?>/<?=$data['annee'] ?>/<?=$data['idFiliere'] ?>"><img src="http://localhost/MarmoozMadrassapp/res/svg/trashcan.svg"></a>

        <a class="btn btn-info" role="button" href="<?= base_url('teach/edit') ?>/<?=$data['idTeacher'] ?>/<?=$data['idMatiere'] ?>/<?=$data['annee'] ?>/<?=$data['idFiliere'] ?>"><img src="http://localhost/MarmoozMadrassapp/res/svg/pencil.svg"></a>
    </td>
</tr>
<?php endforeach; ?>
    </table>
 

    <?php
}

 ?>


 <a class="btn btn-warning" role="button" href="<?= base_url('teach/add') ?>">Affecter une Matière à un Enseignant</a>
