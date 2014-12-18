<?php
/* @var $this ComodityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comodities',
);

$this->menu=array(
	array('label'=>'Create Comodity', 'url'=>array('create')),
	array('label'=>'Manage Comodity', 'url'=>array('admin')),
);
?>

<h1>Comodities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
