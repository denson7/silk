<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2016/7/22
 * Time: 14:50
 */
class Silk_Xreview_Model_Mysql4_Image extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('xreview/image','img_id');
    }
}