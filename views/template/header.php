<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?= $metaTitle ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
-->



 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/css/material-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/demo/demo.css" rel="stylesheet" />

 <!-- Bootstrap CSS CDN  -->


   <!--   Our Custom CSS -->


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">





    
 <link rel="stylesheet" href="res/iconic-bootstrap.css">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	<!-- Optional theme 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
-->
    





    
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/stylesidebar.css') ?>" />
    
    
    
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/style.css') ?>" />


 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
 
    
  

    
    <style type="text/css">
        
        </style>

  <?php
    // Add any javascripts
    if( isset( $javascripts ) )
    {
      foreach( $javascripts as $js )
      {
        echo '<script src="' . $js . '"></script>' . "\n";
      }
    }

    if( isset( $final_head ) )
    {
      echo $final_head;
    }
  ?>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
<?php
if (isset($auth_role) ) {

    if ( $auth_role == 'admin' ) {  ?>
<nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img id="logomadrassapp" src="<?php echo base_url('res/images/madrassapplogo3.png') ?>" >
            </div>

            <ul class="list-unstyled components">
                <p>Version Bêta</p>
                <li class="active">
                    
                    <a class="nav-link" href="<?= base_url('examples'). '/home' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/home copie.png') ?>" />Tableau de bord</a>
                </li>
                <li>
                    <a href="<?= base_url('inscrit'). '/actuel' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/insc.png') ?>" />Inscrits</a>
                </li>
                                <li>
                    <a href="<?= base_url('Etudiant'). '/allstudents' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/classrooms.png') ?>" />Etudiants</a>
                </li>

                                
                <li>
                    <a href="<?= base_url('documents') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/docs.png') ?>" />Documents</a>
                </li>
             
                                


                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/modules.png') ?>" />Modules</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                            <a href="<?= base_url('Absence') ?>">Absences</a>
                        </li>
                            <li>
                            <a href="#">Notifications</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Inscrit') ?>">Paiement & Comptabilité</a>
                        </li>
                        
                        <li>
                            <a href="<?= base_url('Notedby') ?>">Plus de modules</a>
                        </li>
                        
                    </ul>
                </li>
               

                  <li>
                    <a href="<?= base_url('planning') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/planning.png') ?>" />Planning</a>
                </li>
                
               

                <li>
                    <a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/administration.png') ?>" />Administration</a>
                    <ul class="collapse list-unstyled" id="adminSubmenu">
                        <li>

                            <a href="<?= base_url('comporte') ?>">Configuration pédagogique</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Enseignant') ?>">Les enseignants</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Etudiant') ?>">Gestion des Accès</a>
                        </li>
                    </ul>
                </li>
               
                                 <li>
                    <a href="<?= base_url('datanalytics') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/data.png') ?>" />Data Analytics</a>
                </li>

            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?= base_url('Helpsupport') ?>" class="download">Aide & Support</a>
                </li>
                <li>
                    <a href="#" class="article">by Marmooz</a>
                </li>
            </ul>
    </nav>

<?php  }

if ( $auth_role == 'student' ) {  ?>
<nav id="sidebar">
            <div class="sidebar-header">
                <img id="logomadrassapp" src="<?php echo base_url('res/images/madrassapplogo3.png') ?>" >
            </div>

            <ul class="list-unstyled components">
                <p>Version Bêta</p>
                <li class="active">
                    
                    <a class="nav-link" href="<?= base_url('examples'). '/home' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/dashboard.svg') ?>" />Tableau de bord</a>
                </li>
 
           <li>


                    <a href="<?= base_url('etudiant/mynotes') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/book.svg') ?>" />Mes Notes</a>
                </li>

                  <li>
                    <a href="<?= base_url('planning') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/planning.png') ?>" />Mon Emploi du temps</a>
                </li>

                                
                <li>
                    <a href=""><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/docs.png') ?>" />Mes Documents</a>
                </li>
             
           <li>
                    <a href="#"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/credit-card.svg') ?>" />Mes Paiements</a>
                </li>


                                
                <li>
                    <a href="#"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/administration.png') ?>" />Mes Absences</a>
                </li>                            
                                   <li>
                    <a href="<?= base_url('Enseignant') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/organization.svg') ?>" />Mes Enseignants</a>
                </li>
                 <li>
                    <a href="<?= base_url('etudiant/myfiliere') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/clippy.svg') ?>" />Mes Inscriptions</a>
                </li>

            <li>
                    <a href="<?= base_url('etudiant/myfiliere') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/classrooms.png') ?>" />Mes Camarades</a>
                </li>
                    </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?= base_url('Helpsupport') ?>" class="download">Aide & Support</a>
                </li>
                <li>
                    <a href="#" class="article">by Marmooz</a>
                </li>
            </ul>
    </nav>
<?php  }


if ( $auth_role == 'teacher' ) {  ?>
<nav id="sidebar">
            <div class="sidebar-header">
                <img id="logomadrassapp" src="<?php echo base_url('res/images/madrassapplogo3.png') ?>" >
            </div>

            <ul class="list-unstyled components">
                <p>Version Bêta</p>
                <li class="active">
                    
                    <a class="nav-link" href="<?= base_url('examples'). '/home' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/dashboard.svg') ?>" />Tableau de bord</a>
                </li>
                      <li>
                    <a href="<?= base_url('planning') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/planning.png') ?>" />Mon Emploi du temps</a>
                </li>

                 <li>
                    <a href="<?= base_url('Enseignant/mesEtudiants') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/clippy.svg') ?>" />Mes Etudiants</a>
                </li>

                 <li>
                    <a href="<?= base_url('Enseignant/mesNotes') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/book.svg') ?>" />Mes Notes</a>
                </li>

                   <li>
                    <a href="<?= base_url('Enseignant/mesInfos') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/credit-card.svg') ?>" />Mes Infos</a>
                </li>
                   <li>
                    <a href="<?= base_url('Enseignant/mesMatieres') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/docs.png') ?>" />Mes Matières</a>
                </li>

                                
                <li>
                    <a href="#"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/docs.png') ?>" />Mes Documents</a>
                </li>

             
             
          

                                
                <li>
                    <a href="#"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/administration.png') ?>" />Mes Absences</a>
                </li>                            
                                   <li>
                    <a href="<?= base_url('Enseignant') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/organization.svg') ?>" />Mes Collegues</a>
                </li>
           

                            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?= base_url('Helpsupport') ?>" class="download">Aide & Support</a>
                </li>
                <li>
                    <a href="#" class="article">by Marmooz</a>
                </li>
            </ul>
    </nav>
<?php  }









}

?>
        

        <!-- Page Content  -->
        <div id="content">


  
<!--/.DEBUT CONTAINER -->

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MadrassApp</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">

                                <a class="nav-link" href="<?= base_url('examples'). '/home' ?>">Accueil</a>
                            </li>
                            
                            
                            <?php


        if (isset( $auth_user_id ) ) { ?>
                            <li class="nav-item">
          <a class="nav-link" href="<?= base_url('examples') ?>">Mon compte</a>  </li>
<li class="nav-item">
          <a class="nav-link" href="<?= base_url('examples'). '/logout' ?>">Déconnexion</a>  </li>

          <?php }
          else { ?>
        <li class="nav-item">  <a class="nav-link" href="<?= base_url('examples'). '/home' ?>">Accéder au cloud</a>  </li>

        <?php  }
          # code...
        
    ?>

                          
                       <!--
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>







    
    
    
    



