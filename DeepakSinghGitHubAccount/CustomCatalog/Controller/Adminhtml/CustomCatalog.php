<?php


namespace Btd\DemoCatalog\Controller\Adminhtml;

abstract class CustomCatalog extends \Magento\Backend\App\Action
{

    const ADMIN_RESOURCE = 'Btd_DemoCatalog::top_level';
    protected $_coreRegistry;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    /**
     * Init page
     *
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     */
    public function initPage($resultPage)
    {
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(__('Btd'), __('Btd'))
            ->addBreadcrumb(__('Custom Product'), __('Custom Product'));
        return $resultPage;
    }
}
