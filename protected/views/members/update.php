<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Members', 'url'=>array('index')),
	array('label'=>'Create Members', 'url'=>array('create')),
	array('label'=>'View Members', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Members', 'url'=>array('admin')),
);
?>

<h1>Update Members <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>