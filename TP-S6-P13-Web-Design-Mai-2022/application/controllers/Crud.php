<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('User');
	}
        /*Insert*/
	public function saveUser()
	{
		/*load registration view form*/
		$this->load->view('login-inscription');
	
		/*Check submit button */
		if($this->input->post('register'))
		{
		    $data['nom']=$this->input->post('nom');
			$data['email']=$this->input->post('email');
			$data['mdp']=$this->input->post('mdp');
			$response=$this->User->insertUser($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
	
}
?>