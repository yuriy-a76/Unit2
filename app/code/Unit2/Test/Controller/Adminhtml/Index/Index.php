<?php
namespace Unit2\Test\Controller\Adminhtml\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Test action index
     */
    public function execute()
    {
        $this->getResponse()->appendBody("HELLO WORLD ADMIN");
    }
    
    /**
     * Check if admin has permissions to visit related pages
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret==1;
    }
}