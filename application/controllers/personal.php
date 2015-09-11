<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends CI_Controller{
	
	public function __construct() {
	
		parent::__construct();
	
	}
	
	public function index(){
        if ($this->session->userdata('logged_in')) {
            redirect('welcome', 'refresh');
        }else {
            if (!isset($data)) {
                $data['view']       = 'personalView';
                $data['data_view']  = array('data_usuarios'=> $this->buscarPersonal());
                $data['css']        = array('advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
                $data['js']         = array('personal','/advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables');
                $data['library']       = '';
                
                $data['showHead']   = false;
            }
            else{
              	$data['view']       = 'personalView';
                $data['data_view']  = array('data_usuarios'=> $this->buscarPersonal());
                $data['css']        = array('advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
                $data['js']         = array('personal','advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables');
                $data['library']       = '';
                $data['showHead']   = false;
            	$data['data_view']	=$data;
            }
            $this->load->view('template',$data);
        }
	}
	public function buscarPersonal($valorBusqueda = null){
	
		$u = new Usuario();
		if($valorBusqueda !=null){
			$u->like('dni',$valorBusqueda);
			$u->or_like('nombre',$valorBusqueda);
			$u->or_like('apellido',$valorBusqueda);
			$u->or_like('telefono',$valorBusqueda);
			$u->or_like('email',$valorBusqueda)->get();

		
		}
		else{
			$u->get();
		}
		return $u;
	
	}
}