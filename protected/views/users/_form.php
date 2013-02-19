<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SchoolEmployed'); ?>
		<?php echo $form->textField($model,'SchoolEmployed',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SchoolEmployed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Position'); ?>
		<?php echo $form->textField($model,'Position',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TeachingLevel'); ?>
		<?php echo $form->textField($model,'TeachingLevel',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'TeachingLevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImageUrl'); ?>
		<?php echo $form->textField($model,'ImageUrl',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->