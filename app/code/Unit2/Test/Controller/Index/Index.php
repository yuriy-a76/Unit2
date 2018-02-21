<?php
namespace Unit2\Test\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->getResponse()->appendBody("HELLO WORLD");
    }
}