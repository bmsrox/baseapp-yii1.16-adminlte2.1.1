<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
 	Yii::t('app','$label')=>array('index'),
	Yii::t('app','Create'),
);\n";
?>

$this->pageTitle = Yii::t('app','Create {modelClass}', array('{modelClass}'=>'<?php echo $this->modelClass; ?>'));
?>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
