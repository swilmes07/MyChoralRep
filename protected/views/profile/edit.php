<script type="text/javascript" src="/web/mychoralrep/assets/1dd9c9da/jquery.js"></script>
<script type="text/javascript" src="/web/mychoralrep/assets/1dd9c9da/jquery.yii.js"></script>


<?php
/* @var $this ProfileController */

$this->breadcrumbs=array(
	'Profile'=>array('/profile'),
	'Edit',
    $model->ID,
);
?>
<h1>Edit Your Profile</h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
<?php 

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'LastName',
		'FirstName',
		'Email',
		'SchoolEmployed',
		'Position',
		'TeachingLevel',
		'ImageUrl',
		/*'Password',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<h1>Update Users <?php echo $model->ID; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
