<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario extends DataMapper {
	
	public $table ="usuario";
	public $has_one = array("rol");
	public $has_many = array("transaccion");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	var $validation = array(
		'rol_id'=> array( 
							'label'	=> 'ID de rol',
							'rules' => array('required')
			),	
		'dni'=> array(
							'label'	=> 'DNI',
							'rules' => array('required')
			),
		'legajo'=> array(
					'label'	=> 'legajo',
					'rules' => array('required')
			),
		'nombre'=> array(
					'label'	=> 'Nombre',
					'rules' => array('required')
			),
		'apellido'=> array(
					'label'	=> 'Apellido'
			),
		'fechaIngreso'=> array(
					'label'	=> 'fecha de ingreso',
					'rules' => array('trim','valid_date')
			),
		'fechaEgreso'=> array(
					'label'	=> 'fecha de egreso',
					'rules' => array('trim','valid_date')
			),
			'telefono'=> array(
					'label'	=> 'Tel&eacute;fono',
					'rules' => array('trim')
			),
			'categoria'=> array(
					'label'	=> 'Categoria'
			),
			'email'=> array(
					'label'	=> 'Email',
					'rules' => array('required', 'unique', 'valid_email')
			),
		'contrasenia'=> array(
					'label'	=> 'Contrase&ntilde;a',
					'rules' => array('required','encrypt')
			),
		'confirmarContrasenia' => array(
					'label' => 'Confirma la contraseña',
					'rules' => array('required', 'encrypt', 'matches' => 'contrasenia'),
			),
		'urlFoto'=> array(
					'label'	=> 'URL de foto',
					'rules' => array( 'xss_clean')
			),
			
		'estado'=> array(
					'label'	=> 'Estado',
					'rules' => array('required')
			)
	);
	
	public function _encrypt($field)
	{
		// Don't encrypt an empty string
		if (!empty($this->{$field}))
		{
			// Generate a random salt if empty
			if (empty($this->salt))
			{
				$this->salt = md5(uniqid(rand(), true));
			}
	
			$this->{$field} = sha1($this->salt . $this->{$field});
		}
	}
	
	function login()
	{
		// Create a temporary user object
		$u = new Usuario();
	
		// Get this users stored record via their username
		$u->where('email', $this->email)->get();
	
		// Give this user their stored salt
		
		$this->salt = $u->salt;
	
		// Validate and get this user by their property values,
		// this will see the 'encrypt' validation run, encrypting the password with the salt
		$this->validate()->get();
	
		// If the username and encrypted password matched a record in the database,
		// this user object would be fully populated, complete with their ID.
	
		// If there was no matching record, this user would be completely cleared so their id would be empty.
		if (empty($this->id))
		{
			// Login failed, so set a custom error message
			$this->error_message('login', 'Email o contrase&ntilde;a invalida');
	
			return FALSE;
		}
		else
		{
			// Login succeeded
			return TRUE;
		}
	}
	public function logout() {
	
		$this->session->sess_destroy();
		$this->index();
			
	}
	
	public function buscar($valorBusqueda = null){
		if($valorBusqueda !=null){
			$this->like('dni',$valorBusqueda);
			$this->or_like('nombre',$valorBusqueda);
			$this->or_like('apellido',$valorBusqueda);
			$this->or_like('telefono',$valorBusqueda);
			$this->or_like('email',$valorBusqueda)->get();
		}
		else{
			$this->get();
		}
		return $this;
	}
	
}