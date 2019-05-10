<?php


namespace Btd\DemoCatalog\Api\Data;

interface CustomCatalogInterface
{

    const PRODUCTID = 'ProductID';
    const COPYWRITEINFO = 'CopyWriteInfo';
    const CUSTOM_CATALOG_ID = 'custom_catalog_id';
    const VPN = 'VPN';
    const SKU = 'SKU';


    /**
     * Get custom_catalog_id
     * @return string|null
     */
    public function getCustomCatalogId();

    /**
     * Set custom_catalog_id
     * @param string $customCatalogId
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setCustomCatalogId($customCatalogId);

    /**
     * Get ProductID
     * @return string|null
     */
    public function getProductID();

    /**
     * Set ProductID
     * @param string $productID
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setProductID($productID);

    /**
     * Get SKU
     * @return string|null
     */
    public function getSKU();

    /**
     * Set SKU
     * @param string $sKU
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setSKU($sKU);

    /**
     * Get VPN
     * @return string|null
     */
    public function getVPN();

    /**
     * Set VPN
     * @param string $vPN
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setVPN($vPN);

    /**
     * Get CopyWriteInfo
     * @return string|null
     */
    public function getCopyWriteInfo();

    /**
     * Set CopyWriteInfo
     * @param string $copyWriteInfo
     * @return \Btd\DemoCatalog\Api\Data\CustomCatalogInterface
     */
    public function setCopyWriteInfo($copyWriteInfo);
}
