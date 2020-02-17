<?php

/**
 * @api            {post} billing All Plans
 * @apiParamExample {json} Request-Example:
 *   {
 *    "query": "{subscriptionPlans(app_token:":app_token", product_key:":product_key", country_code:"XXX") { fields list separated by
 *    white space} }",
 *    "token": "XXX"
 *   }
 * @apiName        Plan Listing
 * @apiDescription It returns all subscription plans of your account
 * @apiGroup       Billing: Subscription
 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} country_code Country code like IN, US, EU etc
 * @apiSuccess {String} id Subscription plan id
 * @apiSuccess {String} plan_name Subscription plan name
 * @apiSuccess {String} plan_description Subscription plan description
 * @apiSuccess {Integer} plan_status Subscription plan status like active or inactive
 * @apiSuccess {Pricing[]} price Subscription plan price object which includes different attributes like country, currency and their
 *             prices
 * @apiSuccess {String} price.id Subscription price id
 * @apiSuccess {String} price.subscription_plan_id Subscription plan id
 * @apiSuccess {String} price.country_code Country code like IN, US, EU etc
 * @apiSuccess {String} price.country_name Country name like India, United States, Europe Zone etc
 * @apiSuccess {String} price.currency_code Currency code like INR, USD, EUR etc
 * @apiSuccess {String} price.currency_symbol Currency symbol like ₹, $, € etc
 * @apiSuccess {Integer} price.price_status Status(Active/Inactive) of the subscription plan with respect to country and currency code
 * @apiSuccess {Float} price.plan_price Price of the subscription plan with respect to country and currency code
 * @apiSuccess {String} price.plan_interval_unit Subscription plan interval unit like Day, Month and Year
 * @apiSuccess {Integer} price.plan_interval Subscription plan interval (numeric digits) like 1, 12 etc
 * @apiSuccess {String} price.plan_free_trial_unit Free trial unit like Day, Month
 * @apiSuccess {Integer} price.plan_free_trial_interval Free trial interval (numeric digits) like 7, 14 etc
 */

/**
 * @api            {post} billing  Plan Details
 * @apiParamExample {json} Request-Example:
 *   {
 *    "query": "{subscriptionPlans(id:"XXX", app_token:":app_token", product_key:":product_key", country_code:"XXX") { fields list
 *    separated by white space} }",
 *    "token": "XXX"
 *   }
 * @apiName        A Plan Details
 * @apiDescription It returns subscription plan details of your account
 * @apiGroup       Billing: Subscription
 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} country_code Country code like IN, US, EU etc
 * @apiSuccess {String} id Subscription plan id
 * @apiSuccess {String} plan_name Subscription plan name
 * @apiSuccess {String} plan_description Subscription plan description
 * @apiSuccess {Integer} plan_status Subscription plan status like active or inactive
 * @apiSuccess {Pricing[]} price Subscription plan price object which includes different attributes like country, currency and their
 *             prices
 * @apiSuccess {String} price.id Subscription price id
 * @apiSuccess {String} price.subscription_plan_id Subscription plan id
 * @apiSuccess {String} price.country_code Country code like IN, US, EU etc
 * @apiSuccess {String} price.country_name Country name like India, United States, Europe Zone etc
 * @apiSuccess {String} price.currency_code Currency code like INR, USD, EUR etc
 * @apiSuccess {String} price.currency_symbol Currency symbol like ₹, $, € etc
 * @apiSuccess {Integer} price.price_status Status(Active/Inactive) of the subscription plan with respect to country and currency code
 * @apiSuccess {Float} price.plan_price Price of the subscription plan with respect to country and currency code
 * @apiSuccess {String} price.plan_interval_unit Subscription plan interval unit like Day, Month and Year
 * @apiSuccess {Integer} price.plan_interval Subscription plan interval (numeric digits) like 1, 12 etc
 * @apiSuccess {String} price.plan_free_trial_unit Free trial unit like Day, Month
 * @apiSuccess {Integer} price.plan_free_trial_interval Free trial interval (numeric digits) like 7, 14 etc
 */

/**

 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} plan_id Subscription plan id
 * @apiParam {String} price_id Subscription price id
 * @apiParam {String} user_id A valid user id for store/account
 * @apiParam {String} [user_name] A user name for store/account
 * @apiParam {String} [user_email] A valid email id for store/account
 * @apiParam {String} [account_name] Account/Store name

 * @apiExample        Example usage:
 * curl -X POST <Domain name>/transactions/generate-sst \

 * -F auth_token = <auth_token> \
 * -F product_key = <product_key> \
 * -F plan_id = <plan_id> \
 * -F price_id = <price_id> \
 * -F user_id = <user_id> \
 * -F user_name = <user_name> \
 * -F user_email = <user_email> \
 * -F account_name = <account_name>
 */

/**
 * @api            {post} billing  Payment history
 * @apiParamExample {json} Request-Example:
 *   {
 *    "query": "{paymentHistory(app_token:":app_token", product_key:":product_key",user_id:"XXX") { fields list separated by white
 *    space} }",
 *    "token": "XXX"
 *   }
 * @apiName        Payment history
 * @apiDescription Get the transaction history details
 * @apiGroup       Billing: Payment history
 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} user_id A valid user id for store/account
 * @apiSuccess {String} id Transaction id
 * @apiSuccess {String} order_id Order id of a product/plan
 * @apiSuccess {String} order_type Order/Transaction description
 * @apiSuccess {String} account_name Account/Store name
 * @apiSuccess {String} user_name Name of a user who purchase the product
 * @apiSuccess {String} user_email Email of a user who purchase the product
 * @apiSuccess {Float}    billing_amount Billing amount of a product
 * @apiSuccess {String} item_name Name of the product
 * @apiSuccess {String} item_description Description of product
 * @apiSuccess {String} gateway_code The payment pass through the Gateway which returns a code for the gateway
 * @apiSuccess {String} gateway_transaction_id Transaction id which you find from Gateway end
 * @apiSuccess {String} payment_method Payment methods like credit card payment, Pay with PayPal, voucher etc
 * @apiSuccess {String} card_last_four_digits Card last four digits through which your payment has processed
 * @apiSuccess {String} country_name Country name like India, United States, Europe Zone etc
 * @apiSuccess {String} country_code Currency code like INR, USD, EUR etc
 * @apiSuccess {String} currency_symbol Currency symbol like ₹, $, € etc
 * @apiSuccess {String} currency_code Currency code like INR, USD, EUR etc
 * @apiSuccess {Float} coupon_discount_in_amount Converted discount amount with respect to the primary currency when payment passed
 *             through coupon
 * @apiSuccess {Float} coupon_discount Discount value for a coupon
 * @apiSuccess {Integer} coupon_type If the discount amount is in percentage(%) or flat price
 * @apiSuccess {String} additional_information Keeps an additional information with JSON/String format if required
 * @apiSuccess {String} transaction_date Transaction date when your payment has processed
 * @apiSuccess {String} transaction_status Transaction status like success/cancel/onhold etc
 * @apiSuccess {Integer} device_type The order/payment has processed through which device like web browser, Android app, iOS app etc
 */

/**
 * @api            {post} billing  My Plans
 * @apiParamExample {json} Request-Example:
 *   {
 *    "query": "{myPlans(app_token:":app_token", product_key:":product_key",user_id:"XXX") { fields list separated by white space} }",
 *    "token": "XXX"
 *   }
 * @apiName        My Plans
 * @apiDescription Get the subscription with discount detail before processing payment
 * @apiGroup       Billing
 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} user_id A valid user id for store/account
 * @apiSuccess {String} subscriptionId User subscription id when purchase a subscription plan
 * @apiSuccess {String} subscription_plan_id Subscription plan id which is taken by a user
 * @apiSuccess {String} plan_name Subscription plan name
 * @apiSuccess {String} plan_description Subscription plan description
 * @apiSuccess {Integer} plan_interval Subscription plan interval (numeric digits) like 1, 12 etc
 * @apiSuccess {String} plan_interval_unit Subscription plan interval unit like Day, Month and Year
 * @apiSuccess {Integer} plan_free_trial_interval Free trial interval (numeric digits) like 7, 14 etc
 * @apiSuccess {String} plan_free_trial_unit Free trial unit like Day, Month
 * @apiSuccess {Integer} plan_status Subscription plan status like active or inactive
 * @apiSuccess {String} country_code Currency code like INR, USD, EUR etc
 * @apiSuccess {String} country_name Country name like India, United States, Europe Zone etc
 * @apiSuccess {String} currency_code Currency code like INR, USD, EUR etc
 * @apiSuccess {String} currency_symbol Currency symbol like ₹, $, € etc
 * @apiSuccess {Float}  plan_price Price of the subscription plan with respect to country and currency code
 * @apiSuccess {String} subscription_start_date The date when a user starts the subscription plan
 * @apiSuccess {String} last_billing_date The last billing date for the subscription plan taken by a user
 * @apiSuccess {String} next_billing_date The next billing date for the subscription plan taken by a user
 */

/**
 * @api            {post} cancel-user Cancel User Subscription
 * @apiParamExample {json} Request-Example:
 *   {
 *        "app_token":":app_token",
 *      "product_key":":product_key",
 *    "token": "XXX"
 *   }
 * @apiName        Cancel User Subscription
 * @apiDescription This is used for cancelling the user subscription of an account/store
 * @apiGroup       Billing: Purchase Subscription
 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} user_id A valid user id of an account/store
 * @apiParam {String} account_subscription_id User subscription id which the plan is subscribed
 * @apiParam {String} cancel_reason_id Cancellation reason id which user selects
 * @apiParam {String} additional_note You can provide an additional cancellation comment, if the cancellation reason is not listed for
 *           you
 */

/**
 * @api            {post} billing  Content authorization from Billing end
 * @apiParamExample {json} Request-Example:
 *   {
 *    "query": "{isContentAuthorized(app_token:":app_token", product_key:":product_key",user_id:"XXX") { fields list separated by
 *    white space} }",
 *    "token": "XXX"
 *   }
 * @apiName        Content authorization from Billing end
 * @apiDescription 1.Check if the content is authorized from billing end 2.This is an inter service which will be executed by content
 *                 authorization API which resides on content module
 * @apiGroup       Billing
 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} user_id A valid user id for store/account
 * @apiSuccess {String} code Status code
 * @apiSuccess {Boolean} authorized Authorization status to a content
 * @apiSuccess {String} message Success/Error text message
 * @apiSuccess {String} status Status of the response like success/error
 */

/**
 * @api            {post} billing  Subscription enabled or not for an account
 * @apiParamExample {json} Request-Example:
 *   {
 *    "query": "{isSubscriptionEnabled(app_token:":app_token", product_key:":product_key",country_code:"XXX",user_id:"XXX") { fields
 *    list separated by white space} }",
 *    "token": "XXX"
 *   }
 * @apiName        Subscription enabled or not for an account
 * @apiDescription 1.Check if the subscription monetization enabled for an account or not. 2.Also check if a user has taken the
 *                 subscription plan or not by passing user_id as an argument
 * @apiGroup       Billing
 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} country_code A valid country code which you receive IPtoLocation service
 * @apiParam {String} user_id A valid user id for store/account
 * @apiSuccess {String} code Status code
 * @apiSuccess {Boolean} is_subscription_enabled Subscription is enabled or not
 * @apiSuccess {Boolean} is_user_subscribed User has purchased the subscription or not
 * @apiSuccess {String} message Success/Error text message
 * @apiSuccess {String} status Status of the response like success/error
 */

/**
 * @api               {post} transactions/generate-sst  Generate SST
 * @apiParamExample {json} Request-Example:
 *   { app_token:":app_token", product_key:":product_key","token": "XXX".....}
 * @apiName           Generate SST
 * @apiDescription    Get secure session token(SST) before processing transaction
 * @apiGroup          Billing: SST

 * @apiParam {String} app_token A valid application token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} plan_id Subscription plan id
 * @apiParam {String} price_id Subscription price id
 * @apiParam {String} user_id A valid user id for store/account
 * @apiParam {String} [user_name] A user name for store/account
 * @apiParam {String} [user_email] A valid email id for store/account
 * @apiParam {String} [account_name] Account/Store name
 * @apiExample        Example usage:

 * curl -X POST <Domain name>/transactions/generate-sst \
 * -F auth_token = <auth_token> \
 * -F product_key = <product_key> \
 * -F plan_id = <plan_id> \
 * -F price_id = <price_id> \
 * -F user_id = <user_id> \
 * -F user_name = <user_name> \
 * -F user_email = <user_email> \
 * -F account_name = <account_name>

 * @apiSuccess {Integer} code Status code
 * @apiSuccess {String} status Status of the response like SUCCESS/FAILURE
 * @apiSuccess {String} sst_token A string value
 * @apiError (Error Code)690 Invalid parameters are provided
 * @apiError (Error Code)691 SST log is not saved
 * @apiError (Error Code)695 Request parameters like app_token or product_key or account_type or plan_id or price_id is missing
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 * {
 * {
 * "code": 200,
 * "status": "SUCCESS",
 * "sst_token": "XXX",
 * }
 * }
 */

/**
 * @api               {post} transactions/success  Transaction Success
 * @apiParamExample {json} Request-Example:
 *   {"app_token":":app_token","product_key":":product_key","sst_token":"XXX","token": "XXX"...}
 * @apiName           Transaction Success
 * @apiDescription    Check if the session token valid then activate the user and update the log status to as success
 * @apiGroup          Billing: SST
 * @apiParam {String} app_token A valid app token
 * @apiParam {String} product_key A valid product key
 * @apiParam {String} sst_token Secure Session Token
 * @apiParam {String} [account_name] Account/Store name
 * @apiParam {String} user_id A valid user id of a store/account
 * @apiParam {String} [user_name] User Name
 * @apiParam {String} [user_email] A valid email id of an account/store
 * @apiParam {String} plan_id Subscription plan id
 * @apiParam {String} price_id Subscription price id
 * @apiParam {String} gateway_code The gateway code which you receive from card authentication
 * @apiParam {String} payment_method The payment method which a user choose from the payment page like card, voucher, net banking
 *           etc...
 * @apiParam {String} transaction_id The transaction id which is generated from gateway end
 * @apiParam {String} masked_card
 * @apiParam {String} brand The card brand which you receive from gateway end at the time card authentication
 * @apiExample        Example usage:
 * curl -X POST <Domain name>/transactions/success \
 * -F auth_token = <auth_token> \
 * -F product_key = <product_key> \
 * -F sst_token = <sst_token> \
 * -F plan_id = <plan_id> \
 * -F price_id = <price_id> \
 * -F user_id = <user_id> \
 * -F user_name = <user_name> \
 * -F user_email = <user_email> \
 * -F account_name = <account_name>
 * @apiSuccess {Integer} code Status code
 * @apiSuccess {String} status Status of the response like SUCCESS/FAILURE
 * @apiError (Error Code)690 Invalid parameters are provided
 * @apiError (Error Code)692 No SST log found
 * @apiError (Error Code)696 Request parameters like sst_token is missing
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 * {
 * {
 * "code": 200,
 * "status": "SUCCESS"
 * }
 * }
 */

/**
 * @api               {put} transactions/cancel Cancel SST
 * @apiParamExample {json} Request-Example:
 *   {"sst_token":"XXX","token": "XXX"}
 * @apiName           Cancel SST
 * @apiDescription    It updates the status of sst_token as cancel when cancel a transaction
 * @apiGroup          Billing: SST
 * @apiParam {String} sst_token The SST Token which you receive from generate SST
 * @apiParam {String} status The desired status you want to update. Here is "cancel"
 * @apiExample        Example usage:
 * curl -X PUT <Domain name>/transactions/cancel \
 * -F sst_token = <sst_token> \
 * -F status = "cancel"
 * @apiSuccess {Integer} code Status code
 * @apiSuccess {String} status Status of the response like SUCCESS/FAILURE
 * @apiError (Error Code)690 Invalid parameters are provided
 * @apiError (Error Code)692 No SST log found
 * @apiError (Error Code)696 Request parameters like sst_token or status is missing
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 * {
 * {
 * "code": 200,
 * "status": "SUCCESS"
 * }
 * }
 */

/**
 * @api               {put} transactions/expired Expire SST
 * @apiParamExample {json} Request-Example:
 *   {"sst_token":"XXX","token": "XXX"}
 * @apiName           Expire SST
 * @apiDescription    It updates the status of sst_token as expired when expire a transaction
 * @apiGroup          Billing: SST
 * @apiParam {String} sst_token The SST Token which you receive from generate SST
 * @apiParam {String} status The desired status you want to update. Here is "expire"
 * @apiExample        Example usage:
 * curl -X PUT <Domain name>/transactions/expired \
 * -F sst_token = <sst_token> \
 * -F status = "cancel"
 * @apiSuccess {Integer} code Status code
 * @apiSuccess {String} status Status of the response like SUCCESS/FAILURE
 * @apiError (Error Code)690 Invalid parameters are provided
 * @apiError (Error Code)692 No SST log found
 * @apiError (Error Code)696 Request parameters like sst_token is missing
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 * {
 * {
 * "code": 200,
 * "status": "SUCCESS"
 * }
 * }
 */

?>