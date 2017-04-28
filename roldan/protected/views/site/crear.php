<div class="form" id="crear">
<?php

	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'formConocimiento',
		'method' => 'POST',
		'action' => yii::app()->createUrl('site/crear'),
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit'=>true,
			'validationOnChange' => true,
			'validationOnType' => true,
			),
		));
	if($_POST[ValidarRegistro][id_client]){
					$id_client=$_POST[ValidarRegistro][id_client];
		}
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
	<li>Fotocopia del RUT.</li>
	<li>Fotocopia de la Cédula del Representante Legal</li>
	<li>Estados Financieros Básicos Comparativos (Balance General y Estado de Pérdidas y Ganancias con sus respectivas notas, 
		a 31 de diciembre del año inmediatamente anterior). De acuerdo a la normatividad, los Grandes Contribuyentes, Usuarios Aduaneros calificados como UAP y  ALTEX no están obligados.</li>
	<li>Certificación Bancaria donde realiza sus operaciones de comercio exterior</li>
</ul>
<!--<p class="note">Estos campos <span class="required">*</span> son requeridos.</p>-->
<?php //echo $form->errorSummary($model,'Todos los campos deben estar diligenciados','Revizar los campos que aparecen en color rojo'); ?>
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
															'dataType' => 'json',
															'url' => Yii::app()->request->baseUrl.'/site/validar_servidor',
															'data' => 'js:{cedula:$("#ValidarRegistro_identificacion").val()}',
															//'update'=>'#validar'
															'success' =>'js:function(result){
																$.each(result, function(index, element) {
																		$("#ValidarRegistro_nombres_apellidos").val(element.nombres_apellidos);
																		$("#ValidarRegistro_tipo_documento").val(element.tipo_documento);
																		$("#ValidarRegistro_direccion_cliente").val(element.direccion);
																		$("#ValidarRegistro_ciudad").val(element.ciudad);
																		$("#ValidarRegistro_telefonos").val(element.telefonos);
																		$("#ValidarRegistro_direccion_rut").val(element.direccion_rut);
																		$("#ValidarRegistro_nom_repre_legal").val(element.nombre_rl);
																		$("#ValidarRegistro_iden_repre_legal").val(element.identificacion_rl);
																		$("#ValidarRegistro_dir_repre_legal").val(element.direccion_rl);
																		$("#ValidarRegistro_nom_repre_suple").val(element.nombre_sp);
																		$("#ValidarRegistro_iden_repre_suple").val(element.identificacion_sp);
																		$("#ValidarRegistro_dir_repre_suple").val(element.direccion_sp);
																		$("#ValidarRegistro_actividad_economica").val(element.actividad_economica);
																		$("#ValidarRegistro_capital_pagado").val(element.capital_pagado);
																		$("#ValidarRegistro_origen_recursos").val(element.origen_recursos);
																		$("#ValidarRegistro_jefe_comercio_exterior").val(element.jefe_comercio_exterior);
																		$("#ValidarRegistro_iden_comercio_exterior").val(element.iden_comercio_exterior);
																		$("#ValidarRegistro_direccion_comercio_exterior").val(element.direccion_comercio_exterior);
																		$("#ValidarRegistro_email_comercio_exterior").val(element.email_comercio_exterior);
																		$("#ValidarRegistro_jefe_logistica").val(element.jefe_logistica);
																		$("#ValidarRegistro_iden_jefe_logistica").val(element.iden_jefe_logistica);
																		$("#ValidarRegistro_direccion_jefe_logistica").val(element.direccion_jefe_logistica);
																		$("#ValidarRegistro_email_jefe_logistica").val(element.email_jefe_logistica);
																		$("#ValidarRegistro_beneficiario_comercio_exterior").val(element.beneficiario_comercio_exterior);
																		$("#ValidarRegistro_iden_beneficiario").val(element.iden_beneficiario);
																		$("#ValidarRegistro_direccion_beneficiario").val(element.direccion_beneficiario);
																		$("#ValidarRegistro_principales_clientes").val(element.principales_clientes);
																		$("#ValidarRegistro_iden_principales_clientes").val(element.iden_principales_clientes);
																		$("#ValidarRegistro_direccion_principales_clientes").val(element.direccion_principales_clientes);
																		$("#ValidarRegistro_principales_clientes2").val(element.principales_clientes2);
																		$("#ValidarRegistro_iden_principales_clientes2").val(element.iden_principales_clientes2);
																		$("#ValidarRegistro_direccion_principales_clientes2").val(element.direccion_principales_clientes2);
																		$("#ValidarRegistro_ref_comercial_1").val(element.ref_comercial_1);
																		$("#ValidarRegistro_nit_ref_comercial_1").val(element.nit_ref_comercial_1);
																		$("#ValidarRegistro_telefono_ref_comercial_1").val(element.telefono_ref_comercial_1);
																		$("#ValidarRegistro_ref_comercial_2").val(element.ref_comercial_2);
																		$("#ValidarRegistro_nit_ref_comercial_2").val(element.nit_ref_comercial_2);
																		$("#ValidarRegistro_telefono_ref_comercial_2").val(element.telefono_ref_comercial_2);
																		$("#ValidarRegistro_ref_bancaria_1").val(element.ref_bancaria_1);
																		$("#ValidarRegistro_cuenta_ref_bancaria_1").val(element.cuenta_ref_bancaria_1);
																		$("#ValidarRegistro_telefono_ref_bancaria_1").val(element.telefono_ref_bancaria_1);
																		$("#ValidarRegistro_ref_bancaria_2").val(element.ref_bancaria_2);
																		$("#ValidarRegistro_cuenta_ref_bancaria_2").val(element.cuenta_ref_bancaria_2);
																		$("#ValidarRegistro_telefono_ref_bancaria_2").val(element.telefono_ref_bancaria_2);
																		$("#ValidarRegistro_editar_creado").val(element.user_creado);
																		$("#ValidarRegistro_id_creado").val(element.id_creado);
																		if(element.grandes_contribuyentes==1){
																			$("#ValidarRegistro_grandes_contribuyentes_0").attr("checked", "checked");
																		}else{
																				$("#ValidarRegistro_grandes_contribuyentes_1").attr("checked", "checked");
																			}
																		$("#ValidarRegistro_banco_forma_pago").val(element.banco_forma_pago);
																		if(element.busquedaiva>=1){
																			$("#ValidarRegistro_retenedores_0").attr("checked", "checked");																		
																		}
																		if(element.busquedaica>=1){
																			$("#ValidarRegistro_retenedores_1").attr("checked", "checked");																		
																		}
																		if(element.busquedarete>=1){
																			$("#ValidarRegistro_retenedores_2").attr("checked", "checked");																		
																		}
																		if(element.busquedacon>=1){
																			$("#ValidarRegistro_forma_pago_0").attr("checked", "checked");																		
																		}
																		if(element.busquedache>=1){
																			$("#ValidarRegistro_forma_pago_1").attr("checked", "checked");																		
																		}
																		if(element.busquedatrans>=1){
																			$("#ValidarRegistro_forma_pago_2").attr("checked", "checked");																		
																		}
																		if(element.busquedaaar>=1){
																			$("#ValidarRegistro_compromisos_0").attr("checked", "checked");																		
																		}
																		if(element.busquedastp>=1){
																			$("#ValidarRegistro_compromisos_1").attr("checked", "checked");																		
																		}
																		if(element.busquedarcl>=1){
																			$("#ValidarRegistro_compromisos_2").attr("checked", "checked");																		
																		}
																		if(element.busquedaotm>=1){
																			$("#ValidarRegistro_compromisos_3").attr("checked", "checked");																		
																		}
																		if(element.busquedaglx>=1){
																			$("#ValidarRegistro_compromisos_4").attr("checked", "checked");																		
																		}
																		if(element.busquedaits>=1){
																			$("#ValidarRegistro_compromisos_5").attr("checked", "checked");																		
																		}
																		if(element.id_creado>=1){
																		alert("El cliente ya existe en base de datos, la información fue cargada para su edición");
																		}
																	});
																}',
																'beforeSend' =>'js:function(){
																	$("#mens_espera").css({display:"block"});																	
																	}',
																'complete'=>'js:function(result){
																	$("#mens_espera").css({display:"none"});
																	}'
															)
															));
		echo $form->error($model,'identificacion');
		?>
		<div id="mens_espera" style="display:none">
		Validando.....
		</div>
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
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'iden_repre_legal');
		?>
		</div>
		<div class="col-md-4">
		<?php		
		echo $form->textField($model,'dir_repre_legal');
		?>
		</div>
	</div>
<!--Cuarta fila-->
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'nom_repre_suple');
		echo $form->error($model,'nom_repre_suple');
		echo $form->error($model,'nom_repre_legal');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'iden_repre_suple');
		echo $form->error($model,'iden_repre_suple');
		echo $form->error($model,'iden_repre_legal');
		?>
		</div>
		<div class="col-md-4">
		<?php		
		echo $form->textField($model,'dir_repre_suple');
		echo $form->error($model,'dir_repre_suple');
		echo $form->error($model,'dir_repre_legal');
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
		//echo $form->error($model,'jefe_comercio_exterior');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_comercio_exterior');
		//echo $form->error($model,'iden_comercio_exterior');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'direccion_comercio_exterior');
		//echo $form->error($model,'direccion_comercio_exterior');		
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'email_comercio_exterior');
		//echo $form->error($model,'email_comercio_exterior');
		?>
		</div>
	</div>
<!--Octava Fila-->
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'jefe_logistica');
		echo $form->error($model,'jefe_comercio_exterior');
		//echo $form->error($model,'jefe_logistica');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_jefe_logistica');
		echo $form->error($model,'iden_comercio_exterior');
		//echo $form->error($model,'iden_jefe_logistica');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'direccion_jefe_logistica');
		echo $form->error($model,'direccion_comercio_exterior');
		//echo $form->error($model,'direccion_jefe_logistica');		
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'email_jefe_logistica');
		echo $form->error($model,'email_comercio_exterior');
		//echo $form->error($model,'email_jefe_logistica');
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
		//echo $form->error($model,'principales_clientes');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_principales_clientes');
		//echo $form->error($model,'iden_principales_clientes');
		?>
		</div>
		<div class="col-md-4">
		<?php	
		echo $form->textField($model,'direccion_principales_clientes');
		//echo $form->error($model,'direccion_principales_clientes');
		?>
		</div>
	</div>
		<!--Decima Fila 2-->
	<div class="row">
		<div class="col-md-6">
		<?php 
		echo $form->textField($model,'principales_clientes2');
		echo $form->error($model,'principales_clientes');
		//echo $form->error($model,'principales_clientes2');
		?>
		</div>
		<div class="col-md-2">
		<?php
		echo $form->textField($model,'iden_principales_clientes2');
		echo $form->error($model,'iden_principales_clientes');
		//echo $form->error($model,'iden_principales_clientes2');
		?>
		</div>
		<div class="col-md-4">
		<?php	
		echo $form->textField($model,'direccion_principales_clientes2');
		echo $form->error($model,'direccion_principales_clientes');
		//echo $form->error($model,'direccion_principales_clientes2');
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
		//echo $form->error($model,'ref_comercial_1');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'nit_ref_comercial_1');
		//echo $form->error($model,'nit_ref_comercial_1');
		?>
		</div>
		<div class="col-md-4">
		<?php
		echo $form->textField($model,'telefono_ref_comercial_1');
		//echo $form->error($model,'telefono_ref_comercial_1');
		?>
		</div>
	</div>
<!--Fila 12-->
	<div class="row">
		<div class="col-md-6 col_letra">R2
		<?php 
		echo $form->textField($model,'ref_comercial_2', array('class'=>'col_peq'));
		echo $form->error($model,'ref_comercial_1');
		//echo $form->error($model,'ref_comercial_2');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'nit_ref_comercial_2');
		echo $form->error($model,'nit_ref_comercial_1');
		//echo $form->error($model,'nit_ref_comercial_2');
		?>
		</div>
		<div class="col-md-4">
		<?php
		echo $form->textField($model,'telefono_ref_comercial_2');
		echo $form->error($model,'telefono_ref_comercial_1');
		//echo $form->error($model,'telefono_ref_comercial_2');
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
		//echo $form->error($model,'ref_bancaria_1');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'cuenta_ref_bancaria_1');
		//echo $form->error($model,'cuenta_ref_bancaria_1');
		?>
		</div>
		<div class="col-md-4">
		<?php
		echo $form->textField($model,'telefono_ref_bancaria_1');
		//echo $form->error($model,'telefono_ref_bancaria_1');
		?>
		</div>
	</div>
<!--Fila 14-->
	<div class="row">
		<div class="col-md-6 col_letra">R2
		<?php 
		echo $form->textField($model,'ref_bancaria_2', array('class'=>'col_peq'));
		echo $form->error($model,'ref_bancaria_1');
		//echo $form->error($model,'ref_bancaria_2');
		?>
		</div>
		<div class="col-md-2">
		<?php	
		echo $form->textField($model,'cuenta_ref_bancaria_2');
		echo $form->error($model,'cuenta_ref_bancaria_1');
		//echo $form->error($model,'cuenta_ref_bancaria_2');
		?>
		</div>
		<div class="col-md-4">
		<?php
		echo $form->textField($model,'telefono_ref_bancaria_2');
		echo $form->error($model,'telefono_ref_bancaria_1');
		//echo $form->error($model,'telefono_ref_bancaria_2');
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
															3=>'Retención',
															4=>''
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
															1=>'Agencia de Aduanas Roldán S.A.S (AAR)',
															2=>'Serteport S.A (STP)',
															3=>'Roldán y Cia Ltda (RCL)',
															4=>'Global Services OTM S.A.S (OTM)',
															5=>'Glodex S.A.S (GLX)',
															6=>'International Transport Services S.A.S (ITS)'
															//7=>'Rolog (RLG)'
															),
															 array('template'=>'<div class="col-md-6">{label}</div><div class="col-md-1">{input}</div>',),
															 array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'  ',)); 
					echo $form->error($model,'compromisos');
					//echo $form->radioButtonList($model,'arr_compromisos',array(1=>'Agencia de Aduanas Roldán (AAR)'), array('labelOptions'=>array('style'=>'display:inline', 'class' => 'input_peq'),'separator'=>'  ', 'class' =>'input_peq'));
					//echo $form->error($model,'arr_compromisos');
				?>
			</div>
	</div>
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
	<p class="declaro">Declaro que la información aquí suministrada tiene como propósito la prevención, detección y control de lavado de activos y financiación de terrorismo, 
	lo que exceptúa la aplicación de la Ley de Protección de Datos 1581 del 2012.</p>
	<p class="declaro">Yo, el firmante, portador de la cédula de ciudadanía indicada en este formulario afirmo que tanto mis actividades como mi profesión, ocupación u oficio son lícitos
	y los ejerzo dentro de los marcos legales. Me comprometo a actualizar, cuando sea necesario, los datos aquí consignados.</p>
	<p class="declaro">Autorizo a nombre de la empresa a consultar y reportar a las centrales de riesgo.</p>
	<!--<p class="firmas">Firma del Representante Legal_____________________________________<br>
	Fecha:                   
	</p>
	<p class="firmas">Firma del Comercial_____________________________________<br>
	Fecha:                           
	</p>-->
	<?php echo $form->errorSummary($model,'Todos los campos deben estar diligenciados','Revizar los campos que aparecen en color rojo'); ?>
	<?php
		if($editar==1){
		$col1="col-md-12";
		}else{
			$col2="";
			$col2_2="col-md-6";
			}
	?>
	<div class="row">
			<div class='<?php echo $col1.$col2_2?>' id="div_boton">
				<?php
				echo $form->hiddenField($model,'id_client', array('value'=> $id_client));
				echo $form->hiddenField($model,'editar_h', array('value'=> $editar));
				echo $form->hiddenField($model,'editar_creado');
				echo $form->hiddenField($model,'id_creado');
				if($editar==1){
				echo CHtml::submitButton('Guardar', array('class'=>'boton','id'=>'boton'));
				}else{
						echo CHtml::submitButton('Modificar', array('class'=>'boton','id'=>'boton'));
					}
$this->endWidget();			
?>
			</div>
			<div class='<?php echo $col2.$col2_2?>' id="div_boton">
<?php
	if($editar==1){
	}else{
	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'imprimir_pdf',
		'method' => 'POST',
		'action' => yii::app()->createUrl('site/pdf'),
		'htmlOptions'=>array('target'=>'_blank'),
		'enableClientValidation' => true,
		));
		echo $form->hiddenField($model,'editar_creado');
		echo $form->hiddenField($model,'id_creado');
		echo $form->hiddenField($model,'id_client', array('value'=> $id_client));
		echo CHtml::submitButton('Imprimir', array('class'=>'boton'));
	$this->endWidget();	
	}
?>
			</div>
	</div>
</div>
<!--<script type="text/javascript" src="<?php //echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.3.js"></script>-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js_pluggin_price_format.js"></script>
<script>
$('#ValidarRegistro_capital_pagado').priceFormat({
    prefix: '$ ',
	centsLimit: 0
});

$("#ValidarRegistro_grandes_contribuyentes_1").click(function(){
	$("#ValidarRegistro_retenedores_3").prop('checked', 'checked');
	//$("#ValidarRegistro_retenedores_0").prop('checked', 'checked'); 
	//$("#ValidarRegistro_retenedores_em").css("display:none !important;");
});
$("#ValidarRegistro_grandes_contribuyentes_0").click(function(){
	$("#ValidarRegistro_retenedores_3").prop("checked", false);
	//$("#ValidarRegistro_retenedores_0").prop('checked', false); 
	//$("#ValidarRegistro_retenedores_em").css("display:block !important;");
});	
</script>
<?php
if($editar==1){
	}else{
?>
<script>
alert('Registro actualizado exitosamente, puede modificar la información o imprimir el formulario');
</script>
<?php
	}
?>