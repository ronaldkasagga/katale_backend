<?php
/* @var $this ComodityController */
/* @var $model Comodity */

$this->breadcrumbs=array(
	'Comodities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comodity', 'url'=>array('index')),
	array('label'=>'Manage Comodity', 'url'=>array('admin')),
);
?>

<h1>Create Comodity</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>