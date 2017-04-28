<?php
/* @var $this FormularioConocimientoController */
/* @var $model FormularioConocimiento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nombres_apellidos'); ?>
		<?php echo $form->textField($model,'nombres_apellidos',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion'); ?>
		<?php echo $form->textField($model,'identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_rut'); ?>
		<?php echo $form->textField($model,'direccion_rut',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'representante_legal'); ?>
		<?php echo $form->textField($model,'representante_legal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion_repres'); ?>
		<?php echo $form->textField($model,'identificacion_repres'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_repre'); ?>
		<?php echo $form->textField($model,'direccion_repre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suplente_lega'); ?>
		<?php echo $form->textField($model,'suplente_lega',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion_suple'); ?>
		<?php echo $form->textField($model,'identificacion_suple'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_suplente'); ?>
		<?php echo $form->textField($model,'direccion_suplente',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actividad_economica'); ?>
		<?php echo $form->textField($model,'actividad_economica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capital_pagado'); ?>
		<?php echo $form->textField($model,'capital_pagado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'origen_recursos'); ?>
		<?php echo $form->textArea($model,'origen_recursos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jefe_comercio_ext'); ?>
		<?php echo $form->textField($model,'jefe_comercio_ext',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion_jefe'); ?>
		<?php echo $form->textField($model,'identificacion_jefe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_jefe'); ?>
		<?php echo $form->textField($model,'direccion_jefe',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_jefe'); ?>
		<?php echo $form->textField($model,'email_jefe',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'benef_comer_ext'); ?>
		<?php echo $form->textField($model,'benef_comer_ext',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion_benef'); ?>
		<?php echo $form->textField($model,'identificacion_benef'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_benef'); ?>
		<?php echo $form->textField($model,'direccion_benef',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_clientes'); ?>
		<?php echo $form->textArea($model,'nombre_clientes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion_clientes'); ?>
		<?php echo $form->textField($model,'identificacion_clientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_clientes'); ?>
		<?php echo $form->textField($model,'direccion_clientes',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref_comercial_1'); ?>
		<?php echo $form->textField($model,'ref_comercial_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nit_ref_1'); ?>
		<?php echo $form->textField($model,'nit_ref_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_ref_1'); ?>
		<?php echo $form->textField($model,'telefono_ref_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref_comercial_2'); ?>
		<?php echo $form->textField($model,'ref_comercial_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nit_ref_2'); ?>
		<?php echo $form->textField($model,'nit_ref_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_ref_2'); ?>
		<?php echo $form->textField($model,'telefono_ref_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref_bancaria_1'); ?>
		<?php echo $form->textField($model,'ref_bancaria_1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nit_refban_1'); ?>
		<?php echo $form->textField($model,'nit_refban_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_refban_1'); ?>
		<?php echo $form->textField($model,'telefono_refban_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref_bancaria_2'); ?>
		<?php echo $form->textField($model,'ref_bancaria_2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nit_refban_2'); ?>
		<?php echo $form->textField($model,'nit_refban_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_refban_2'); ?>
		<?php echo $form->textField($model,'telefono_refban_2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->