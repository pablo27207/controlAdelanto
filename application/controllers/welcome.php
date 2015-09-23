<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

     
    public function __construct() {
        parent::__construct();
       
    }

	public function index($data = null)
	{
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        }else {
            if (!isset($data)) {
                $data['view']       = 'welcome_message';
                $data['css']        = array('zabuto_calendar');
                $data['js']         = array('inicio','sparkline-chart','zabuto_calendar');
                $data['library']       = '';
                $data['showFoot']   = true;
            }
            else{
              $data['view']       = 'welcome_message';
                $data['css']        = array('zabuto_calendar');
                $data['js']         = array('inicio','sparkline-chart','zabuto_calendar');
                $data['library']       = '';
                $data['showFoot']   = true;
            	$data['data_view']		=$data;
            }
            $this->load->view('template',$data);
        }
	}
    
  /*  public function acceder() {
    	
        $u = new Usuario();
        $u->email = $this->input->post('username');
        $u->contrasenia = $this->input->post('password');

        if ($u->login())
        {
          
            $newdata = array(
            		'id'		=>$u->id,
            		'nombre'	=> $u->nombre,
            		'apellido'	=> $u->apellido,
            		'idUsuario'	=> $u->idUsuario,
            		'urlFoto' => $u->urlFoto,
            		'logged_in'	=> TRUE
            );
       
            $this->session->set_userdata($newdata);
            redirect('novedades', 'refresh');
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
    	
    }*/
    
}
