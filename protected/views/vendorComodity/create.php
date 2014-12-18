<?php
/* @var $this VendorComodityController */
/* @var $model VendorComodity */

$this->breadcrumbs=array(
	'Vendor Comodities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VendorComodity', 'url'=>array('index')),
	array('label'=>'Manage VendorComodity', 'url'=>array('admin')),
);
?>

<h1>Create VendorComodity</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>