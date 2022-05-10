<?php

namespace Robin\Banner\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'banner_id';
    public function _construct()
    {
        $this->_init(\Robin\Banner\Model\Banner::class, \Robin\Banner\Model\ResourceModel\Banner::class);
    }
}
