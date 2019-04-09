/*
 * Copyright (c) 2019. IOWEB TECHNOLOGIES
 */

/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'ioweb_eurobank',
                component: 'Ioweb_Eurobank/js/view/payment/method-renderer/ioweb_eurobank'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
