<?php

return array(
    /*
     * Set tables to be ignored while fetch all
     */
    'fetchIgnore' => [
        'CreditCard',  // Not used at the moment
        'RecurringOrderWithContact', 'ContactGroupAssign', // no primary id
        'Ticket' // not used at all
    ],

    /*
     * Set tables to be ignored while sync all
     */
    'syncIgnore' => [
        'Invoice','InvoiceItem','InvoicePayment','Job','OrderItem',  // Dedicated cron
        'Payment','Affiliate','OrderItem','PayPlan','PayPlanItem',  // Dedicated cron
        'Referral','Campaignee','FileBox', // Dedicated Cron
        'Contact','ContactAction','StageMove','JobRecurringInstance', // Dedicated cron
        'CreditCard',  // Not used at the moment
        'RecurringOrderWithContact', 'ContactGroupAssign', // no primary id
        'Ticket' // Not used at all
    ],

    /*
     * Set tables under order group
     */
    'syncOrderGroup' => [
        'InvoiceItem','InvoicePayment','OrderItem','Payment','Affiliate','OrderItem','PayPlan','PayPlanItem'
    ],

    /*
     * Set main tables
     */
    'syncMain' => [
        'Job','Invoice'
    ],

    /*
     * Set tables to be ignored while sync missing record
     */
    'syncMissingIgnore' => [
        'CreditCard',  // Not used at the moment
        'RecurringOrderWithContact', 'ContactGroupAssign', // no primary id
        'Ticket' // Not used at all
    ],

    /*
     * Set query intervael in minutes. The value will be added by 2
     */
    'freqContact' => 8,
    'freqStage' => 58,

    /*
     * Set cron job time
     */
    'syncTime' => '30 * * * *', // once an hour at :30
    'syncMissingTime' => '0 0 * * *', // once a day;
    'syncContactTime' => '*/8 * * * *', //every 8 minute
    'syncStageTime' => '*/58 * * * *', //every 8 minute
    'syncOrderGroupTime' => '*/10 * * * *', //every 10 minute
    'syncMainTime' => '*/5 * * * *', //every 5 minute
    'syncOneTime' => '*/30 * * * *', //every 30 minute

    /*
     * Set query limit for syncing
     */
    'syncContactLimit' => 100,
    'syncStageLimit' => 100,
    'syncOrderGroupLimit' => 250,
    'syncMainLimit' => 50,
    'syncOneLimit' => 1000
);