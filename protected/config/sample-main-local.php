<?php

return array(
	'modules'=>array(
		'gii'=>array(
				'class'=>'system.gii.GiiModule',
				'password'=>'123456',
				// If removed, Gii defaults to localhost only. Edit carefully to taste.
				'ipFilters'=>array('127.0.0.1','::1'),
			)
		)
	);