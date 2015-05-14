<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- bootstrap 3.0.2 -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
     <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Style custom -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/style.css" rel="stylesheet" type="text/css" />

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

 	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body class="skin-blue sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">

            <?php
                $this->widget('Navbar', array(
                    //'brand'=>CHtml::image(Yii::app()->baseUrl . "/images/logo_neocds.png", ""),
                    'icon'=>'Adm',
                    'brand'=>'Administração',
                    'brandUrl'=>$this->createUrl('default/index'),
                    'htmlOptions'=>array('class'=>'navbar-custom-menu'),
                    'items'=>array(
                        array(
                            'class'=>'Messages',
                            'htmlOptions'=>array('class'=>'dropdown messages-menu'),
                            'icon'=>'fa fa-envelope-o',
                            'itemsCssClass'=>'dropdown-menu',
                            'labelHeader'=>array('title'=>'You have {n} messages|You have {n} messages', 'params'=>3),
                            'labelFooter'=>array('title'=>'See All Messages'),
                            'badge'=>array('class'=>'label label-success', 'value'=>3),
                            'items'=>array(
                                array('title'=>'Support Team', 'imageUrl'=>Yii::app()->theme->baseUrl . '/dist/img/avatar4.png', 'url'=>'#','icon'=>'fa fa-clock-o','value'=>'Why not buy a new awesome theme?')
                                )
                            ),
                        array(
                            'class'=>'Notifications',
                            'htmlOptions'=>array('class'=>'dropdown notifications-menu'),
                            'icon'=>'fa fa-bell-o',
                            'itemsCssClass'=>'dropdown-menu',
                            'labelHeader'=>array('title'=>'You have {n} notification|You have {n} notifications', 'params'=>16),
                            'labelFooter'=>array('title'=>'View All'),
                            'badge'=>array('class'=>'label label-warning', 'value'=>16),
                            'items'=>array(
                                array('url'=>'#','icon'=>'fa fa-users text-aqua','value'=>'Why not buy a new awesome theme?')
                                )
                            ),
                        array(
                            'class'=>'Users',
                            'htmlOptions'=>array('class'=>'dropdown user user-menu'),
                            'avatar'=> Yii::app()->theme->baseUrl . '/dist/img/avatar4.png',
                            'itemsCssClass'=>'dropdown-menu',
                            'items'=>array(
                                array('url'=>'#', 'label'=>Yii::t('app','Change Password')),
                                array('url'=>array('default/logout'), 'label'=>Yii::t('app','Logout'))
                                )
                            ),
                        )
                ));
            ?>

    	    <?php echo $content; ?>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <?php echo Yii::powered(); ?>
                </div>
                Copyright &copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved.
            </footer>


          <div class='control-sidebar-bg'></div>

    </div><!-- ./wrapper -->

    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo Yii::app()->theme->baseUrl; ?>/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/js/app.min.js" type="text/javascript"></script>

</body>
</html>
