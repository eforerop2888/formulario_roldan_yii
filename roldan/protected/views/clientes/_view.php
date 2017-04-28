<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_clientes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_clientes), array('view', 'id'=>$data->id_clientes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->nombres_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_rut')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonos')); ?>:</b>
	<?php echo CHtml::encode($data->telefonos); ?>
	<br />


</div>