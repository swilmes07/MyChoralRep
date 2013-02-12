<?php
/* @var $this MembersController */
/* @var $model Members */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'members-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pass'); ?>
		<?php echo $form->passwordField($model,'Pass',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SkillLevel'); ?>
		<?php echo $form->textField($model,'SkillLevel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SkillLevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagelocation'); ?>
		<?php echo $form->textField($model,'imagelocation',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'imagelocation'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->