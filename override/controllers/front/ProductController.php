<?php
/**
* This file will override class ProductController. Do not modify this file if you want to upgrade the module in future
* 
* @author    Globo Software Solution JSC <contact@globosoftware.net>
* @copyright  2017 Globo., Jsc
* @license   please read license in file license.txt
* @link	     http://www.globosoftware.net
*/
class ProductController extends ProductControllerCore
{
    /*
    * module: gformbuilderpro
    * date: 2022-05-24 09:52:35
    * version: 1.3.3
    */
    public function initContent()
    {
        if(Module::isInstalled('gformbuilderpro') && Module::isEnabled('gformbuilderpro'))
        {
        $formObj = Module::getInstanceByName('gformbuilderpro');
        $this->product->description = $formObj->getFormByShortCode($this->product->description);
        $this->product->description_short = $formObj->getFormByShortCode($this->product->description_short);
        }
        parent::initContent();
    }
}