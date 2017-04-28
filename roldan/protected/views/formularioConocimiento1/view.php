<?php
/* @var $this FormularioConocimiento1Controller */
/* @var $model FormularioConocimiento1 */

$this->breadcrumbs=array(
	'Formulario Conocimiento1s'=>array('index'),
	$model->identificacion,
);

$this->menu=array(
	array('label'=>'List FormularioConocimiento1', 'url'=>array('index')),
	array('label'=>'Create FormularioConocimiento1', 'url'=>array('create')),
	array('label'=>'Update FormularioConocimiento1', 'url'=>array('update', 'id'=>$model->identificacion)),
	array('label'=>'Delete FormularioConocimiento1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->identificacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormularioConocimiento1', 'url'=>array('admin')),
);
?>

<h1>View FormularioConocimiento1 #<?php echo $model->identificacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombres_apellidos',
		'identificacion',
		'direccion',
		'ciudad',
		'telefono',
		'direccion_rut',
		'representante_legal',
		'identificacion_repres',
		'direccion_repre',
		'suplente_lega',
		'identificacion_suple',
		'direccion_suplente',
		'actividad_economica',
		'capital_pagado',
		'origen_recursos',
		'jefe_comercio_ext',
		'identificacion_jefe',
		'direccion_jefe',
		'email_jefe',
		'benef_comer_ext',
		'identificacion_benef',
		'direccion_benef',
		'nombre_clientes',
		'identificacion_clientes',
		'direccion_clientes',
		'ref_comercial_1',
		'nit_ref_1',
		'telefono_ref_1',
		'ref_comercial_2',
		'nit_ref_2',
		'telefono_ref_2',
		'ref_bancaria_1',
		'cuenta_refban_1',
		'telefono_refban_1',
		'ref_bancaria_2',
		'cuenta_refban_2',
		'telefono_refban_2',
		'grandes_contribuyentes',
		'retenedores',
		'forma_pago',
		'banco_forma_pago',
	),
)); ?>
