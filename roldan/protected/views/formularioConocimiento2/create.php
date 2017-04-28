<?php
/* @var $this FormularioConocimiento2Controller */
/* @var $model FormularioConocimiento2 */

$this->breadcrumbs=array(
	'Formulario Conocimiento2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormularioConocimiento2', 'url'=>array('index')),
	array('label'=>'Manage FormularioConocimiento2', 'url'=>array('admin')),
);
?>

<h1>Create FormularioConocimiento2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>