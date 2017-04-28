<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_direcciones'); ?>
		<?php echo $form->textField($model,'id_direcciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_clientes'); ?>
		<?php echo $form->textField($model,'id_clientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'principal'); ?>
		<?php echo $form->textField($model,'principal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->