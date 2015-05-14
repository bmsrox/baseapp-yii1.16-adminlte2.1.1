<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>


	<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl(\$this->route),
		'method'=>'get',
		'htmlOptions'=>array('class'=>'form-inline')
	)); ?>\n"; ?>

	<?php

		foreach($this->tableSchema->columns as $column):
			break;
		endforeach;

	?>
		<div class="input-group input-group-sm">
			<?php echo "<?php echo \$form->textField(\$model,'id',array('class'=>'form-control', 'placeholder'=>Yii::t('app','Search'))); ?>\n"; ?>
			<span class="input-group-btn">
				<button class="btn btn-warning btn-flat" type="submit"><i class="fa fa-search"></i></button>
			</span>
		</div>

	<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
