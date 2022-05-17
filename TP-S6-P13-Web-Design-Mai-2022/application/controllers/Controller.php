<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Controller extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->database();
		$this->load->model('Actu_Details');
		$this->load->model('Admin');
		$this->load->model('Theme');
		$this->load->model('Photo');
	
	}
	function slug($titre){
        $slug = preg_replace('/[^A-Za-z0-9-á-é-í-ó-ú-Á-É-Í-Ó-Ú-Â-Ê-Î-Ô-Û-Ä-Ë-Ï-Ö-Ü-À-Æ-Ç-É-È-Œ-Ù-æ-œ-]+/','-',$titre);
        return strtolower($slug);
    }

	public function index()
	{
		$data=array();
		$data['titre'] = "Accueil";
		$data['actus'] = $this->Actu_Details->getAllActu();
		$data['vue'] = "login-inscription.php";
		/*$this->output->cache(10);*/
		$this->load->view('index',$data);
		
	}	
	public function admin()
	{
		$data=array();
		$data['titre'] = "Login Admin";
		$data['actus'] = $this->Actu_Details->getAllActu();
		$data['vue'] = "login-inscription.php";
		/*$this->output->cache(10);*/
		$this->load->view('template',$data);
		
	}	


	public function accueil(){
		$data=array();
		$data['titre'] = "Accueil";
		$data['actus'] = $this->Actu_Details->getAllActu();
		/*$this->output->cache(10);*/
		$this->load->view('index',$data);
	}


	public function do_upload()
	{
			$config['upload_path']          = './assets/img';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 7000;
			$config['max_width']            = 7024;
			$config['max_height']           = 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('tsy nety', $error);
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					
					$filename=$_FILES['userfile']['name']; /*nom an'ilay sary ni telechargena */
					$insert['nom'] = $filename;
					$this->Photo->insertPhoto($insert);

					$this->load->view('nety', $data);

			}
	}
	public function details($id)
	{
	/*	$url = $_GET['url'];*/
		/*$id = $_GET['id'];

	/*	$slug_base = $this->Actu_Details->getActu($id);
		
		if($url != $slug_base['url'] ){
			var_dump("error");
		}
		else {*/
		
		$data=array();
		$data['actu'] = $this->Actu_Details->getActu($id);
		$data['titre'] = $data['actu']['titre'];
		$data['actus'] = $this->Actu_Details->getAllActu();
		/*$this->output->cache(10);*/
		$this->load->view('about',$data);
		/*	header("Location:".strtolower($slug_base['nom_theme'])."/".$this->slug($slug_base['titre'])."-".$slug_base['id'].".php");*/

		/*}*/
		
	}	

	public function insertActuDetails(){
		$data['idTheme'] = $this->input->post('theme');
		echo  $this->input->post('theme');
		$data['idPhoto'] = $this->input->post('photo');
		$data['titre'] = $this->input->post('titre');
		$data['descript'] = $this->input->post('descript');
		$data['contenus'] = $this->input->post('contenus');
		$data['daty'] = $this->input->post('daty');
		var_dump($this->input->post('theme'));
		/* url mbola tsy ao */
		/*$this->output->cache(10);*/
		$this->Actu_Details->insertActu($data);

	}

	

	public function verifLoginAdmin(){
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('mdp');
		$response = $this->Admin->checkLogin($nom,$mdp);

		if($response == true){
			$data['ph'] = $this->Photo->getAllPhoto();
			$data['th'] = $this->Theme->getAllTheme();
			$data['actus'] = $this->Actu_Details->getAllActu();
			/*$this->output->cache(10);*/
					$data['vue'] = "login-inscription.php";

			$data['titre'] = "Login Admin";
			$this->load->view('admin-accueil',$data);
		}
		else{
			
			$this->load->view('error');
		}
	}
	
	public function supprimer($id){

	}
}
