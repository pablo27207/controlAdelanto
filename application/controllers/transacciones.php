<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transacciones extends CI_Controller{
	
	public function __construct() {
	
		parent::__construct();
	
	}
	
	public function index(){
        if ($this->session->userdata('logged_in')) {
            redirect('welcome', 'refresh');
        }else {
            if (!isset($data)) {
                $data['view']       = 'transaccionView';
                $data['css']        = array('advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
                $data['js']         = array('personal','/advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables');
                $data['library']       = '';
                $data['showHead']   = false;
            }
            else{
              $data['view']       = 'transaccionView';
                $data['css']        = array('advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
                $data['js']         = array('personal','advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables');
                $data['library']       = '';
                $data['showHead']   = false;
            	$data['data_view']		=$data;
            }
            $this->load->view('template',$data);
        }
	}
}