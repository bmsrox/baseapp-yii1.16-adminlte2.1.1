<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

     <!-- bootstrap 3.0.2 -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
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

<body class="login-page">

       <?php echo $content; ?>

    <!-- Bootstrap -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
