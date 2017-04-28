<?php

class ValidarRegistro extends CFormModel{
	
	public $nombres_apellidos, $tipo_documento, $identificacion, $direccion_cliente, $ciudad, $telefonos,
	$direccion_rut, $nom_repre_legal, $iden_repre_legal, $dir_repre_legal, $nom_repre_suple, $iden_repre_suple, $dir_repre_suple, $actividad_economica,
	$capital_pagado, $origen_recursos, $jefe_comercio_exterior, $iden_comercio_exterior, $direccion_comercio_exterior, $email_comercio_exterior, $jefe_logistica, 
	$iden_jefe_logistica, $direccion_jefe_logistica, $email_jefe_logistica, $beneficiario_comercio_exterior, $iden_beneficiario, $direccion_beneficiario, $principales_clientes,
	$iden_principales_clientes, $direccion_principales_clientes, $principales_clientes2, $iden_principales_clientes2, $direccion_principales_clientes2, $ref_comercial_1, $nit_ref_comercial_1, $telefono_ref_comercial_1, $ref_comercial_2, $nit_ref_comercial_2, 
	$telefono_ref_comercial_2, $ref_bancaria_1, $cuenta_ref_bancaria_1, $telefono_ref_bancaria_1, $ref_bancaria_2, $cuenta_ref_bancaria_2, $telefono_ref_bancaria_2,
	$grandes_contribuyentes, $retenedores, $forma_pago, $banco_forma_pago, $compromisos, $editar_h, $id_client, $editar_creado, $id_creado;
	
	public function rules(){
				
		return array(
			array('nombres_apellidos, tipo_documento, identificacion, direccion_cliente, ciudad, telefonos, direccion_rut, actividad_economica, capital_pagado, origen_recursos, 
			beneficiario_comercio_exterior, iden_beneficiario, direccion_beneficiario, banco_forma_pago, grandes_contribuyentes, retenedores', 'required', 'message' => 'Este campo es requerido'),
			array('forma_pago, compromisos', 'required', 'message' => 'Debe marcar al menos una'),
			array('nom_repre_legal, iden_repre_legal, dir_repre_legal, jefe_comercio_exterior, iden_comercio_exterior, direccion_comercio_exterior, email_comercio_exterior,
			principales_clientes, iden_principales_clientes, direccion_principales_clientes, ref_comercial_1, nit_ref_comercial_1, telefono_ref_comercial_1,
			ref_bancaria_1, cuenta_ref_bancaria_1, telefono_ref_bancaria_1, nit_ref_comercial_2', 'required', 'message' => 'Debe llenar almenos un campo'),
			array('tipo_documento, telefonos, telefono_ref_comercial_1, telefono_ref_comercial_2,
			telefono_ref_bancaria_1, telefono_ref_bancaria_2, grandes_contribuyentes,
				editar_h, id_client, editar_creado, id_creado','numerical', 'integerOnly'=>true,
				'message'=>'Este campo solo permite caracteres numericos'),
			array('email_comercio_exterior, email_jefe_logistica', 'email', 'message' => 'No es una dirección de Email valida'),
			array('jefe_comercio_exterior', 'validarNombre'),
			array('nombres_apellidos',
				  'length',
				  'min' => 5,
				  'tooShort' => 'Minimo 5 caracteres',
				  'max' => 250,
				  'tooLong' => 'Maximo 250 caracteres',
			),
			array('actividad_economica, ciudad, direccion_cliente, origen_recursos, banco_forma_pago, nom_repre_legal, dir_repre_legal, nom_repre_suple,
			jefe_comercio_exterior, jefe_logistica, direccion_comercio_exterior, direccion_jefe_logistica, dir_repre_suple, ref_bancaria_2, cuenta_ref_bancaria_2,
			ref_bancaria_1, ref_comercial_2, ref_comercial_1, direccion_principales_clientes, direccion_principales_clientes2, principales_clientes, principales_clientes2, direccion_beneficiario,
			beneficiario_comercio_exterior, direccion_rut, nom_repre_suple, iden_repre_suple, dir_repre_suple, capital_pagado, nit_ref_comercial_1, nit_ref_comercial_2, 
			iden_repre_legal, iden_repre_suple, iden_principales_clientes, iden_principales_clientes2, iden_beneficiario, cuenta_ref_bancaria_1, iden_comercio_exterior,
			iden_jefe_logistica,', 'type', 'type'=>'string'),
		);
	}
	
	public function validarNombre($attribute, $params)
	{
        if ($this->$attribute == "edwar")
			$this->addError($attribute,'Error no puede ser Edwar');
	}
	
	public function attributeLabels()
	{
		return array('nombres_apellidos' => '1. Nombres y apellidos o Razón social',
					'tipo_documento' => 'Tipo Documento (CC o NIT)',
					'identificacion' => '2. Número Documento',
					'direccion_cliente' => '3. Dirección (Oficina Principal)',
					'ciudad' => '4. Ciudad',
					'telefonos' => '5. Teléfonos',
					'direccion_rut' => '6. Dirección electrónica del RUT',
					'nom_repre_legal' => '7. Apellido y nombre del Representante Legal',
					'iden_repre_legal' => '8. Identificación',
					'dir_repre_legal' => '9. Dirección',
					'nom_repre_suple' => '10. Apellido y nombre del Representante Suplente',
					'iden_repre_suple' => '11. Identificación',
					'dir_repre_suple' => '12. Dirección',
					'actividad_economica' => '10. Actividad económica',
					'capital_pagado' => '11. Capital Pagado',
					'origen_recursos' => '12. Origen de los recursos',
					'jefe_comercio_exterior' => '16. Jefe de comercio Exterior',
					'iden_comercio_exterior' => '14. Identificación',
					'direccion_comercio_exterior' => '15. Dirección',
					'email_comercio_exterior' => '16. E-mail',
					'jefe_logistica' => '20. Jefe de Logistica',
					'iden_jefe_logistica' => '21. Identificación',
					'direccion_jefe_logistica' => '22. Dirección',
					'email_jefe_logistica' => '23. E-mail',
					'beneficiario_comercio_exterior' => '24. Beneficiario',
					'iden_beneficiario' => '18. Identificación',
					'direccion_beneficiario' => '19. Dirección',
					'principales_clientes' => '20. Nombre los principales clientes',
					'iden_principales_clientes' => '21. Identificación',
					'direccion_principales_clientes' => '22. Dirección',
					'ref_comercial_1' => '23. Referencia comercial',
					'nit_ref_comercial_1' => '24. NIT',
					'telefono_ref_comercial_1' => '25. Teléfono',
					'ref_comercial_2' => '33. Referencia comercial 2',
					'nit_ref_comercial_2' => '34. NIT',
					'telefono_ref_comercial_2' => '35. Teléfono',
					'ref_bancaria_1' => '26. Referencia Bancaria',
					'cuenta_ref_bancaria_1' => '27. Cuenta No',
					'telefono_ref_bancaria_1' => '28. Teléfono',
					'ref_bancaria_2' => '39. Referencia Bancaria 2',
					'cuenta_ref_bancaria_2' => '40. Cuenta No',
					'telefono_ref_bancaria_2' => '41. Teléfono',
					'grandes_contribuyentes' => 'Grandes Contribuyentes',
					'retenedores' => 'Retenedores',
					'forma_pago' => 'Forma de pago',
					'banco_forma_pago' => 'Proveniente del Banco',
		);
	}
}

?>