<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends CI_Controller{
	
	public function __construct() {
	
		parent::__construct();
	
	}
	
	public function index(){
        if (!$this->session->userdata('logged_in')) {
            redirect('welcome', 'refresh');
        }else {
            if (!isset($data)) {
                $data['view']       = 'personalView';
                $data['data_view']  = array('data_usuarios'=> $this->buscarPersonal());
                $data['css']        = array('advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap','bootstrap-datepicker/datepicker',
                							'bootstrap-daterangepicker/daterangepicker', 'personal');
                $data['js']         = array('paginadorDataTable','/advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables',
                							'bootstrap-datepicker/bootstrap-datepicker','bootstrap-daterangepicker/date','bootstrap-daterangepicker/daterangepicker','bootstrap-daterangepicker/moment.min');
                $data['library']       = '';
                
                $data['showHead']   = true;
            }
            else{
              	$data['view']       = 'personalView';
                $data['data_view']  = array('data_usuarios'=> $this->buscarPersonal());
                $data['css']        = array('advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap','bootstrap-datepicker/datepicker',
                							'bootstrap-daterangepicker/daterangepicker','personal');
                $data['js']         = array('paginadorDataTable','/advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables',
                							'bootstrap-datepicker/bootstrap-datepicker','bootstrap-daterangepicker/date','bootstrap-daterangepicker/daterangepicker','bootstrap-daterangepicker/moment.min');
                $data['library']       = '';
                $data['showHead']   = true;
            	$data['data_view']	=$data;
            }
            $this->load->view('template',$data);
        }
	}

	public function vistaAltaUsuario(){
        if (!$this->session->userdata('logged_in')) {
            redirect('welcome', 'refresh');
        }else {
            if (!isset($data)) {
                $data['view']       = 'nuevoEmpleadoView';
                $data['data_view']  = array('data_usuarios'=> $this->buscarPersonal());
                $data['css']        = array('advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
                $data['js']         = array('personal','/advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables');
                $data['library']       = '';
                
                $data['showHead']   = true;
            }
            else{
              	$data['view']       = 'nuevoEmpleadoView';
                $data['data_view']  = array('data_usuarios'=> $this->buscarPersonal());
                $data['css']        = array('advanced_datatable/css/demo_page','advanced_datatable/css/demo_table','advanced_datatable/css/DT_bootstrap');
                $data['js']         = array('personal','advanced-datatable/media/dataTables.bootstrap.min','advanced-datatable/media/js/jquery.dataTables');
                $data['library']       = '';
                $data['showHead']   = true;
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
	
	public function altaUsuario(){
	
		try{
			$u = new Usuario();
	
			// Definir campo en post. Formato AAAA-MM-DD fechas
			$u->rol_id =  $this->input->post('tipoUsuarioAltaUsuario');
			$u->nombre =  $this->input->post('nombreAltaUsuario');
			$u->apellido=  $this->input->post('apellidoAltaUsuario');
			$u->dni =  $this->input->post('dniAltaUsuario');
			$u->legajo =  $this->input->post('legajoAltaUsuario');
				
			$u->fechaIngreso = $this->input->post('fechaIngresoAltaUsuario');
			$u->fechaEgreso = '';//dejar en null.
			$u->telefono = $this->input->post('telefonoAltaUsuario');
			$u->categoria = $this->input->post('categoriaAltaUsuario'); 
			$u->estado =  'alta';
			$u->email =  $this->input->post('emailAltaUsuario');
			$u->contrasenia = $this->input->post('contraseniaAltaUsuario');
			$u->confirmarContrasenia = $this->input->post('confirmarContraseniaAltaUsuario'); 
			//CAMBIAR CONTRASEÑA
		/*	$u->rol_id =  '2';
			$u->nombre = 'Florencia';
			$u->apellido= 'Espinoza';
			$u->dni =  '37150124';
			$u->legajo =  '1606';
			
			$u->fechaIngreso = '2015/09/09';
			$u->fechaEgreso = '';//dejar en null.
			$u->telefono = '2974150150';
			$u->categoria = '1';
			$u->estado =  'alta';
			$u->email ='florencia@gmail.com';
			$u->contrasenia = 'asd';
			$u->confirmarContrasenia = 'asd'; */
	
			$url = "C:\wamp\www\controlAdelanto";
	
			$config['upload_path'] = $url.'\assets\img\profiles';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '10000';
	
			$this->load->library('upload', $config);
	
			if (!$this->upload->do_upload('FotoAltaUsuario'))
			{
				$errores = $this->upload->display_errors();
					
				$u->urlFoto ='no_avatar.gif';
			}
			else
			{
				$this->data_page['datosSubida']= array('upload_data' => $this->upload->data());
				$datos = $this->upload->data('full_path');
				$u->urlFoto = $datos['file_name'];
					
			}
	
	
			if ($u->save())
			{
				echo json_encode(array('title' => 'Resultado: ', 'text' => 'Se carg&oacute; exitosamente el nuevo usuario.', 'status' => 'success'));
	
			}
			else
			{
				echo json_encode(array('title' => 'Error: ', 'text' => $u->error->string, 'status' => 'danger'));
					
			}
		} catch (Exception $e) {
			echo json_encode(array('title' => 'Error: ', 'text' => $e->message, 'status' => 'danger'));
		}
	
			
	
	
	}
}