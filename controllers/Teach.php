<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teach extends MY_Controller {
    
    public function __construct() {
		parent:: __construct();
        $this->load->model('filiere_model');
         $this->load->model('enseignant_model');
        $this->load->model('matiere_model');
        $this->load->model('inscrit_model');
        $this->load->model('teach_model');


	} 


	public function index()
	{if( $this->require_role('admin') )
{
        
		$data = array(  'metaTitle' => 'Liste détaillée des matières enseignées | MadrassApp',
                      'nozDet' => $this->teach_model->givemeall(),

		);

        $this->load->view('template/header', $data);
		$this->load->view('teach/index', $data);
		$this->load->view('template/footer', $data);
		}

else{ redirect('examples/optional_login_test');	}
	}
    

    

       	public function add()
	{if( $this->require_role('admin') )
{
            
            		$data = array(
            'metaTitle' => 'Ajouter des Matiere/Enseignant | MadrassApp',
            'lesfilieres' => $this->filiere_model->give_all(),
            'lesmatieres' => $this->matiere_model->give_all(),
            'lesteachers' => $this->enseignant_model->give_all(),
            'lesannees' => $this->inscrit_model->give_AnneeScolaire(),


		);
		$this->load->view('template/header', $data);
		$this->load->view('teach/add');
		$this->load->view('template/footer', $data);
		}

else{ redirect('examples/optional_login_test');	}
            
            
	}
    
        public function addresponse()
	{if( $this->require_role('admin') )
{

		$data = array(          
            
                      'idFiliere' => $this->input->post('Lafiliere'),
                      'idMatiere' => $this->input->post('Lamatiere'),
                       'annee' => $this->input->post('Lannee'),
                       'idTeacher' => $this->input->post('LeTeacher'),
                       'nb_heures' => $this->input->post('nb_heure')
                     );

		// Créer une entrer, verifier true, affecter $success
		// PB Affichage errorMessage
		$success = $this->teach_model->create($data) === true;
            
           	$data = array(  
                      'nozDet' => $this->teach_model->givemeall(),

     );

		
		if ($success) {
			$data['successMessage'] = "La matière a été ajouté avec succès à l'Enseignant !";
            $data['metaTitle'] = "Liste des Matiere/filieres | MadrassApp";

            
            $this->load->view('template/header', $data);
            $this->load->view('teach/index', $data);
		      $this->load->view('template/footer', $data);
		}		
		else {
			$data['errorMessage'] = "Une erreur a eu lieu, matière non ajoutée.";
            $data['metaTitle'] = "Ajouter des Matiere/filieres | MadrassApp";

        $this->load->view('template/header', $data);
        $this->load->view('teach/add', $data);
		$this->load->view('template/footer', $data);
		}
		}

else{ redirect('examples/optional_login_test');	}

            
	}
    
        public function effacer($idTeacher,$idMatiere, $annee,$idFiliere)
	{   if( $this->require_role('admin') )
{        
            $success = $this->teach_model->deleteTeach($idTeacher,$idMatiere,$annee, $idFiliere) === true;    
            
                     	$data = array(  
                      'nozDet' => $this->teach_model->givemeall(),

     );

			if ($success) {
			$data['successMessage'] = "La matière enseignée effacée avec succès !";  
		}		
		else {
			$data['errorMessage'] = "Une erreur a eu lieu, note non effacée.";}
      
        $data['metaTitle'] = "Liste des matières enseignées | MadrassApp";        
        $this->load->view('template/header', $data);
        $this->load->view('teach/index', $data);
		$this->load->view('template/footer', $data); 

        }

else{ redirect('examples/optional_login_test'); }           
	}


    
    
    

    
    public function edit($idTeacher,$idMatiere, $annee,$idFiliere)
	{  if( $this->require_role('admin') )
{   
                
                $data = array(
                           'nozDet' => $this->teach_model->givemeall(),
                                'lesfilieres' => $this->filiere_model->give_all(),
            'lesmatieres' => $this->matiere_model->give_all(),
            'lesteachers' => $this->enseignant_model->give_all(),
            'lesannees' => $this->inscrit_model->give_AnneeScolaire(),
            'idFiliere' => $idFiliere,
            'idTeacher' => $idTeacher,
            'idMatiere' => $idMatiere,
            'annee' => $annee,

		);
		$this->load->view('template/header', $data);
		$this->load->view('teach/update',$data);
		$this->load->view('template/footer');   

		}

else{ redirect('examples/optional_login_test');	}      
            }
    
    

    public function editresponse($idTeacher,$idMatiere, $annee,$idFiliere)
	{if( $this->require_role('admin') )
{

		$data = array( 
			'nb_heures' => $this->input->post('nb_heure')                    
                     );

		// Créer une entrer, verifier true, affecter $success
		// PB Affichage errorMessage
		$success = $this->teach_model->update($idTeacher,$idMatiere, $annee,$idFiliere, $data) === true;
            
           	$data = array(  
                           'nozDet' => $this->teach_model->givemeall(),


     );	
			if ($success) {
			$data['successMessage'] = "Modifs avec succès !";       }
	
		else {
			$data['errorMessage'] = "Une erreur a eu lieu, La Matiere non modifiée. Veuillez réessayer.";
         }
            $data['metaTitle'] = "Liste des Matieres Enseignées | MadrassApp";    
                
            $this->load->view('template/header', $data);
			$this->load->view('teach/index', $data);
            $this->load->view('template/footer', $data);
    }

else{ redirect('examples/optional_login_test');	}
                    }
    
    
   }
