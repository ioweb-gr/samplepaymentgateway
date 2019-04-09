/*
 * Copyright (c) 2019. IOWEB TECHNOLOGIES
 */

/*browser:true*/
/*global define*/
define(
    [
        'Magento_Checkout/js/view/payment/default'
    ],
    function (Component) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Ioweb_Eurobank/payment/form'
            },

            initObservable: function () {

                this._super()
                    .observe([
                        // 'transactionResult'
                    ]);
                return this;
            },

            getCode: function() {
                return 'ioweb_eurobank';
            },

            getData: function() {
                return {
                    'method': this.item.method,
                    'additional_data': {
                        // 'transaction_result': this.transactionResult()
                    }
                };
            },
            getTitle: function(){
                return 'ioweb_eurobank'
            },
            getTransactionResults: function() {
                return _.map(window.checkoutConfig.payment.ioweb_eurobank.transactionResults, function(value, key) {
                    return {
                        'value': key,
                        // 'transaction_result': value
                    }
                });
            }
        });
    }
);