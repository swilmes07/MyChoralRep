<?php
/* @var $this MembersController */
/* @var $model Members */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'members-register-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName'); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName'); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pass'); ?>
		<?php echo $form->textField($model,'Pass'); ?>
		<?php echo $form->error($model,'Pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SkillLevel'); ?>
		<?php echo $form->dropDownList($model,'SkillLevel', array( 'Elementary'=>'Elementary',
																   'Junior/Senior High'=>'Junior/Senior High',
																   'University'=>'University',
																   'Advanced'=>'Advanced', )); ?>
		<?php echo $form->error($model,'SkillLevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagelocation'); ?>
		<?php echo $form->fileField($model,'imagelocation'); ?>
		<?php echo $form->error($model,'imagelocation'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->