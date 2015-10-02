<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transacciones extends CI_Controller{
	
	public function __construct() {
	
		parent::__construct();
	
	}
	
	public function index(){
        if (!$this->session->userdata('logged_in')) {
            redirect('welcome', 'refresh');
        }else {
            if (!isset($data)) {
                $data['view']       = 'transaccionView';
                $data['data_view']  = array('data_transaccion'=> $this->buscarTransaccion());
                $data['css']        = array('transaccion','advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
                $data['js']         = array('paginadorDataTable','/advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables');
                $data['library']       = '';
                $data['showHead']   = true;
            }
            else{
                $data['view']       = 'transaccionView';
                $data['data_view']  = array('data_transacciones'=> $this->buscarTransaccion());
                $data['css']        = array('transaccion','advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
                $data['js']         = array('paginadorDataTable','/advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables');
                $data['library']       = '';
                $data['showHead']   = true;
            	$data['data_view']	= $data;
            }
            $this->load->view('template',$data);
        }
	}
	
	public function vistaAltaTransaccion(){
		
		$u = new Usuario();
		$data['view']       = 'AltaTransaccionView';
		$data['data_view']  = array('data_personal'=> $u->buscar());
		$data['css']        = array('altaTransaccion','wizzard/prettify','transaccion','advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
		$data['js']         = array('wizzard/jquery.bootstrap.wizard.min','wizzard/prettify','paginadorDataTable','/advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables','altaTransaccion');
		$data['library']    = '';
		$data['showHead']   = true;
		$this->load->view('template',$data);
	}
	
	public function buscarTransaccion($valorBusqueda = null){
	
		$t = new Transaccion();
		if($valorBusqueda !=null){
			$t->like('id',$valorBusqueda);
			$t->or_like('tipo_caja_id',$valorBusqueda);
			$t->or_like('usuario_id',$valorBusqueda);
			$t->or_like('tipoOperacion',$valorBusqueda);
			$t->or_like('fecha',$valorBusqueda);
			$t->or_like('detalle',$valorBusqueda)->get();
	
	
		}
		else{
			$t->get();
		}
		return $t;
	
	}
}