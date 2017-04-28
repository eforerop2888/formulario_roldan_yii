<?php
/* @var $this FormularioConocimiento2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formulario Conocimiento2s',
);

$this->menu=array(
	array('label'=>'Create FormularioConocimiento2', 'url'=>array('create')),
	array('label'=>'Manage FormularioConocimiento2', 'url'=>array('admin')),
);
?>

<h1>Formulario Conocimiento2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
