<?php

class Navbar extends CWidget{

    public $brand;

    public $icon;

    public $brandUrl = '#';

    public $htmlOptions = array();

    public $items = array();


    public function init(){

        if (!isset($this->brand))
          $this->brand = CHtml::encode(Yii::app()->name);
    }

    public function run()
    {
        $this->navbarContent();
    }

    public function navbarContent(){

        echo CHtml::openTag('header', array('class'=>'main-header'));

            $logo = CHtml::tag('span', array('class'=>'logo-lg'),$this->brand, true);
            $logo .= CHtml::tag('span', array('class'=>'logo-mini'),$this->icon, true);

            echo CHtml::link($logo, $this->brandUrl, array('class'=>'logo'));

            echo CHtml::openTag('nav', array('class'=>'navbar navbar-static-top', 'role'=>'navigation'));

            echo '<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
            </a>';

            if(!empty($this->items)){

              echo CHtml::openTag('div', $this->htmlOptions);

              echo CHtml::openTag('ul', array('class'=>'nav navbar-nav'));

              foreach ($this->items as $item)
              {
                  if (is_string($item))
                      echo $item;
                  else
                  {
                      if (isset($item['class']))
                      {
                        $className = $item['class'];
                        unset($item['class']);

                        $this->controller->widget($className, $item);
                      }else{
                          echo CHtml::openTag('li', isset($item['htmlOptions']) ? $item['htmlOptions'] : array());

                            if(is_array($item['url']))
                              echo CHtml::link($item['label'], implode('',$item['url']), isset($item['linkOptions']) ? $item['linkOptions'] : array());
                            else
                              echo CHtml::link($item['label'], $item['url'], isset($item['linkOptions']) ? $item['linkOptions'] : array());

                          echo CHtml::closeTag('li');
                      }
                  }
              }

              echo CHtml::closeTag('ul');

              echo CHtml::closeTag('div');
          }

        echo CHtml::closeTag('nav');

        echo CHtml::closeTag('header');

    }

}