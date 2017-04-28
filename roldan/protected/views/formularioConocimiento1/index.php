<?php
/* @var $this FormularioConocimiento1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formulario Conocimiento1s',
);

$this->menu=array(
	array('label'=>'Create FormularioConocimiento1', 'url'=>array('create')),
	array('label'=>'Manage FormularioConocimiento1', 'url'=>array('admin')),
);
?>

<h1>Formulario Conocimiento1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
