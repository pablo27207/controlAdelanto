<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transaccion extends DataMapper {
	
	public $table ="transaccion";
	public $has_one = array("usuario", "tipo_caja");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	var $validation = array(
		'tipo_caja_id'=> array( 
							'label'	=> 'ID de tipo caja',
							'rules' => array('required')
			),	
		'idUsuarioPrestamista'=> array(
							'label'	=> 'Prestamista',
							'rules' => array('required')
			),
		'usuario_id'=> array(
					'label'	=> 'beneficiado del prestamo',
					'rules' => array('required')
			),
		'fecha'=> array(
					'label'	=> 'fecha en que se realizo el prestamo',
					'rules' => array('trim','required', 'valid_date')
			),
		'tipoOperacion'=> array(
					'label'	=> 'ingreso o egreso',
				'rules'=> array('required')
			),
		'detalle'=> array(
					'label'	=> 'detalle'
			),
			'anotacionPersonal'=> array(
					'label'	=> 'anotacion'
			),		
		'estado'=> array(
					'label'	=> 'Estado',
					'rules' => array('required')
			)
	);
	

	

	
}