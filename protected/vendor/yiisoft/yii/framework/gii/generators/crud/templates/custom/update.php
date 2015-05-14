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
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	Yii::t('app','$label')=>array('index'),
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	Yii::t('app','Update'),
);\n";
?>
$this->pageTitle = Yii::t('app','Update {modelClass}', array('{modelClass}'=>'<?php echo $this->modelClass; ?>')) . ' #' . $model-><?php echo $this->tableSchema->primaryKey; ?>;
?>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>