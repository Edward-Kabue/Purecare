<?php
/**
 * The file is Field Config of module. Do not modify the file if you want to upgrade the module in future
 *
 * @author    Globo Software Solution JSC <contact@globosoftware.net>
 * @copyright  2017 Globo., Jsc
 * @license   please read license in file license.txt
 * @link	     http://www.globosoftware.net
 */

class Submitfield
{
    public  function getInfo()
    {
        return array(
            'label' => $this->l('Submit'),
            'icon' => '../modules/gformbuilderpro/views/img/submit.png',
            'desc' =>$this->l('Submit button'),
            'possition' =>1000
        );
    }
    public function getConfig()
    {
        $inputs = array(
            array(
                'type' => 'hidden',
                'name' => 'type',
            ),
            array(
                'type' => 'text',
                'name' => 'label',
                'lang'=>true,
                'label' => $this->l('Label'),
                'required'=>true,
                'class'=>'gvalidate  gvalidate_isRequired',
            ),
            array(
                'type' => 'hidden',
                'name' => 'name',
            ),
            array(
                'type' => 'hidden',
                'name' => 'idatt',
            ),
            array(
                'type' => 'text',
                'name' => 'classatt',
                'label' => $this->l('Html class'),
                'class'=>'gvalidate gvalidate_isClass',
                'desc' => $this->l('Add your custom class so you can custom css for this field'),
            ),
        );
        return $inputs;
    }
    public function l($string, $specific = false)
    {
        return Translate::getModuleTranslation('gformbuilderpro', $string, ($specific) ? $specific : 'gformbuilderpro');
    }
}