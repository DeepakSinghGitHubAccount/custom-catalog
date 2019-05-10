<?php


namespace Btd\DemoCatalog\Model\ResourceModel\CustomCatalog;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Btd\DemoCatalog\Model\CustomCatalog',
            'Btd\DemoCatalog\Model\ResourceModel\CustomCatalog'
        );
    }
}
