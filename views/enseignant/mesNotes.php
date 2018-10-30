<pre>
<?php  //	print_r($nozFili); 
// print_r($monID);
//print_r($zenotes);
 ?>


<table>
<tr><th>Annee</th>
	<th>Filiere</th>
	<th>Matiere</th>
	<th>Etudiant</th>
  	<th>Note S1</th>
    	<th>Note S2</th>
  	<th>Note Oral</th>

    

</tr>
    
<?php foreach ($zenotes as $data): ?>
<tr><td><?= $data['annee']-1 ."/". $data['annee'] ?></td>
	<td><?= $data['nomFiliere'] ?></td>
 <td><?= $data['nomMatiere'] ?></td>
 	<td><?= $data['nomStudent'] .' '. $data['prenomStudent'] ?></td>

	<td><?= $data['note_S1'] ?></td>     
	<td><?= $data['note_S2'] ?></td>     
	<td><?= $data['note_Oral'] ?></td>     

</tr>
<?php endforeach; ?>
    

</table>
 

</pre>