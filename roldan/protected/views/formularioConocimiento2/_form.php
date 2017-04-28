<?php
/* @var $this FormularioConocimiento2Controller */
/* @var $model FormularioConocimiento2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formulario-conocimiento2-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres_apellidos'); ?>
		<?php echo $form->textField($model,'nombres_apellidos',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombres_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion'); ?>
		<?php echo $form->textField($model,'identificacion'); ?>
		<?php echo $form->error($model,'identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_rut'); ?>
		<?php echo $form->textField($model,'direccion_rut',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'representante_legal'); ?>
		<?php echo $form->textField($model,'representante_legal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'representante_legal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion_repres'); ?>
		<?php echo $form->textField($model,'identificacion_repres'); ?>
		<?php echo $form->error($model,'identificacion_repres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_repre'); ?>
		<?php echo $form->textField($model,'direccion_repre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion_repre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suplente_lega'); ?>
		<?php echo $form->textField($model,'suplente_lega',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'suplente_lega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion_suple'); ?>
		<?php echo $form->textField($model,'identificacion_suple'); ?>
		<?php echo $form->error($model,'identificacion_suple'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_suplente'); ?>
		<?php echo $form->textField($model,'direccion_suplente',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion_suplente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actividad_economica'); ?>
		<?php echo $form->textField($model,'actividad_economica'); ?>
		<?php echo $form->error($model,'actividad_economica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capital_pagado'); ?>
		<?php echo $form->textField($model,'capital_pagado'); ?>
		<?php echo $form->error($model,'capital_pagado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'origen_recursos'); ?>
		<?php echo $form->textArea($model,'origen_recursos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'origen_recursos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jefe_comercio_ext'); ?>
		<?php echo $form->textField($model,'jefe_comercio_ext',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jefe_comercio_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion_jefe'); ?>
		<?php echo $form->textField($model,'identificacion_jefe'); ?>
		<?php echo $form->error($model,'identificacion_jefe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_jefe'); ?>
		<?php echo $form->textField($model,'direccion_jefe',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion_jefe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_jefe'); ?>
		<?php echo $form->textField($model,'email_jefe',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_jefe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'benef_comer_ext'); ?>
		<?php echo $form->textField($model,'benef_comer_ext',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'benef_comer_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion_benef'); ?>
		<?php echo $form->textField($model,'identificacion_benef'); ?>
		<?php echo $form->error($model,'identificacion_benef'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_benef'); ?>
		<?php echo $form->textField($model,'direccion_benef',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion_benef'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_clientes'); ?>
		<?php echo $form->textArea($model,'nombre_clientes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nombre_clientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion_clientes'); ?>
		<?php echo $form->textField($model,'identificacion_clientes'); ?>
		<?php echo $form->error($model,'identificacion_clientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_clientes'); ?>
		<?php echo $form->textField($model,'direccion_clientes',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion_clientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_comercial_1'); ?>
		<?php echo $form->textField($model,'ref_comercial_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ref_comercial_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nit_ref_1'); ?>
		<?php echo $form->textField($model,'nit_ref_1'); ?>
		<?php echo $form->error($model,'nit_ref_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_ref_1'); ?>
		<?php echo $form->textField($model,'telefono_ref_1'); ?>
		<?php echo $form->error($model,'telefono_ref_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_comercial_2'); ?>
		<?php echo $form->textField($model,'ref_comercial_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ref_comercial_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nit_ref_2'); ?>
		<?php echo $form->textField($model,'nit_ref_2'); ?>
		<?php echo $form->error($model,'nit_ref_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_ref_2'); ?>
		<?php echo $form->textField($model,'telefono_ref_2'); ?>
		<?php echo $form->error($model,'telefono_ref_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_bancaria_1'); ?>
		<?php echo $form->textField($model,'ref_bancaria_1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ref_bancaria_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuenta_refban_1'); ?>
		<?php echo $form->textField($model,'cuenta_refban_1'); ?>
		<?php echo $form->error($model,'cuenta_refban_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_refban_1'); ?>
		<?php echo $form->textField($model,'telefono_refban_1'); ?>
		<?php echo $form->error($model,'telefono_refban_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_bancaria_2'); ?>
		<?php echo $form->textField($model,'ref_bancaria_2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ref_bancaria_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuenta_refban_2'); ?>
		<?php echo $form->textField($model,'cuenta_refban_2'); ?>
		<?php echo $form->error($model,'cuenta_refban_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_refban_2'); ?>
		<?php echo $form->textField($model,'telefono_refban_2'); ?>
		<?php echo $form->error($model,'telefono_refban_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grandes_contribuyentes'); ?>
		<?php echo $form->textField($model,'grandes_contribuyentes'); ?>
		<?php echo $form->error($model,'grandes_contribuyentes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retenedores'); ?>
		<?php echo $form->textField($model,'retenedores'); ?>
		<?php echo $form->error($model,'retenedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_pago'); ?>
		<?php echo $form->textField($model,'forma_pago'); ?>
		<?php echo $form->error($model,'forma_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banco_forma_pago'); ?>
		<?php echo $form->textField($model,'banco_forma_pago',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'banco_forma_pago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->