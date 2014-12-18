<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
    <h3>Available</h3>
    <ul><?php echo CHtml::link('markets', array('/api/market'))?></ul>
</p>