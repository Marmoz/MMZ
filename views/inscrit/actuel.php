<?php if(isset($successMessage)) {
    ?>
<div class="alert alert-success"><?= $successMessage ?></div>
   <?php }    ?>

<?php if(isset($errorMessage)) {
    ?>
<div class="alert alert-success"><?= $errorMessage ?></div>
   <?php }    ?>

<div class="container">
    
    <h2>Actuellement inscrits
</h2>



<?php if(isset($inafil[0])) {
    ?>
    <h6>Tous les étudiants inscrits pour l'année scolaire <?= $inafil[0]['annee']-1 ."/" .$inafil[0]['annee'] ?>
</h6>
   <?php }    ?>





    <br>

<!--
  <a href="<?php // echo base_url('index.php/Inscrit/edit') ?>/<?php // echo$inafil[$i]['idStudent'] ?>" class="btn btn-default">Modifier une une inscription</a>
 
<pre>
<?php    //print_r($inafil);
   //    echo count($inafil);
    
    ?>
</pre>

 -->  



    
    <div class="table-responsive">

  <table class="table">
           
           


<tr>    <th>N°</th>
    
    <th>Nom</th>
    <th>Filiere</th>

    <th>Actions Admin</th>
<th>Actions Teacher</th>
</tr>
      
         <?php  

    
    
    
    
    
    foreach ($inafil as $uneins ) {
?>

 
<tr> 

    <td><?= $uneins['numInscription'] ?></td>

  <td><?= $uneins['prenomStudent'] . ' '. $uneins['nomStudent'] ?></td>
        <td><?= $uneins['nomFiliere'] ?></td>


    <td><a href="<?= base_url('Notedby/ficheStudent') ?>/<?=$uneins['idStudent'] ?>" class="btn btn-info"><img class="lewwensvg" src="http://localhost/MarmoozMadrassapp/res/svg/eye.svg"> Fiche</a>
        

    <a href="<?=  base_url('Absence/addAbsence') ?>/<?= $uneins['idStudent'] ?>" class="btn btn-dark"> Absence</a>

  

   
      <?php if ( $uneins['user_id'] == 0) {
  ?>  
       <a href="" class="btn btn-success"><img src="http://localhost/MarmoozMadrassapp/res/svg/check.svg"> Pay</a>


 <?php
}
    else {  ?>
   <a href="" class="btn btn-danger"><img src="http://localhost/MarmoozMadrassapp/res/svg/x.svg"> Pay</a>

<?php
    }
?>
</td>
  <td>
    <a href="<?=  base_url('Notedby/fiche') ?>/<?=  $uneins['idStudent'] ?>" class="btn btn-warning"><img src="http://localhost/MarmoozMadrassapp/res/svg/file.svg"> Notes</a>
    <a href="<?=  base_url('Notedby/addnote') ?>/<?= $uneins['idStudent'] ?>" class="btn btn-info"><img src="http://localhost/MarmoozMadrassapp/res/svg/diff.svg"> Ajouter</a>
</td>


</tr>

  <?php
      
     } 
        
        
?>
    
       
      
      
      
</table>

</div>



 
    
   
    


 
    </div>