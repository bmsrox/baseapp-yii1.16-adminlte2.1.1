<?php

class Messages extends CWidget{

	public $icon;

	public $badge = array();

	public $items = array();

	public $htmlOptions = array();

	public $redirect = array();

	public $itemsCssClass;

	public $labelHeader = array();

	public $labelFooter = array();

    public function init(){

    	if(!isset($this->labelHeader['title']))
    		$this->labelHeader['title'] = '';

    	if(!isset($this->labelHeader['params']))
    		$this->labelHeader['params'] = '';

    	if(!isset($this->labelFooter['title']))
    		$this->labelFooter['title'] = '';

    	if(!isset($this->labelFooter['params']))
    		$this->labelFooter['params'] = '';

    }

    public function run()
    {

    	echo CHtml::openTag('li', $this->htmlOptions);

    		$contentLink  = CHtml::tag('i', array('class'=>$this->icon),'',true);

    		if(!empty($this->badge)){
            	$contentLink .= CHtml::tag('span', array('class'=>$this->badge['class']),$this->badge['value'],true);
    		}

    		echo CHtml::link($contentLink, '#', array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown'));

    		echo CHtml::openTag('ul', array('class'=>$this->itemsCssClass));

    			echo CHtml::tag('li', array('class'=>'header'),Yii::t('app',$this->labelHeader['title'], $this->labelHeader['params']), true);

    			foreach ($this->items as $item) {
    				echo CHtml::openTag('li');

    					echo CHtml::openTag('ul', array('class'=>'menu'));

    						echo CHtml::openTag('li');

    							if(is_string($item))
    								echo $item;
    							else{
    								echo CHtml::openTag('a', array('href'=>$item['url']));

    								if(isset($item['imageUrl'])){

    									echo CHtml::openTag('div', array('class'=>'pull-left'));

    										echo CHtml::image($item['imageUrl'],'', array('class'=>'img-circle'));

    									echo CHtml::closeTag('div');

    								}

    									echo CHtml::openTag('h4');

    										echo $item['title'];

    										echo CHtml::openTag('small');

    											echo CHtml::tag('i', array('class'=>$item['icon']),'',true);

    											echo ' 5 mins';

    										echo CHtml::closeTag('small');

    									echo CHtml::closeTag('h4');

    									echo CHtml::tag('p', array(), Yii::t('app',$item['value']),true);

    								echo CHtml::closeTag('a');
    							}

    						echo CHtml::closeTag('li');

    					echo CHtml::closeTag('ul');

    				echo CHtml::closeTag('li');
    			}

    			echo CHtml::tag('li',array('class'=>'footer'),
    				CHtml::link(Yii::t('app',$this->labelFooter['title'],$this->labelFooter['params']), !empty($this->redirect) ? $this->redirect : '#')
    			, true);

    		echo CHtml::closeTag('ul');

    	echo CHtml::closeTag('li');

    }

}