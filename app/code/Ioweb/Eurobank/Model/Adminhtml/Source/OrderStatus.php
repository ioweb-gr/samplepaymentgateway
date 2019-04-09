<?php
    /**
     * Copyright (c) 2019. IOWEB TECHNOLOGIES
     */

    /**
     * Created by IntelliJ IDEA.
     * User: gabtz
     * Date: 4/7/2019
     * Time: 1:13 PM
     */

    namespace Ioweb\Eurobank\Model\Adminhtml\Source;


    use Magento\Sales\Model\ResourceModel\Order\Status;

    class OrderStatus implements ArrayInterface
    {

        protected $statusCollectionFactory;
        /**
         * OrderStatus constructor.
         */
        public function __construct(\Magento\Sales\Model\ResourceModel\Order\Status\CollectionFactory $statusCollectionFactory)
        {
            $this->statusCollectionFactory = $statusCollectionFactory;
        }

        /**
         * Possible actions on order place
         *
         * @return array
         */


        public function toOptionArray()
        {

            $options = $this->statusCollectionFactory->create()->toOptionArray();
            return $options;
        }
    }