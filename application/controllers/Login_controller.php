<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function redirect_login(){
        $this->load->helper('css');
        $this->load->view('login');
    }

    public function login()
	{
        $this->load->model('login_model');
        $nom=$this->input->post('nom');
        $mdp=$this->input->post('mdp');
        $var = $this->login_model-> login($nom,$mdp);
       
        if($var == 1 ){
           // $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
            // $this->load->view('example');
            $this->load->helper('css');
            redirect(base_url('examples/fiche_management'));
        }
        else{
            $this->load->helper('css');
            $this->load->view('login');
        }
	}		
}
