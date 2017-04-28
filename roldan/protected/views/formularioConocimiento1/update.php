<?php
/* @var $this FormularioConocimiento1Controller */
/* @var $model FormularioConocimiento1 */

$this->breadcrumbs=array(
	'Formulario Conocimiento1s'=>array('index'),
	$model->identificacion=>array('view','id'=>$model->identificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormularioConocimiento1', 'url'=>array('index')),
	array('label'=>'Create FormularioConocimiento1', 'url'=>array('create')),
	array('label'=>'View FormularioConocimiento1', 'url'=>array('view', 'id'=>$model->identificacion)),
	array('label'=>'Manage FormularioConocimiento1', 'url'=>array('admin')),
);
?>

<h1>Update FormularioConocimiento1 <?php echo $model->identificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>