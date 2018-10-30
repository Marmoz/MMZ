<div class="container">



<div class="container homeadmin">
	<p>
<?php
echo 'Bienvenue Directeur ' . $auth_username;
?>	
</p>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
          <img alt="Homeicon" height="80px" width="80px" src="<?php echo base_url('res/images/etudianzer.png') ?>" />

                  </div>
                  <p class="card-category">Nombre d'inscrits</p>
                  <h3 class="card-title"><?php echo count($listetudiants);?>
                    <small>Etudiants</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="<?= base_url('inscrit'). '/actuel' ?>">Voir le détail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
          <img alt="Homeicon" height="80px" width="80px" src="<?php echo base_url('res/images/teacherzer.png') ?>" />
                  </div>
                  <p class="card-category">Corps Professoral</p>
                  <h3 class="card-title"><?php echo count($listeenseignants);?>
                  <small>Enseignants</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> 
                                        <a href="<?= base_url('teach') ?>">Voir la Liste</a>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
          <img alt="Homeicon" height="80px" width="80px" src="<?php echo base_url('res/images/filirezee.png') ?>" />


                  </div>
                  <p class="card-category">Formations Certifiantes</p>
                  <h3 class="card-title"><?php echo count($listefilieres);?>
                      <small>Filières</small>

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> 

                    <a href="<?= base_url('comporte') ?>">Voir plus</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
          <img alt="Homeicon" height="80px" width="80px" src="<?php echo base_url('res/images/notezer.png') ?>" />
                  </div>
                  <p class="card-category">Modules Enseignés</p>
                  <h3 class="card-title"><?php echo count($listematieres);?>
                                      <small>Matières</small>

                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> <a href="<?= base_url('Matiere') ?>">Voir plus</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Evolution des Etudiants</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> de Croissance pour les notes d'Examens</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Paiement Scolarité</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Utilisation de l'App</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Dernières notes ajoutées</h4>
                  <p class="card-category">New employees on 15th September, 2016</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-info">
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Matière</th>
                      <th>Filière</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>Maths</td>
                        <td>Réseaux Info</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>Anglais</td>
                        <td>Gestion d'entreprise</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>Marketing</td>
                        <td>Marketing International</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>Finance</td>
                        <td>Web Master</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

             <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Dernièrs Documents</h4>
                  <p class="card-category">New employees on 15th September, 2016</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Matière</th>
                      <th>Filière</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>Maths</td>
                        <td>Réseaux Info</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>Anglais</td>
                        <td>Gestion d'entreprise</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>Marketing</td>
                        <td>Marketing International</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>Finance</td>
                        <td>Web Master</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




<!-- 

<h4> Data Analytics </h4>  
<h5>
<?php /*
echo '<br> Nb Etudiants ' . count($listetudiants);
echo ' <br> Nb Enseignants ' . count($listeenseignants);
echo ' <br>Nb Filieres ' . count($listefilieres);
echo ' <br>Nb Matières ' . count($listematieres);
echo ' <br>Actuel Inscrits ' . count($listetudiants) ;
*/
?>	</h5>

<h4> Paiement et Comptabilité (pourcentage etudiants à jours)  </p>  


<h4> Notifications  </h4>  


<h4> Documents Administratifs  </h4>  
<h4> Dernieres notes ajoutes </p>  


<h4> Calendrier planning </h4> 
<h4> Evenements  </h4>  

<h4> Lien Web site /Social </h4> 

<h4> Infos Ecole  </h4> 

<h4> Candidature Préinscription </h4>  

<h4> Documentation Support  </p>  

<h4> Mises à jours/Infos Madrassapp  </p>  


   
	Nombre de Filière
	Nombre de Matière
	Nombre d'Etudiants
	Nombre de d'inscrit (Actuel)
	Notifications
	Eleve du mois
	Etat Comptabilité
	Site Web
	FaceBook
	
	Calendrier


-->
</div>

</div>

