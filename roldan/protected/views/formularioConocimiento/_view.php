<?php
/* @var $this FormularioConocimientoController */
/* @var $data FormularioConocimiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->identificacion), array('view', 'id'=>$data->identificacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->nombres_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_rut')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('representante_legal')); ?>:</b>
	<?php echo CHtml::encode($data->representante_legal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion_repres')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion_repres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_repre')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_repre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suplente_lega')); ?>:</b>
	<?php echo CHtml::encode($data->suplente_lega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion_suple')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion_suple); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_suplente')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_suplente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividad_economica')); ?>:</b>
	<?php echo CHtml::encode($data->actividad_economica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital_pagado')); ?>:</b>
	<?php echo CHtml::encode($data->capital_pagado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('origen_recursos')); ?>:</b>
	<?php echo CHtml::encode($data->origen_recursos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jefe_comercio_ext')); ?>:</b>
	<?php echo CHtml::encode($data->jefe_comercio_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion_jefe')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion_jefe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_jefe')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_jefe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_jefe')); ?>:</b>
	<?php echo CHtml::encode($data->email_jefe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('benef_comer_ext')); ?>:</b>
	<?php echo CHtml::encode($data->benef_comer_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion_benef')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion_benef); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_benef')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_benef); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_clientes')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_clientes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion_clientes')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion_clientes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_clientes')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_clientes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_comercial_1')); ?>:</b>
	<?php echo CHtml::encode($data->ref_comercial_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit_ref_1')); ?>:</b>
	<?php echo CHtml::encode($data->nit_ref_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_ref_1')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_ref_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_comercial_2')); ?>:</b>
	<?php echo CHtml::encode($data->ref_comercial_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit_ref_2')); ?>:</b>
	<?php echo CHtml::encode($data->nit_ref_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_ref_2')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_ref_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_bancaria_1')); ?>:</b>
	<?php echo CHtml::encode($data->ref_bancaria_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit_refban_1')); ?>:</b>
	<?php echo CHtml::encode($data->nit_refban_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_refban_1')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_refban_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_bancaria_2')); ?>:</b>
	<?php echo CHtml::encode($data->ref_bancaria_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit_refban_2')); ?>:</b>
	<?php echo CHtml::encode($data->nit_refban_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_refban_2')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_refban_2); ?>
	<br />

	*/ ?>

</div>