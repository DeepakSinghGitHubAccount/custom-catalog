<?php


namespace Btd\DemoCatalog\Model\ResourceModel;

class CustomCatalog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('btd_democatalog_custom_catalog', 'custom_catalog_id');
    }
}
