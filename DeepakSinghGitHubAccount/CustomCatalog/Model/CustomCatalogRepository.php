<?php


namespace Btd\DemoCatalog\Model;

use Magento\Framework\Reflection\DataObjectProcessor;
use Btd\DemoCatalog\Model\ResourceModel\CustomCatalog\CollectionFactory as CustomCatalogCollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Btd\DemoCatalog\Api\Data\CustomCatalogSearchResultsInterfaceFactory;
use Btd\DemoCatalog\Api\Data\CustomCatalogInterfaceFactory;
use Btd\DemoCatalog\Model\ResourceModel\CustomCatalog as ResourceCustomCatalog;
use Btd\DemoCatalog\Api\CustomCatalogRepositoryInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Api\DataObjectHelper;

class CustomCatalogRepository implements CustomCatalogRepositoryInterface
{

    protected $dataObjectHelper;

    protected $dataObjectProcessor;

    protected $customCatalogCollectionFactory;

    protected $resource;

    protected $customCatalogFactory;

    protected $searchResultsFactory;

    protected $dataCustomCatalogFactory;

    private $storeManager;


    /**
     * @param ResourceCustomCatalog $resource
     * @param CustomCatalogFactory $customCatalogFactory
     * @param CustomCatalogInterfaceFactory $dataCustomCatalogFactory
     * @param CustomCatalogCollectionFactory $customCatalogCollectionFactory
     * @param CustomCatalogSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceCustomCatalog $resource,
        CustomCatalogFactory $customCatalogFactory,
        CustomCatalogInterfaceFactory $dataCustomCatalogFactory,
        CustomCatalogCollectionFactory $customCatalogCollectionFactory,
        CustomCatalogSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->customCatalogFactory = $customCatalogFactory;
        $this->customCatalogCollectionFactory = $customCatalogCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataCustomCatalogFactory = $dataCustomCatalogFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \Btd\DemoCatalog\Api\Data\CustomCatalogInterface $customCatalog
    ) {
        /* if (empty($customCatalog->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $customCatalog->setStoreId($storeId);
        } */
        try {
            $this->resource->save($customCatalog);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the customCatalog: %1',
                $exception->getMessage()
            ));
        }
        return $customCatalog;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($customCatalogId)
    {
        $customCatalog = $this->customCatalogFactory->create();
        $this->resource->load($customCatalog, $customCatalogId);
        if (!$customCatalog->getId()) {
            throw new NoSuchEntityException(__('Custom_Catalog with id "%1" does not exist.', $customCatalogId));
        }
        return $customCatalog;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->customCatalogCollectionFactory->create();
        foreach ($criteria->getFilterGroups() as $filterGroup) {
            $fields = [];
            $conditions = [];
            foreach ($filterGroup->getFilters() as $filter) {
                if ($filter->getField() === 'store_id') {
                    $collection->addStoreFilter($filter->getValue(), false);
                    continue;
                }
                $fields[] = $filter->getField();
                $condition = $filter->getConditionType() ?: 'eq';
                $conditions[] = [$condition => $filter->getValue()];
            }
            $collection->addFieldToFilter($fields, $conditions);
        }
        
        $sortOrders = $criteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage($criteria->getCurrentPage());
        $collection->setPageSize($criteria->getPageSize());
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setTotalCount($collection->getSize());
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \Btd\DemoCatalog\Api\Data\CustomCatalogInterface $customCatalog
    ) {
        try {
            $this->resource->delete($customCatalog);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Custom_Catalog: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($customCatalogId)
    {
        return $this->delete($this->getById($customCatalogId));
    }
}
