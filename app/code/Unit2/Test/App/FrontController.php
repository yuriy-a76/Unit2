<?php
namespace Unit2\Test\App;

class FrontController extends \Magento\Framework\App\FrontController
{     
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
 
     /**
     * @param \Magento\Framework\App\RouterList $routerList
     * @param \Magento\Framework\App\Response\Http $response
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\RouterList $routerList,
        \Magento\Framework\App\Response\Http $response,
        \Psr\Log\LoggerInterface $logger)
    {
        $this->_routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
    }
    
    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ResponseInterface | \Magento\Framework\Controller\ResultInterface
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {        
        foreach ($this->_routerList as $router)
        {
            $this->logger->addDebug(get_class($router));
        }
        return parent::dispatch($request);
    }
}