<?php declare(strict_types=1);

namespace Osio\APIChat\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Psr\Log\LoggerInterface;

class Index extends Action
{
    private const DEFAULT_RESPONSE_DATA = [
        'product' => 'Product Data',
        'profile' => 'Profile Data',
    ];

    public function __construct(
        Context                      $context,
        private readonly JsonFactory $jsonFactory,
        private readonly LoggerInterface $logger
    )
    {
        parent::__construct($context);
    }

    protected function _isAllowed(): bool
    {
        // return $this->_authorization->isAllowed('Osio_APIChat::main');
        return true;
    }

    public function execute(): Json
    {
        $result = $this->jsonFactory->create();
        $this->logger->info('APIChat Index');
        $result->setData($this->getResponseData());
        return $result;
    }

    private function getResponseData(): array
    {
        return self::DEFAULT_RESPONSE_DATA;
    }
}
