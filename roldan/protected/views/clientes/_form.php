<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($model, $model_direcciones)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres_apellidos'); ?>
		<?php echo $form->textField($model,'nombres_apellidos',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nombres_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion'); ?>
		<?php echo $form->textField($model,'identificacion'); ?>
		<?php echo $form->error($model,'identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_rut'); ?>
		<?php echo $form->textField($model,'direccion_rut',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'direccion_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonos'); ?>
		<?php echo $form->textField($model,'telefonos',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'telefonos'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model_direcciones,'direccion'); ?>
		<?php echo $form->textField($model_direcciones,'direccion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model_direcciones,'direccion'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model_direcciones,'direccion1'); ?>
		<?php echo $form->textField($model_direcciones,'direccion1',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model_direcciones,'direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->