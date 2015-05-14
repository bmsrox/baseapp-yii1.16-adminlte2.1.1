 <div class="login-box">
      <div class="login-logo">
        <b>Admin</b>LTE
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><?php echo Yii::t('app', 'Sign in to start your session') ?></p>

            <?php $form=$this->beginWidget('CActiveForm', array(
        		'id'=>'login-form',
        		'action'=>CController::createUrl('default/login'),
        		'enableClientValidation'=>true,
        		'clientOptions'=>array(
        			'validateOnSubmit'=>true,
        			),
        			//'htmlOptions'=>array('class'=>'form-signin')
        			)); ?>

        				<div class="form-group has-feedback">
        					<span class="glyphicon glyphicon-user form-control-feedback"></span>
        					<?php echo $form->textField($model,'username', array('class'=>'form-control', 'placeholder'=>Yii::t('app', 'Username'))); ?>
        					<?php echo $form->error($model,'username'); ?>
        				</div>
        				<div class="form-group has-feedback">
        					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
        					<?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'placeholder'=>Yii::t('app', 'Password'))); ?>
        					<?php echo $form->error($model,'password'); ?>
        				</div>

        				<div class="row">
        				  <div class="col-xs-8">
        				    	 <a href="#"><?php echo Yii::t('app', 'I forgot my password'); ?></a>
        				  </div><!-- /.col -->
        				  <div class="col-xs-4">
        				    <?php echo CHtml::submitButton(Yii::t('app', 'Sign In'), array('class'=>'btn btn-primary btn-block btn-flat')); ?>
        				  </div><!-- /.col -->
        				</div>


        <?php $this->endWidget(); ?>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    
