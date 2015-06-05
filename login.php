<?php

Class login extends CI_Controller {
	
	
	public function __construct ()
		{
		parent :: __construct();
		$this->load->model('login_model');
		$newdata = array(
                   'username'  => 'johndoe',
                   'email'     => 'johndoe@some-site.com',
                   'logged_in' => TRUE
               );

		$this->session->set_userdata($newdata);
		}
		
		public function index (){
								
								
								}
								
		public function do_login()
		{
			
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('login', 'login', 'required');
			
		$data = array(
				'user_name' => $this->input->post('login'),
				'user_pass' => $this->input->post('password'));
				
				$session_id = $this->session->userdata('session_id');
				echo $session_id;
			 			 
if ($this->form_validation->run() == FALSE)
				{
		
		$this->load->view('login/do_login');
	

				}
		else
				{
					
					$v = $this->login_model->my_fnc($data);
		if ( $v) 
		{
				echo 'Good Job!';}
		else {
				echo 'user is not!';
			 }
		
		}
			
			
			
			
			}
			
			
			
			
			
		}
		
	
	
	
	
	
	


?>
