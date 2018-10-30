<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Calendar DEMO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css">
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/tui-calendar-master/dist/tui-calendar.css'); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/tui-calendar-master/examples/css/default.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('res/tui-calendar-master/examples/css/icons.css'); ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/style.css') ?>" />

</head>
<body>

<div id="ZECALENDAR">

    <div id="lnb">
        <nav id="sidebar">
            <div class="sidebar-header">
               <a href="<?php echo base_url() ?>"> <img id="logomadrassapp" src="<?php echo base_url('res/images/madrassapplogo3.png') ?>" ></a>
            </div>
            <div class="plansidebar">
                
            
                <h5>PLANNING Version Bêta</h5>
</div>

<!--
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


        -->
    </nav>

        <div class="lnb-new-schedule">
            <button id="btn-new-schedule" type="button" class="btn btn-default btn-block lnb-new-schedule-btn" data-toggle="modal">
                Ajouter un cours</button>
        </div>
        <div id="lnb-calendars" class="lnb-calendars">
            <div>
                <div class="lnb-calendars-item">
                    <label>
                        <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all" checked>
                        <span></span>
                        <strong>Voir toutes les filières</strong>
                    </label>
                </div>
            </div>
            <div id="calendarList" class="lnb-calendars-d1">
            </div>
        </div>
        <div class="lnb-footer">
MardrassApp        </div>
    </div>
    <div id="right">
        <div id="menu">
            <span class="dropdown">
                <button id="dropdownMenu-calendarType" class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    <i id="calendarTypeIcon" class="calendar-icon ic_view_month" style="margin-right: 4px;"></i>
                    <span id="calendarTypeName">Dropdown</span>&nbsp;
                    <i class="calendar-icon tui-full-calendar-dropdown-arrow"></i>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily">
                            <i class="calendar-icon ic_view_day"></i>Jour
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly">
                            <i class="calendar-icon ic_view_week"></i>Semaine
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly">
                            <i class="calendar-icon ic_view_month"></i>Month
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2">
                            <i class="calendar-icon ic_view_week"></i>2 weeks
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3">
                            <i class="calendar-icon ic_view_week"></i>3 weeks
                        </a>
                    </li>
                    <li role="presentation" class="dropdown-divider"></li>
                    <li role="presentation">
                        <a role="menuitem" data-action="toggle-workweek">
                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-workweek" checked>
                            <span class="checkbox-title"></span>Show weekends
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" data-action="toggle-start-day-1">
                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-start-day-1" checked="checked">
                            <span class="checkbox-title"></span>Start Week on Monday
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" data-action="toggle-narrow-weekend">
                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-narrow-weekend">
                            <span class="checkbox-title"></span>Narrower than weekdays
                        </a>
                    </li>
                </ul>
            </span>
            <span id="menu-navi">
                <button type="button" class="btn btn-default btn-sm move-today" data-action="move-today">Aujourd'hui</button>
                <button type="button" class="btn btn-default btn-sm move-day" data-action="move-prev">
                    <i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm move-day" data-action="move-next">
                    <i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i>
                </button>
            </span>
            <span id="renderRange" class="render-range"></span>
        </div>
        <div id="calendar" style="height: 600px;"></div>
    </div>


</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.code-snippet/latest/tui-code-snippet.min.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.min.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chance/1.0.13/chance.min.js"></script>
    <script src="<?php echo base_url('res/tui-calendar-master/dist/tui-calendar.js'); ?>"></script>
    <script src="<?php echo base_url('res/tui-calendar-master/examples/js/data/calendars.js'); ?>"></script>
    <script src="<?php echo base_url('res/tui-calendar-master/examples/js/data/schedules.js'); ?>"></script>
    <script src="<?php echo base_url('res/tui-calendar-master/examples/js/theme/dooray.js'); ?>"></script>
    <script src="<?php echo base_url('res/tui-calendar-master/examples/js/default.js'); ?>"></script>
</body>
</html>



