<?php
/* @var $this DireccionesController */
/* @var $data Direcciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_direcciones')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_direcciones), array('view', 'id'=>$data->id_direcciones)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_clientes')); ?>:</b>
	<?php echo CHtml::encode($data->id_clientes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('principal')); ?>:</b>
	<?php echo CHtml::encode($data->principal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />


</div>