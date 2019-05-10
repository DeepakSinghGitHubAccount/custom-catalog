<?php


namespace Btd\DemoCatalog\Model;

use Btd\DemoCatalog\Api\Data\CustomCatalogInterface;

class CustomCatalog extends \Magento\Framework\Model\AbstractModel implements CustomCatalogInterface
{

    protected $_eventPrefix = 'btd_democatalog_custom_catalog';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Btd\DemoCatalog\Model\ResourceModel\CustomCatalog');
    }

    /**
     * Get custom_catalog_id
     * @return string
     */
    public function getCustomCatalogId()
    {
        return $this->getData(self::CUSTOM_CATALOG_ID);
    }

    /**
     * Set custom_catalog_id
     * @param string $customCatalogId
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setCustomCatalogId($customCatalogId)
    {
        return $this->setData(self::CUSTOM_CATALOG_ID, $customCatalogId);
    }

    /**
     * Get ProductID
     * @return string
     */
    public function getProductID()
    {
        return $this->getData(self::PRODUCTID);
    }

    /**
     * Set ProductID
     * @param string $productID
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setProductID($productID)
    {
        return $this->setData(self::PRODUCTID, $productID);
    }

    /**
     * Get SKU
     * @return string
     */
    public function getSKU()
    {
        return $this->getData(self::SKU);
    }

    /**
     * Set SKU
     * @param string $sKU
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setSKU($sKU)
    {
        return $this->setData(self::SKU, $sKU);
    }

    /**
     * Get VPN
     * @return string
     */
    public function getVPN()
    {
        return $this->getData(self::VPN);
    }

    /**
     * Set VPN
     * @param string $vPN
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setVPN($vPN)
    {
        return $this->setData(self::VPN, $vPN);
    }

    /**
     * Get CopyWriteInfo
     * @return string
     */
    public function getCopyWriteInfo()
    {
        return $this->getData(self::COPYWRITEINFO);
    }

    /**
     * Set CopyWriteInfo
     * @param string $copyWriteInfo
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setCopyWriteInfo($copyWriteInfo)
    {
        return $this->setData(self::COPYWRITEINFO, $copyWriteInfo);
    }
}
