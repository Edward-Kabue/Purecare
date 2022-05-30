<?php
/**
* This file will override class CmsControllerCore. Do not modify this file if you want to upgrade the module in future
* 
* @author    Globo Software Solution JSC <contact@globosoftware.net>
* @copyright  2017 Globo., Jsc
* @license   please read license in file license.txt
* @link	     http://www.globosoftware.net
*/
class CmsController extends CmsControllerCore
{
    /*
    * module: gformbuilderpro
    * date: 2022-05-24 09:52:32
    * version: 1.3.3
    */
    public function initContent()
    {
        if(Module::isInstalled('gformbuilderpro') && Module::isEnabled('gformbuilderpro'))
        {
            if(Tools::getValue('id_cms') > 0){
                $cmshtml = $this->cms->content;
                $formObj = Module::getInstanceByName('gformbuilderpro');
                $this->cms->content = $formObj->getFormByShortCode($cmshtml);
            }
        }
        parent::initContent();
    }
}