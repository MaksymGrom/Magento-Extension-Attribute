<?php

namespace Edu\ExtensionAttribute\Model\ResourceModel;

class EduNavision extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('edu_navision_product', 'product_id');
    }
}
