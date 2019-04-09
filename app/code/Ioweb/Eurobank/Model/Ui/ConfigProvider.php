<?php
    /**
     * Copyright (c) 2019. IOWEB TECHNOLOGIES
     */

    /**
     * Created by IntelliJ IDEA.
     * User: gabtz
     * Date: 4/7/2019
     * Time: 5:22 PM
     */

    namespace Ioweb\Eurobank\Model\Ui;


    use Magento\Checkout\Model\ConfigProviderInterface;
    use Magento\Framework\App\Config\ScopeConfigInterface;
    use Magento\Store\Api\Data\StoreConfigInterface;

    class ConfigProvider implements ConfigProviderInterface
    {

        const CODE = 'ioweb_eurobank';
        protected $config;
        protected $scopeConfig;

        /**
         * ConfigProvider constructor.
         * @param StoreConfigInterface $storeConfig
         */
        public function __construct(ScopeConfigInterface $scopeConfig, \Magento\Payment\Gateway\Config\Config $config)
        {
            $this->scopeConfig = $scopeConfig;
            $this->config = $config;
            $this->config->setMethodCode(self::CODE);
        }

        public function getConfig()
        {
            $config = [
                'payment' => [
                    self::CODE => [
                        'active' => $this->config->getValue('active'),
                        'enable_installments' => $this->config->getValue('enable_installments'),
                        'installments' => $this->config->getValue('installments'),
                    ],
                ],
            ];

            return $config;
        }


    }