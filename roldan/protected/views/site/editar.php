<div class="form" id="crear">
<?php

	$form = $this->beginWidget('CActiveForm', array(
		
		'method' => 'POST',
		'action' => yii::app()->createUrl('site/crear'),
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
			'validationOnChange' => true,
			'validationOnType' => true,
			),
		));
?>

<div><img src='../images/roldan.png' id="img_principal"></img></div>

<h1 id="principal">FORMULARIO  DE CONOCIMIENTO DEL CLIENTE Y ACUERDO DE SEGURIDAD</h1>
<p>
En cumplimiento a lo dispuesto por la Dirección de Impuestos y Aduanas Nacionales mediante la Circular Externa 0170 del 10/10/02, 
le solicitamos diligenciar completamente este formulario con sus datos y entregarlo en nuestras oficinas anexándole la siguiente documentación, 
requisito indispensable para llevar a cabo las operaciones de Comercio Exterior.
</p>
<ul>
	<li>Certificado de Existencia y Representación Legal Vigente.</li>
	<li>Fotocopia del Rut.</li>
	<li>Fotocopia de la Cédula del Representante Legal</li>
	<li>Estados Financieros Básicos Comparativos (Balance General y Estado de Pérdidas y Ganancias con sus respectivas notas, 
		a 31 de diciembre del año inmediatamente anterior). De acuerdo a la normatividad, los Usuarios Aduaneros calificados como UAP y  ALTEX no están obligados.</li>
	<li>Certificación Bancaria donde realiza sus operaciones de comercio exterior</li>
</ul>
<p class="note">Estos campos <span class="required">*</span> son requeridos.</p>
<?php echo $form->errorSummary($model,'Todos los campos deben estar diligenciados','Revizar los campos que aparecen en color rojo'); ?>
<!--primera fila-->
	<div class="row row_gris">
		<div class="col-md-6"><?php echo $form->labelEx($model,'nombres_apellidos');?></div>
		<div class="col-md-3"><?php echo $form->labelEx($model,'tipo_documento');?></div>
		<div class="col-md-3"><?php echo $form->labelEx($model,'identificacion');?></div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<?php echo $form->textField($model,'nombres_apellidos');?>
		<?php echo $form->error($model,'nombres_apellidos');?>
		</div>
		<div class="col-md-3">
		<?php
		echo $form->dropDownList($model,'tipo_documento',array(1=>'Cedula',2=>'NIT'), array('options' => array(1=>array('selected'=>true))));
		echo $form->error($model,'tipo_documento');
		?>
		</div>
		<div class="col-md-3">
		<?php
		echo $form->textField($model,'identificacion', array(
															'ajax' => array(
															'type' => 'POST',
															'url' => Yii::app()->request->baseUrl.'/clientes',
															'update'=>'#nombres_apellidos',
															)
															));
		echo $form->error($model,'identificacion');
		?>
		</div>
	</div>
<!--Segunda Fila-->
	<div class="row row_gris">
		<div class="col-md-4"><?php echo $form->labelEx($model,'direccion_cliente');?></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'ciudad');?></div>
		<div class="col-md-3"><?php echo $form->labelEx($model,'telefonos');?></div>
		<div class="col-md-3"><?php echo $form->labelEx($model,'direccion_rut');?></div>
	</div>
	<div class="row">
		<div class="col-md-4">
		<?php 
		echo $form->textField($model,'direccion_cliente');
		echo $form->error($model,'direccion_cliente');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'ciudad');
		echo $form->error($model,'ciudad');
		?>
		</div>
		<div class="col-md-3">
		<?php		
		echo $form->textField($model,'telefonos');
		echo $form->error($model,'telefonos');
		?>
		</div>
		<div class="col-md-3">
		<?php
		echo $form->textField($model,'direccion_rut');
		echo $form->error($model,'direccion_rut');
		?>
		</div>
	</div>
<!--tercera fila-->
	<div class="row row_gris">
		<div class="col-md-6 col_letra"><?php echo "7. Apellido y nombre del Representante legal y suplente";?><span class="span_2"> *</span></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'iden_repre_legal');?></div>
		<div class="col-md-4"><?php echo $form->labelEx($model,'dir_repre_legal');?></div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'nom_repre_legal');
		echo $form->error($model,'nom_repre_legal');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'iden_repre_legal');
		echo $form->error($model,'iden_repre_legal');
		?>
		</div>
		<div class="col-md-4">
		<?php		
		echo $form->textField($model,'dir_repre_legal');
		echo $form->error($model,'dir_repre_legal');
		?>
		</div>
	</div>
<!--Cuarta fila-->
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'nom_repre_suple');
		echo $form->error($model,'nom_repre_suple');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'iden_repre_suple');
		echo $form->error($model,'iden_repre_suple');
		?>
		</div>
		<div class="col-md-4">
		<?php		
		echo $form->textField($model,'dir_repre_suple');
		echo $form->error($model,'dir_repre_suple');
		?>
		</div>
	</div>
<!--Quinta fila-->
	<div class="row row_gris">
		<div class="col-md-6"><?php echo $form->labelEx($model,'actividad_economica');?></div>
		<div class="col-md-6"><?php echo $form->labelEx($model,'capital_pagado');?></div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'actividad_economica');
		echo $form->error($model,'actividad_economica');
		?>
		</div>
		<div class="col-md-6">
		<?php	
		echo $form->textField($model,'capital_pagado');
		echo $form->error($model,'capital_pagado');
		?>
		</div>
	</div>
<!--Sexta fila-->
	<div class="row row_gris">
		<div class="col-md-12"><?php echo $form->labelEx($model,'origen_recursos');?></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php 
				echo $form->textField($model,'origen_recursos');
				echo $form->error($model,'origen_recursos');
			?>
		</div>
	</div>
<!--Septima Fila-->
	<div class="row row_gris">
		<div class="col-md-6 col_letra"><?php echo "13. Apellidos y nombres de las personas que realizan directamente las operaciones de comercio exterior (Jefe de comercio exterior o Logistica)";?><span class="span_2"> *</span></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'iden_comercio_exterior');?></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'direccion_comercio_exterior');?></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'email_comercio_exterior');?></div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'jefe_comercio_exterior');
		echo $form->error($model,'jefe_comercio_exterior');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_comercio_exterior');
		echo $form->error($model,'iden_comercio_exterior');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'direccion_comercio_exterior');
		echo $form->error($model,'direccion_comercio_exterior');		
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'email_comercio_exterior');
		echo $form->error($model,'email_comercio_exterior');
		?>
		</div>
	</div>
<!--Octava Fila-->
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'jefe_logistica');
		echo $form->error($model,'jefe_logistica');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_jefe_logistica');
		echo $form->error($model,'iden_jefe_logistica');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'direccion_jefe_logistica');
		echo $form->error($model,'direccion_jefe_logistica');		
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'email_jefe_logistica');
		echo $form->error($model,'email_jefe_logistica');
		?>
		</div>
	</div>
	<!--Novena Fila-->
	<div class="row row_gris">
		<div class="col-md-6 col_letra"><?php echo "17. Apellidos y nombres de las personas o entidades beneficiarias de las operaciones de comercio exterior";?><span class="span_2"> *</span></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'iden_beneficiario');?></div>
		<div class="col-md-4"><?php echo $form->labelEx($model,'direccion_beneficiario');?></div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'beneficiario_comercio_exterior');
		echo $form->error($model,'beneficiario_comercio_exterior');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_beneficiario');
		echo $form->error($model,'iden_beneficiario');
		?>
		</div>
		<div class="col-md-4">
		<?php	
		echo $form->textField($model,'direccion_beneficiario');
		echo $form->error($model,'direccion_beneficiario');		
		?>
		</div>
	</div>
	<!--Decima Fila-->
	<div class="row row_gris">
		<div class="col-md-6"><?php echo $form->labelEx($model,'principales_clientes');?></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'iden_principales_clientes');?></div>
		<div class="col-md-4"><?php echo $form->labelEx($model,'direccion_principales_clientes');?></div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'principales_clientes');
		echo $form->error($model,'principales_clientes');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_principales_clientes');
		echo $form->error($model,'iden_principales_clientes');
		?>
		</div>
		<div class="col-md-4">
		<?php	
		echo $form->textField($model,'direccion_principales_clientes');
		echo $form->error($model,'direccion_principales_clientes');
		?>
		</div>
	</div>
		<!--Decima Fila 2-->
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'principales_clientes2');
		echo $form->error($model,'principales_clientes2');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_principales_clientes2');
		echo $form->error($model,'iden_principales_clientes2');
		?>
		</div>
		<div class="col-md-4">
		<?php	
		echo $form->textField($model,'direccion_principales_clientes2');
		echo $form->error($model,'direccion_principales_clientes2');
		?>
		</div>
	</div>
<!--Fila 11-->
	<div class="row row_gris">
		<div class="col-md-6"><?php echo $form->labelEx($model,'ref_comercial_1');?></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'nit_ref_comercial_1');?></div>
		<div class="col-md-4"><?php echo $form->labelEx($model,'telefono_ref_comercial_1');?></div>
	</div>
	<div class="row">
		<div class="col-md-6 col_letra">R1
		<?php 
		echo $form->textField($model,'ref_comercial_1', array('class'=>'col_peq'));
		echo $form->error($model,'ref_comercial_1');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'nit_ref_comercial_1');
		echo $form->error($model,'nit_ref_comercial_1');
		?>
		</div>
		<div class="col-md-4">
		<?php
		echo $form->textField($model,'telefono_ref_comercial_1');
		echo $form->error($model,'telefono_ref_comercial_1');
		?>
		</div>
	</div>
<!--Fila 12-->
	<div class="row">
		<div class="col-md-6 col_letra">R2
		<?php 
		echo $form->textField($model,'ref_comercial_2', array('class'=>'col_peq'));
		echo $form->error($model,'ref_comercial_2');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'nit_ref_comercial_2');
		echo $form->error($model,'nit_ref_comercial_2');
		?>
		</div>
		<div class="col-md-4">
		<?php
		echo $form->textField($model,'telefono_ref_comercial_2');
		echo $form->error($model,'telefono_ref_comercial_2');
		?>
		</div>
	</div>
<!--Fila 13-->
	<div class="row row_gris">
		<div class="col-md-6"><?php echo $form->labelEx($model,'ref_bancaria_1');?></div>
		<div class="col-md-2"><?php echo $form->labelEx($model,'cuenta_ref_bancaria_1');?></div>
		<div class="col-md-4"><?php echo $form->labelEx($model,'telefono_ref_bancaria_1');?></div>
	</div>
	<div class="row">
		<div class="col-md-6 col_letra">R1
		<?php 
		echo $form->textField($model,'ref_bancaria_1', array('class'=>'col_peq'));
		echo $form->error($model,'ref_bancaria_1');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'cuenta_ref_bancaria_1');
		echo $form->error($model,'cuenta_ref_bancaria_1');
		?>
		</div>
		<div class="col-md-4">
		<?php
		echo $form->textField($model,'telefono_ref_bancaria_1');
		echo $form->error($model,'telefono_ref_bancaria_1');
		?>
		</div>
	</div>
<!--Fila 14-->
	<div class="row">
		<div class="col-md-6 col_letra">R2
		<?php 
		echo $form->textField($model,'ref_bancaria_2', array('class'=>'col_peq'));
		echo $form->error($model,'ref_bancaria_2');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'cuenta_ref_bancaria_2');
		echo $form->error($model,'cuenta_ref_bancaria_2');
		?>
		</div>
		<div class="col-md-4">
		<?php
		echo $form->textField($model,'telefono_ref_bancaria_2');
		echo $form->error($model,'telefono_ref_bancaria_2');
		?>
		</div>
	</div>
<!--Fila 15-->
	<div class="row row_gris">
		<div class="col-md-12 col_letra">29. Información Tributaria<span class="span_2"> *</span></div>
	</div>
	<div class="row">
		<div class="col-md-6 col_letra">Grandes Contribuyentes 
		<?php 
		echo $form->radioButtonList($model,'grandes_contribuyentes', array(1=>'Si',2=>'No'), array('labelOptions'=>array('style'=>'display:inline', 'class'=>'input_peq'), 'separator'=>'  ', 'class' =>'input_peq'));
		echo $form->error($model,'grandes_contribuyentes');
		?>
		</div>
		<div class="col-md-6 col_letra">
		Retenedores<br> 
		<?php	
		echo $form->checkBoxList($model,'retenedores',array(
															1=>'IVA',
															2=>'ICA',
															3=>'Retención'
															),
															 array('template'=>'<div class="col-md-6">{label}</div><div class="col-md-1">{input}</div>',),
															 array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'  ',)); 
		echo $form->error($model,'retenedores');
		//echo $form->radioButtonList($model,'retenedores',array(1=>'IVA',2=>'ICA',3=>'Retención'), array('labelOptions'=>array('style'=>'display:inline', 'class'=>'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
		//echo $form->error($model,'retenedores');
		?>
		</div>
	</div>
<!--Fila 16-->
	<div class="row row_gris">
		<div class="col-md-12 col_letra">30. Forma de Pago<span class="span_2"> *</span></div>
	</div>
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->checkBoxList($model,'forma_pago',array(
															1=>'Consignación',
															2=>'Cheque',
															3=>'Transferencia'
															),
															 array('template'=>'<div class="col-md-6">{label}</div><div class="col-md-1">{input}</div>',),
															 array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'  ',)); 
		echo $form->error($model,'forma_pago');
		//echo $form->radioButtonList($model,'forma_pago',array(1=>'Consignación',2=>'Cheque',3=>'Transferencia'), array('labelOptions'=>array('style'=>'display:inline', 'class'=>'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
		//echo $form->error($model,'forma_pago'); 
		?>
		</div>
		<div class="col-md-6 col_letra">Proveniente del Banco:
		<?php	
		echo $form->textField($model,'banco_forma_pago', array('class'=>'col_peq1'));
		echo $form->error($model,'banco_forma_pago'); 
		?>
		</div>
	</div>
	<p class="articulos">Artículo 1: EL CLIENTE se compromete a:</p>
	<p class="int_artis">
	1.1. Aceptar la visita domiciliaria que la empresa debe realizar en sus instalaciones, de acuerdo con lo exigido en el procedimiento de Conocimiento del Cliente establecido por la Organización.<br>
	1.2. Cumplir con el suministro de los documentos actualizados, de acuerdo a lo exigido en la Circular 0170/02 y procedimiento de Conocimiento del Cliente establecido por la Organización.<br>
	1.3. En caso de aplicar Decreto 2685 de 1999, cumplir con el suministro de los documentos actualizados que acrediten su existencia como persona natural o jurídica, así como los datos asociados a su domicilio, identificación y documentación que evidencie la actividad económica y capacidad financiera para realizar la operación de comercio exterior.<br>
	1.4. Suministrar la información y los documentos soporte requeridos para el desarrollo de la operación encomendada.<br>
	1.5. Informar a la UIAF (Unidad de Investigación y Análisis Financiero) y/o a la Empresa, cualquier acto o actividad sospechosa que se advierta en el curso de las operaciones que se adelantan con los proveedores relacionados con la prestación del servicio prestado por la Empresa al Cliente, ejemplo, transporte, almacenaje, agente de carga, agenciamiento  aduanero, Operación portuaria, sellos de seguridad, etc.<br>
	1.6. Cuando el Cliente suministre para la operación, sellos o precintos de seguridad, estos deben cumplir con la Norma ISO 17712<br>
	1.7. En el caso de las exportaciones, tener procedimientos de seguridad en el lugar de cargue, procedimientos de inspección y sellado de contenedores y trailers, los sellos utilizados para precintar los contenedores deben cumplir con la norma ISO 17712, de esta manera, minimizar el riesgo de contaminación, hurto o daño de la mercancía<br>
	1.8. Reconocer la importancia de establecer procesos y procedimientos de seguridad en sus operaciones, instalaciones y personal y hacer extensivas estas buenas prácticas a sus asociados de negocio (clientes y proveedores)<br>
	1.9. Cuando aplique, en caso de ocurrencia de siniestro en la manipulación de mercancía en puerto el cliente debe exigir la presencia de su compañía de seguros.<br>
	1.10. En caso que el cliente no autorice la realización de diligencia de reconocimiento de mercancías, deberá suscribir el formato "Orden de No Autorización de Reconocimientos de Mercancías" y formato "Compromiso para el Pago de Moras de Contenedor"<br>
	</p>
	<p class="articulos">Artículo 2: LA EMPRESA se compromete a:<span class="span_2"> *</span></p>
	<div class="row">
			<div class="col-md-12"><?php
					echo $form->checkBoxList($model,'compromisos',array(
															1=>'Agencia de Aduanas Roldán (AAR)',
															2=>'Serteport (STP)',
															3=>'Roldán y Cia (RCL)',
															4=>'Global Services (OTM)',
															5=>'Glodex (GLX)',
															6=>'International Transport Services (ITS)',
															7=>'Rolog (RLG)'
															),
															 array('template'=>'<div class="col-md-6">{label}</div><div class="col-md-1">{input}</div>',),
															 array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'  ',)); 
					echo $form->error($model,'compromisos');
					//echo $form->radioButtonList($model,'arr_compromisos',array(1=>'Agencia de Aduanas Roldán (AAR)'), array('labelOptions'=>array('style'=>'display:inline', 'class' => 'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
					//echo $form->error($model,'arr_compromisos');
				?>
			</div>	
			<!--<div class="col-md-6"><?php
					//echo $form->radioButtonList($model,'stp_compromisos',array(1=>'Serteport (STP)'), array('labelOptions'=>array('style'=>'display:inline', 'class' => 'input_peq'),'separator'=>'  ', 'class' => 'input_peq'));
					//echo $form->error($model,'spt_compromisos');
			?>
			</div>
	</div>
	<div class="row">
			<div class="col-md-6">
			<?php
					//echo $form->radioButtonList($model,'rcl_compromisos',array(1=>'Roldán y Cia (RCL)'), array('labelOptions'=>array('style'=>'display:inline', 'class' => 'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
					//echo $form->error($model,'rcl_compromisos');
			?>
			</div>
			<div class="col-md-6">
			<?php				
				//echo $form->radioButtonList($model,'otm_compromisos',array(1=>'Global Services (OTM)'), array('labelOptions'=>array('style'=>'display:inline', 'class' =>'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
				//echo $form->error($model,'otm_compromisos');
			?>
			</div>
	</div>
	<div class="row">
			<div class="col-md-6">
			<?php
				//echo $form->radioButtonList($model,'glx_compromisos',array(1=>'Glodex (GLX)'), array('labelOptions'=>array('style'=>'display:inline', 'class' =>'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
				//echo $form->error($model,'glx_compromisos');
			?>
			</div>
			<div class="col-md-6">
			<?php
				//echo $form->radioButtonList($model,'its_compromisos',array(1=>'International Transport Services (ITS)'), array('labelOptions'=>array('style'=>'display:inline', 'class' =>'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
				//echo $form->error($model,'its_compromisos');
			?>
			</div>
	</div>
	<div class="row">
			<div class="col-md-6">				
			<?php 
				//echo $form->radioButtonList($model,'rlg_compromisos',array(1=>'Rolog (RLG)'), array('labelOptions'=>array('style'=>'display:inline', 'class' =>'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
				//echo $form->error($model,'rlg_compromisos');
			?>
			</div>
	</div>-->

				<?php/*echo $form->checkBoxList($model,'compromisos',array(
															1=>'Agencia de Aduanas Roldán (AAR)',
															2=>'Roldán y Cia (RCL)',
															3=>'Glodex (GLX)',
															4=>'Rolog  (RLG)',
															5=>'Serteport (STP)',
															6=>'Global Services (OTM)',
															7=>'International Transport Services (ITS)',
															),
															 array('template'=>'{label}{input}',),
															 array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'  ',)); 
				echo $form->error($model,'compromisos');*/
				?>
	<p class="int_artis">
	2.1. Reportar al cliente cualquier acto o actitud sospechosa de su personal, para que se tomen las medidas del caso.<br>
	2.2. Mantener en total confidencialidad la información suministrada por el Cliente.<br>
	2.3. Salvaguardar la documentación entregada por el Cliente, requerida para el desarrollo de la operación.<br>
	2.4. Establecer los procedimientos de control, seguridad y calidad requeridos en las instalaciones, procesos y personal, para minimizar los riesgos inherentes con el servicio.<br>
	2.5. Permitir al Cliente realizar las visitas a las instalaciones de la Empresa, cuando lo considere necesario.<br>
	2.6. Suministrar al Cliente la documentación requerida, para el respectivo control de proveedores.<br>
	2.7. Suministrar al Cliente cuando sea requerido, ampliación de información en cuanto a los requisitos de la Norma BASC<br>
	</p>
	<p class="articulos">FIRMAS PARTES INTERESADAS</p>
	<p class="declaro">Declaro que la información aquí suministrada concuerda con la realidad y asumo plena responsabilidad por la veracidad de la misma. Yo, el firmante,
	portador de la cédula de ciudadanía indicada en este formulario afirmo que tanto mis actividades como mi profesión, ocupación u oficio son lícitos y los ejerzo dentro de 
	los marcos legales.  Me comprometo a actualizar, cuando sea necesario, los datos aquí consignados. Autorizo a nombre de la empresa a consultar y reportar a las centrales 
	de riesgo.</p>
	<p class="firmas">Firma del Representante Legal_____________________________________<br>
	Fecha:                   
	</p>
	<p class="firmas">Firma del Comercial_____________________________________<br>
	Fecha:                           
	</p>
	<table>
	<tr class="trblanco">
		<td>
			<div class='row' id="div_boton">
				<?php
				echo CHtml::submitButton('Guardar', array('class'=>'boton','id'=>'boton'));
				//echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'validate');
				?>
			</div>
		</td>	
	</tr>
	</table>
<?php
$this->endWidget();
?>
</div>