<?php

class Menu {

	public static function link($label, $icon = null) {

		$link = null;

		if (!empty($icon))
			$link .= CHtml::tag('i', array('class'=>$icon),'',true);

		$link .= CHtml::tag('span', array(), Yii::t('app', $label),true);

		return $link;

	}

}