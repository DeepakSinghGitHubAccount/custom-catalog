<?php


namespace Btd\DemoCatalog\Controller\Adminhtml\CustomCatalog;

class Delete extends \Btd\DemoCatalog\Controller\Adminhtml\CustomCatalog
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('custom_catalog_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create('Btd\DemoCatalog\Model\CustomCatalog');
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Custom Catalog.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['custom_catalog_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Custom Catalog to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}
