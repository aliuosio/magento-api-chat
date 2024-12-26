<?php declare(strict_types=1);

namespace Osio\APIChat\Block;

use Magento\Backend\Block\Template;
use Magento\Framework\Escaper;
use Magento\Framework\View\Element\Template\Context;

class Index extends Template
{
    public function __construct(
        Context $context,
        private readonly Escaper $escaper,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getFormKeyEscaped(): string
    {
        return $this->escaper->escapeHtmlAttr($this->getFormKey());
    }
}
