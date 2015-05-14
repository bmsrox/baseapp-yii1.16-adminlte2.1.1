<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::t('app', 'Error {code}', array('{code}'=>$code));
$this->breadcrumbs=array(
	Yii::t('app', 'Error'),
);
?>

<div class="error-page">
	<h2 class="headline text-red"> <?php echo $code; ?></h2>
	<div class="error-content">
		<h3><i class="fa fa-warning text-red"></i> Oops!</h3>
		<p>
			<?php echo CHtml::encode($message); ?>
		</p>
	</div><!-- /.error-content -->
</div><!-- /.error-page -->