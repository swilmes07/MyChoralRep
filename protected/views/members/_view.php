<?php
/* @var $this MembersController */
/* @var $data Members */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pass')); ?>:</b>
	<?php echo CHtml::encode($data->Pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SkillLevel')); ?>:</b>
	<?php echo CHtml::encode($data->SkillLevel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagelocation')); ?>:</b>
	<?php echo CHtml::encode($data->imagelocation); ?>
	<br />


</div>