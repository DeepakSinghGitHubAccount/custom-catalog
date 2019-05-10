<?php


namespace Btd\DemoCatalog\Api\Data;

interface CustomCatalogSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get Custom_Catalog list.
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface[]
     */
    public function getItems();

    /**
     * Set ProductID list.
     * @param \Btd\DemoCatalog\Api\Data\CustomCatalogInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
