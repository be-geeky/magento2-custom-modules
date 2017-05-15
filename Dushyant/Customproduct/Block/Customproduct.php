<?php

namespace Dushyant\Customproduct\Block;

use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Template;

class Customproduct extends Template {

    protected $_productCollectionFactory;

    public function __construct(
    Context $context, CollectionFactory $productCollectionFactory, array $data = []
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getHelloWorldTxt() {
        return 'Custom Products!';
    }

    public function getProductCollection() {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->setPageSize(3); // fetching only 3 products
        return $collection;
    }

}
