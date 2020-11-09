<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
		
		
	
	public function index()
	{
        $data['title']="GenCom";
        
        $this->load->view('view1',$data);
		$this->load->view('header');
		
		
		$js['js']= $this->config->item('js');
		$this->config->config['base_url'];
		$this->load->view('footer',$js);
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules("search","Search","required",
		array('required'=>'Vous n\'avez pas saisie d\'information à rechercher')
	);
		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('formulaire');
		}
		else{
			$this->load->view('result');
		}
			
		
		

		
		
			
		
		
		
        
	}
	
	
		
		
	
	

	
	
   
    
}
