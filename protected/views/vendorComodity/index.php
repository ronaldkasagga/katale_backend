<?php
/* @var $this VendorComodityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vendor Comodities',
);

$this->menu=array(
	array('label'=>'Create VendorComodity', 'url'=>array('create')),
	array('label'=>'Manage VendorComodity', 'url'=>array('admin')),
);
?>

<h1>Vendor Comodities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
