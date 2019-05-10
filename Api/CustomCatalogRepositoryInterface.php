<?php


namespace Btd\DemoCatalog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface CustomCatalogRepositoryInterface
{


    /**
     * Save Custom_Catalog
     * @param \Btd\DemoCatalog\Api\Data\CustomCatalogInterface $customCatalog
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Btd\DemoCatalog\Api\Data\CustomCatalogInterface $customCatalog
    );

    /**
     * Retrieve Custom_Catalog
     * @param string $customCatalogId
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($customCatalogId);

    /**
     * Retrieve Custom_Catalog matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Custom_Catalog
     * @param \Btd\DemoCatalog\Api\Data\CustomCatalogInterface $customCatalog
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Btd\DemoCatalog\Api\Data\CustomCatalogInterface $customCatalog
    );

    /**
     * Delete Custom_Catalog by ID
     * @param string $customCatalogId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($customCatalogId);
}
