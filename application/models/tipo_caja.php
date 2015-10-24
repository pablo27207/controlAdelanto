<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tipo_caja extends DataMapper {
	
	public $table ="tipo_caja";
	public $has_many = array("transaccion");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	var $validation = array(
		'nombre'=> array( 
							'label'	=> 'Nombre',
							'rules' => array('required')
			),	
		'descripcion'=> array(
							'label'	=> 'Descripcion',
							'rules' => array('required')
			),
		'estado'=> array(
					'label'	=> 'Estado',
					'rules' => array('required')
			)
	);
	

	public function buscar($valorBusqueda = null){
		if($valorBusqueda !=null){
		$this->or_like('nombre',$valorBusqueda);
			$this->or_like('descripcion',$valorBusqueda);
	}
		else{
			$this->get();
		}
		return $this;
	}

	
}