<?php

class Users extends CWidget{

	public $avatar;

	public $items = array();

	public $htmlOptions = array();

	public $itemsCssClass;

    public $visible = TRUE;

    public function run()
    {

        if($this->visible){

    	echo CHtml::openTag('li', $this->htmlOptions);

            $contentLink = null;

            if(!empty($this->avatar))
    		  $contentLink .= CHtml::image($this->avatar, Yii::t('app', 'User image'), array('class'=>'user-image'));

            	$contentLink .= CHtml::openTag('span', array('class'=>'hidden-xs'));
                    $contentLink .= ucfirst(Yii::app()->user->name);
                $contentLink .= CHtml::closeTag('span');

    		echo CHtml::link($contentLink, '#', array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown'));

    		echo CHtml::openTag('ul', array('class'=>$this->itemsCssClass));

                 if(!empty($this->items)){

                        foreach ($this->items as $item) {
                           echo CHtml::openTag('li', array());
                           echo CHtml::link($item['label'], $item['url']);
                           echo CHtml::closeTag('li');
                        }

                }

    		echo CHtml::closeTag('ul');

    	echo CHtml::closeTag('li');

        }

    }

}