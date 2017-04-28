<?php
/* @var $this FormularioConocimientoController */
/* @var $model FormularioConocimiento */

$this->breadcrumbs=array(
	'Formulario Conocimientos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FormularioConocimiento', 'url'=>array('index')),
	array('label'=>'Create FormularioConocimiento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#formulario-conocimiento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Formulario Conocimientos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'formulario-conocimiento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombres_apellidos',
		'identificacion',
		'direccion',
		'ciudad',
		'telefono',
		'direccion_rut',
		/*
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
		'nit_refban_1',
		'telefono_refban_1',
		'ref_bancaria_2',
		'nit_refban_2',
		'telefono_refban_2',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
