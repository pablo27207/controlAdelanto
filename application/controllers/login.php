<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

     
    public function __construct() {
        parent::__construct();
       
    }

	public function index($data = null)
	{
        if ($this->session->userdata('logged_in')) {
            redirect('welcome', 'refresh');
        }else {
            if (!isset($data)) {
                $data['view']       = 'loginView';
                $data['css']        = array('style');
                $data['js']         = array('jquery.backstrech.min', 'login');
           
                $data['showHead']   = false;
            }
            else{
              $data['view']       = 'loginView';
                $data['css']        = array('style');
                $data['js']         = array('jquery.backstrech.min', 'login');
           
                $data['showHead']   = false;
            	$data['data_view']		=$data;
            }
            $this->load->view('template',$data);
        }
	}
    
    public function acceder() {
    	
        $u = new Usuario();
        $u->email = $this->input->post('username');
        $u->contrasenia = $this->input->post('password');

        if ($u->login())
        {
          
            $newdata = array(
            		'id'		=>$u->id,
            		'nombre'	=> $u->nombre,
            		'apellido'	=> $u->apellido,
            		'rol_id'	=> $u->idUsuario,
            		'urlFoto' => $u->urlFoto,
            		'logged_in'	=> TRUE
            );
       
            $this->session->set_userdata($newdata);
            redirect('welcome', 'refresh');
        }
        else
        {
           
            $data['mensajeError'] = $u->error->login;
         $this->index($data);   
        }
    }
    
    public function salir() {
    	 
    	$this->session->sess_destroy();
    	$this->index();
    	
    }
    
}