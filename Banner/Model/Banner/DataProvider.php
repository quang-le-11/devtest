<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Robin\Banner\Model\Banner;

use Robin\Banner\Model\ResourceModel\Banner\CollectionFactory;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var
     */
    protected $_loadedData;

    protected $collection;


    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collection,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collection->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * @return array
     */
    public function getData()
    {
        if (isset($this->_loadedData)) {
            return $this->_loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $banner) {
            $this->_loadedData[$banner->getId()] = $banner->getData();
        }
        return $this->_loadedData;
    }
}
