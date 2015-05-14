Base App with custom Yii 1.1.16 + template adminLTE 2.1.1
========

For use this project, you need composer.

##To install

	clone the project

enter in the folder project

	cd path/project/protected && composer install

run the command:

	git checkout -f

after rename the file

    protected/vendor/yiisoft/yii/framework/gii/generators/crud/CrudCode_custom.php
    to
	protected/vendor/yiisoft/yii/framework/gii/generators/crud/CrudCode.php

after run composer, execute:

	cd vendor/yiisoft/yii/framework/ && php yiic webapp path/project

put YES for create application and after put NO and NO again for doesn't overwrite some files.

move or merge the AdminLTE theme from:

	protected/vendor/almasaeed2010/adminlte
	to
	themes/AdminLTE-2.1.1

OBS 1: for use GII, select "Code Template" > custom

OBS 2: To use environment DEV, rename config/sample-main-local.php to main-local.php.

The file environment set debug on server production or development

