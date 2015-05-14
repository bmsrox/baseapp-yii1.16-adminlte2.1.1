<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>

	<p class="note"><?php echo "<?php echo Yii::t('app','Fields with'); ?>"; ?><span class="required"> * </span><?php echo "<?php echo Yii::t('app','are required'); ?>"; ?>.</p>

	<?php echo "<?php echo \$form->errorSummary(\$model,NULL,NULL,array('class'=>'alert alert-danger')); ?>\n"; ?>

	<div class="box box-info">

		<div class="box-body">

<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>
			<div class="form-group">
				<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
				<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
				<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
			</div>

<?php
}
?>
		</div>

		<div class="box-footer">
			<div class="form-btn">
				<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'), array('class'=>'btn btn-info')); ?>\n"; ?>
			</div>
		</div>

	</div>
<?php echo "<?php \$this->endWidget(); ?>\n"; ?>