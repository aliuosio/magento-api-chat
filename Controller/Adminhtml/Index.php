<?php declare(strict_types=1);
namespace Osio\APIChat\Controller\Adminhtml;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends Action
{
    public function __construct(
        Context $context,
        private readonly JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->jsonFactory->create();
        $data = ['message' => 'Hello, this is your response!'];

        return $result->setData($data);
    }
}

