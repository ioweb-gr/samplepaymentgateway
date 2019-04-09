<?php
/**
 * Copyright (c) 2019. IOWEB TECHNOLOGIES
 */

    /**
     * Created by IntelliJ IDEA.
     * User: gabtz
     * Date: 4/7/2019
     * Time: 12:28 PM
     */

    namespace Ioweb\Eurobank\Model;


    use Magento\Payment\Model\Method\Adapter;

    class Eurobank extends Adapter
    {
        const CODE = 'ioweb_eurobank';

    }