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
	\$model->{$nameColumn},
);\n";
?>

$this->pageTitle = Yii::t('app','View {modelClass}', array('{modelClass}'=>'<?php echo $this->modelClass; ?>')) . ' #'. $model-><?php echo $this->tableSchema->primaryKey; ?>;

$this->menu=array(
	array('label'=>'<i class="fa fa-cog"></i>' . Yii::t('app','Manage'), 'url'=>array('index'), 'active'=>true, 'linkOptions'=>array('class'=>'btn btn-block btn-social btn-info')),
	array('label'=>'<i class="fa fa-plus"></i>' . Yii::t('app','Create'), 'url'=>array('create'),  'active'=>true, 'linkOptions'=>array('class'=>'btn btn-block btn-social btn-success')),
	array('label'=>'<i class="fa fa-edit"></i>' . Yii::t('app','Update'), 'url'=>array('update', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),  'active'=>true, 'linkOptions'=>array('class'=>'btn btn-block btn-social btn-warning')),
	array('label'=>'<i class="fa fa-trash-o"></i>' . Yii::t('app','Delete'), 'url'=>'#',  'active'=>true, 'linkOptions'=>array('class'=>'btn btn-block btn-social btn-danger', 'submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
);
?>

<div class="box">

	<div class="box-header with-border">

<?php echo "<?php \$this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array('class'=>'nav nav-pills'),
			'firstItemCssClass'=>'btn-first',
			'encodeLabel'=>false,
			'itemTemplate' => '<div>{menu}</div>',
			'items'=>\$this->menu,
		)); ?>\n"; ?>

	</div>

	<div class="box-body">

<?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'detail-view table table-striped table-bordered table-condensed'),
	'cssFile'=>false,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	if($column->name !== 'password')
		echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>

	</div>

</div>