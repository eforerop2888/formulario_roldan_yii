<?php
/* @var $this FormularioConocimientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formulario Conocimientos',
);

$this->menu=array(
	array('label'=>'Create FormularioConocimiento', 'url'=>array('create')),
	array('label'=>'Manage FormularioConocimiento', 'url'=>array('admin')),
);
?>

<h1>Formulario Conocimientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
