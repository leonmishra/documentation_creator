<?


/**
*
* @api        {POST} test/request-details Api Testing 
* @apiParamExample {json} Request-Example:        
* {}
*
* @apiName        Api Testing
* @apiDescription        Test the Api Connection & availability
* @apiGroup        Billing-Testing
*
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/test/request-details
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
*     "code": 200,
*     "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {POST} subscription-plans/add Add Subscription Plan 
* @apiParamExample {json} Request-Example:        
* {
* "plan_code": "XXX",
* "price": [
* {
* "price_status": 1,
* "country_code": "XX",
* "subscription_plan_price": "XX",
* "plan_interval": 1,
* "plan_interval_unit": "XX",
* "plan_free_trial_interval": 0,
* "planFreeTrialUnit": "XXX"
* }
* ],
* "plan_name": "XXX",
* "plan_description": "XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Add Subscription Plan
* @apiDescription        Add a new subscription plan
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} plan_code A Unique Plan Code
* @apiParam        {Array} price Subscription plan price object which includes different attributes like country, currency and their prices
* @apiParam        {String} plan_name Subscription plan name
* @apiParam        {String} plan_description Subscription plan description
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/add
* -F plan_code = <plan_code> 
* -F price = <price> 
* -F plan_name = <plan_name> 
* -F plan_description = <plan_description> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {PUT} subscription-plans/update Update Subscription Plans 
* @apiParamExample {json} Request-Example:        
* {
* "id": "XXX",
* "plan_code": "XXX",
* "price": [
* {
* "id": "XXX",
* "price_status": 1,
* "country_code": "XXX",
* "subscription_plan_price": "XXX",
* "plan_interval": 0,
* "plan_interval_unit": "XXX",
* "plan_free_trial_interval": 0,
* "planFreeTrialUnit": "XXX"
* }
* ],
* "plan_name": "XXX",
* "plan_description": "XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Update Subscription Plans
* @apiDescription        Updates subscription plan
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} plan_code A Unique Plan Code
* @apiParam        {Array} price Subscription plan price object which includes different attributes like country, currency and their prices
* @apiParam        {String} plan_name Subscription plan name
* @apiParam        {String} plan_description Subscription plan description
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/update
* -F id = <id> 
* -F plan_code = <plan_code> 
* -F price = <price> 
* -F plan_name = <plan_name> 
* -F plan_description = <plan_description> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {PUT} subscription-plans/enable Enable Subscription Plan 
* @apiParamExample {json} Request-Example:        
* {
* "id":"XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Enable Subscription Plan
* @apiDescription        Allow to enable the existing subscription plan which is already in disabled state
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/enable
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {PUT} subscription-plans/disable Disable Subscription Plan 
* @apiParamExample {json} Request-Example:        
* {
* "id": "XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Disable Subscription Plan
* @apiDescription        Allow to disable the existing subscription plan which is already in enabled state
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/disable
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* { "code": 200, "status": "SUCCESS" }
*
**/


/**
*
* apiPrivate
* @api        {PUT} subscription-plans/make-default Make Default Subscription Plan 
* @apiParamExample {json} Request-Example:        
* {
* "id":"XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Make Default Subscription Plan
* @apiDescription        Allow to make default subscription plan which is useful for showing the plan list based on default one on customer’s store end
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/make-default
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* { "code": 200, "status": "SUCCESS" }
*
**/


/**
*
* @api        {POST} subscriptions/cancel Cancel User 
* @apiParamExample {json} Request-Example:        
* {}
*
* @apiName        Cancel User
* @apiDescription        This is used for cancelling the user subscription of an account/store
* @apiGroup        Billing-Subscription
*
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/cancel
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} subscriptions/free-trial/register Take a Free Trial 
* @apiParamExample {json} Request-Example:        
* {}
*
* @apiName        Take a Free Trial
* @apiDescription        Allows to take a free trail of product
* @apiGroup        Billing-Subscription
*
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/free-trial/register
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} subscriptionPlans Subscription Plans List 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{ subscriptionPlans(app_token:\"XXX\",product_key:\"XXX\",country_code:\"XX\",account_type:XX,is_free_plan:XX,user_type:XX,off_set:XX,limit:XX,id:\"XXX\") { fields list separated by white space }}"
* }
*
* @apiName        Subscription Plans List
* @apiDescription        Fetch all active/inactive subscription plans which is used for CMS.
* @apiGroup        Billing-Subscription
*
*
*
* @apiSuccessExample Success-Response:        
* { 
* "id": "XXX", 
* "app_token": "XX", 
* "account_type": 0, 
* "plan_name": "XX", 
* "plan_code": "XX", 
* "plan_description": "XX", 
* "plan_status": 1, 
* "is_default": "XX", 
* "is_free_plan": "XX", 
* "price": [{ 
* "id": "XX", 
* "subscription_plan_id": "XX", 
* "country_code": "XX", 
* "currency_code": "XX", 
* "subscription_plan_price": "XX", 
* "price_status": "XX", 
* "plan_interval_unit": "XX", 
* "plan_interval": "XX", 
* "plan_free_trial_unit": "XX", 
* "plan_free_trial_interval": "XX", 
* "discountType": "XX", 
* "discount_price": "XX" 
* },..] 
* }
*
**/


/**
*
* @api        {POST} isSubscriptionEnabled Is Subscription Enabled 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{isSubscriptionEnabled(app_token: \"XXX\",product_key: \"XXX\", country_code: \"XXX\", muvi_token:\"XXX\", user_id: \"XXX\", account_type:XX) { fields list separated by white space} } "
* }
*
* @apiName        Is Subscription Enabled
* @apiDescription        Check if the subscription monetization enabled for an account or not.
* @apiGroup        Billing-Subscription
*
*
* @apiSuccess        {String} code Status code
* @apiSuccess        {Integer} is_subscription_enabled Subscription is enabled or not
* @apiSuccess        {Integer} is_user_subscribed User has purchased the subscription or not
* @apiSuccess        {String} message Success/Error text message
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": "200",
* "is_subscription_enabled": true,
* "is_user_subscribed": true,
* "message": "XXXX",
* "status": "SUCCESS"
* 
* }
*
**/


/**
*
* @api        {POST} myPlans My Plans 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{myPlans(app_token: \"XXX\", product_key: \"XXX\", user_id: \"XXX\") { fields list separated by white space} } "
* }
*
* @apiName        My Plans
* @apiDescription        Get the subscription with discount detail before processing payment
* @apiGroup        Billing-Subscription
*
*
* @apiSuccess        {String} subscription_id Subscription Id
* @apiSuccess        {String} subscription_plan_id Subscription plan id
* @apiSuccess        {String} plan_name Subscription plan name
* @apiSuccess        {String} plan_description Subscription plan description
* @apiSuccess        {Integer} plan_interval Subscription plan interval (numeric digits) like 1, 12 etc
* @apiSuccess        {Integer} plan_free_trial_interval Free trial interval (numeric digits) like 7, 14 etc
* @apiSuccess        {Integer} plan_free_trial_unit Free trial unit like Day, Month
* @apiSuccess        {Integer} plan_status Subscription plan status like active or inactive
* @apiSuccess        {String} country_code Country code like IN, US, EU etc
* @apiSuccess        {String} country_name Country name like India, United States, Europe Zone etc
* @apiSuccess        {String} currency_code Currency code like INR, USD, EUR etc
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {Integer} plan_price Price corresponding to the plan
* @apiSuccess        {String} subscription_start_date Date on which the subscription was started. (The day when the lead became the customer)
* @apiSuccess        {String} last_billing_date Date on which the customer was charged previously
* @apiSuccess        {String} next_billing_date Date on which the customer will be charged next.
*
* @apiSuccessExample Success-Response:        
* [{
* "subscription_id": "XXX",
* "subscription_plan_id": "XXX",
* "plan_name": "XXX ",
* "plan_description": "XXX",
* "plan_interval": 0,
* "plan_free_trial_interval": 0,
* "plan_free_trial_unit": 0,
* "plan_status": 1,
* "country_code": "XXX",
* "country_name": "XXX",
* "currency_code": "XX",
* "currency_symbol": "XX",
* "plan_price": 0,
* "subscription_start_date": "XXX",
* "last_billing_date": "XXX",
* "next_billing_date": "XXX"
* }]
*
**/


/**
*
* @api        {POST} isContentAuthorized Is Content Authorized 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{isContentAuthorized(app_token: \"XXX\", product_key: \"XXX\", user_id: \"XXX\") { fields list separated by white space} } "
* }
*
* @apiName        Is Content Authorized
* @apiDescription        Check if the content is authorized from billing end
* @apiGroup        Billing-Subscription
*
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {Integer} authorized Authorization status to a content
* @apiSuccess        {String} message Success/Error text message
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "authorized": true,
* "message": "XXX",
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} cancellationReasons Reasons: List 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{cancellationReasons(app_token: \"XXX\",product_key: \"XXX\",id:\XXX\",account_type:XXX) { fields list separated by white space } } }"
* }
*
* @apiName        Reasons: List
* @apiDescription        Fetch list of cancellation reasons which has set by an account otherwise default reason list will come
* @apiGroup        Billing-Cancel Reasons
*
*
* @apiSuccess        {String} id Unique identification string
* @apiSuccess        {String} app_token A valid app token
* @apiSuccess        {String} cancel_reason Reason why the account was cancelled
* @apiSuccess        {Integer} status Status of the response like SUCCESS/FAILURE
* @apiSuccess        {Integer} is_default 
*
* @apiSuccessExample Success-Response:        
* [{
* "id": "XXX",
* "app_token": "XXX",
* "cancel_reason": "XXX",
* "status": 1,
* "is_default": 0
* }]
*
**/


/**
*
* apiPrivate
* @api        {POST} cancellation-reasons/add Reasons: Add 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "XXX",
* "product_key": "XXX",
* "cancel_reason": "XXX",
* "store_key": ""
* }
*
* @apiName        Reasons: Add
* @apiDescription        Allow to add cancellation reason which is useful for showing the cancellation reason list on customer’s store end when a user is trying to cancel the
* @apiGroup        Billing-Cancel Reasons
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} cancel_reason Reason why the account was cancelled
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/cancellation-reasons/add
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F cancel_reason = <cancel_reason> 
* -F store_key = <store_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {PUT} cancellation-reasons/update Reasons: Update 
* @apiParamExample {json} Request-Example:        
* {
* "id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "cancel_reason": "XXX",
* "store_key": "XXXX"
* }
*
* @apiName        Reasons: Update
* @apiDescription        Allow to update a cancellation reason
* @apiGroup        Billing-Cancel Reasons
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} cancel_reason Reason why the account was cancelled
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/cancellation-reasons/update
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F cancel_reason = <cancel_reason> 
* -F store_key = <store_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {DELETE} cancellation-reasons/delete Reasons: Delete 
* @apiParamExample {json} Request-Example:        
* {
* "id": "XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Reasons: Delete
* @apiDescription        Allow to delete a cancellation reason
* @apiGroup        Billing-Cancel Reasons
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/cancellation-reasons/delete
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {POST} accounts/status Account Status 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Account Status
* @apiDescription        Get the account status like lead, customer, cancelled, deleted etc...
* @apiGroup        Accounts
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/accounts/status
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} account_status Current Status of the account. for Eg: whether its a lead account/ or a paying account
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
* @apiSuccess        {String} free_trial_expiry_date The date on which the free trail of the account will expire
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "account_status": "Lead",
* "status": "SUCCESS",
* "free_trial_expiry_date": "2019-12-27 00:00:00"
* }
*
**/


/**
*
* apiPrivate
* @api        {POST} user-management/accounts User Accounts 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "XXXXXXXXX",
* "product_key": "XXXXXXXXX",
* "offset":"0",
* "limit":"10"
* }
*
* @apiName        User Accounts
* @apiDescription        Allows to get users details
* @apiGroup        Accounts
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} offset A valid offset
* @apiParam        {String} limit A valid limit
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/user-management/accounts
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F offset = <offset> 
* -F limit = <limit> 
*
* @apiSuccess        {String} data.user_id Response data
* @apiSuccess        {String} data.user_name Response data
* @apiSuccess        {String} data.user_email Response data
* @apiSuccess        {String} data.type Response data
* @apiSuccess        {String} data.plan Response data
* @apiSuccess        {data[]} Array/Object
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "data": [
* {
* "user_id": "XXXXX",
* "user_name": "XXXXx",
* "user_email": "XXXX",
* "type": "XXX",
* "plan": "XXXXX"
* },
* {
* "user_id": "XXXXX",
* "user_name": "XXXXx",
* "user_email": "XXXX",
* "type": "XXX",
* "plan": "XXXXX"
* }
* ],
* "code": 200,
* "status": "SUCCESS"
* 
* }
*
**/


/**
*
* @api        {POST} transactions/generate-sst Add Billing Log 
* @apiParamExample {json} Request-Example:        
* {
* ANY JSON FORMATTED STRING WITH TOKEN
* }
*
* @apiName        Add Billing Log
* @apiDescription        Add purchase subscription details to billing log
* @apiGroup        Billing-Transactions
*
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
* @apiSuccess        {String} sst_token The SST Token which you receive from generate SST
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS",
* "sst_token": "XXX"
* }
*
**/


/**
*
* @api        {PUT} transactions/cancel Cancelled Notification 
* @apiParamExample {json} Request-Example:        
* {
* "sst_token":"XXX",
* "status":"cancel"
* }
*
* @apiName        Cancelled Notification
* @apiDescription        Fetch list of cancellation reasons which has set by an account otherwise default reason list will come
* @apiGroup        Billing-Transactions
*
* @apiParam        {String} sst_token The SST Token which you receive from generate SST
* @apiParam        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/transactions/cancel
* -F sst_token = <sst_token> 
* -F status = <status> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {PUT} transactions/expired Expired Notification 
* @apiParamExample {json} Request-Example:        
* {
* "sst_token": "XXX",
* "status": "expire"
* }
*
* @apiName        Expired Notification
* @apiDescription        Updates the status of the billing log as expired
* @apiGroup        Billing-Transactions
*
* @apiParam        {String} sst_token The SST Token which you receive from generate SST
* @apiParam        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/transactions/expired
* -F sst_token = <sst_token> 
* -F status = <status> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} transactions/success Success Notification 
* @apiParamExample {json} Request-Example:        
* {
* "sst_token": "XXX",
* "status": "success"
* }
*
* @apiName        Success Notification
* @apiDescription        Check if the session token valid then activate the user and update the log status to as success
* @apiGroup        Billing-Transactions
*
* @apiParam        {String} sst_token The SST Token which you receive from generate SST
* @apiParam        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/transactions/success
* -F sst_token = <sst_token> 
* -F status = <status> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} transactions/invoice-details Invoice Details 
* @apiParamExample {json} Request-Example:        
* {
* "order_id":"XXXX"
* }
*
* @apiName        Invoice Details
* @apiDescription        Allows to get the invoice details
* @apiGroup        Billing-Transactions
*
* @apiParam        {String} order_id Unique Order Id
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/transactions/invoice-details
* -F order_id = <order_id> 
*
* @apiSuccess        {String} order_id Unique Order Id
* @apiSuccess        {String} billing_from A date representing the start date of the billing cycle
* @apiSuccess        {String} billing_to A date representing the end date of the billing cycle
* @apiSuccess        {String} customer_name Name of the customer
* @apiSuccess        {String} account_no Unique account number alotted to each customer
* @apiSuccess        {String} plat_form Platform Name
* @apiSuccess        {String} plan_interval Subscription plan interval (numeric digits) like 1, 12 etc
* @apiSuccess        {String} total_amount Total summed up amount
* @apiSuccess        {String} invoice_date Date on which the invoice was generated
* @apiSuccess        {String} invoice_details Html/css code for the generated invoice
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "order_id": "XXXX",
* "billing_from": "XXX",
* "billing_to": "XXX",
* "customer_name": "XXX",
* "account_no": "XXX",
* "plat_form": "XXX",
* "plan_interval": "XXX",
* "total_amount": "XXX",
* "invoice_date": "XXX",
* "invoice_details": "XXX",
* "currency_symbol": "XXX",
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {POST} payment/process-pastdue Process Past Due Payment 
* @apiParamExample {json} Request-Example:        
* {}
*
* @apiName        Process Past Due Payment
* @apiDescription        Allow to update to the existing subscription plan
* @apiGroup        Billing-Payment
*
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/payment/process-pastdue
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} paymentHistory Payment History 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{paymentHistory(app_Token: \"XXX\",product_key:\"XXX\" ,userId: \"XXX\") { fields list separated by white space} } }"
* }
*
* @apiName        Payment History
* @apiDescription        Get the transaction history detail
* @apiGroup        Billing-Payment
*
*
* @apiSuccess        {String} id Unique identification string
* @apiSuccess        {String} order_id Unique Order Id
* @apiSuccess        {String} order_type Order/Transaction description
* @apiSuccess        {String} account_name Account/Store name
* @apiSuccess        {String} user_name A user name for store/account
* @apiSuccess        {String} user_email A valid email id for store/account
* @apiSuccess        {Integer} billing_amount Billing amount of a product
* @apiSuccess        {String} item_name Name of the product
* @apiSuccess        {String} item_description Description of product
* @apiSuccess        {String} gateway_code The payment pass through the Gateway which returns a code for the gateway
* @apiSuccess        {String} gateway_transaction_id Transaction id which you find from Gateway end
* @apiSuccess        {String} payment_method Payment methods like credit card payment, Pay with PayPal, voucher etc
* @apiSuccess        {String} card_last_four_digits Card last four digits through which your payment has processed
* @apiSuccess        {String} country_name Country name like India, United States, Europe Zone etc
* @apiSuccess        {String} country_code Country code like IN, US, EU etc
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {String} currency_code Currency code like INR, USD, EUR etc
* @apiSuccess        {Integer} coupon_discount_in_amount Converted discount amount with respect to the primary currency when payment passed through coupon
* @apiSuccess        {Integer} coupon_discount Discount value for a coupon
* @apiSuccess        {Integer} coupon_type If the discount amount is in percentage(%) or flat price
* @apiSuccess        {String} additional_information Keeps an additional information with JSON/String format if required
* @apiSuccess        {String} transaction_date Transaction date when your payment has processed
* @apiSuccess        {String} transaction_status Transaction status like success/cancel/onhold etc
* @apiSuccess        {Integer} device_type The order/payment has processed through which device like web browser, Android app, iOS app etc
*
* @apiSuccessExample Success-Response:        
* [{
* "id": "XXX",
* "order_id": "XXX",
* "order_type": "XXXX",
* "account_name": "XXXX",
* "user_name": "XXX",
* "user_email": "XXX",
* "billing_amount": 0,
* "item_name": "XXXX",
* "item_description": "XXXX",
* "gateway_code": "XXX",
* "gateway_transaction_id": "XXXX",
* "payment_method": "XXX",
* "card_last_four_digits": "XXXX",
* "country_name": "XXX",
* "country_code": "XXX",
* "currency_symbol": "XXX",
* "currency_code": "XXX",
* "coupon_discount_in_amount": 0,
* "coupon_discount": 0,
* "coupon_type": 0,
* "additional_information": "XXX",
* "transaction_date": "XXXX",
* "transaction_status": "XXX",
* "device_type": 1
* }]
*
**/


/**
*
* @api        {POST} currency List Defaults 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{currency(country_code: \"XXX\",limit:10,offset:0){ fields list separated by white space } } }"
* }
*
* @apiName        List Defaults
* @apiDescription        Fetch all the default currency list which will be used for Store owner only
* @apiGroup        Billing-Currency
*
*
* @apiSuccess        {String} id Unique identification string
* @apiSuccess        {String} country_code Country code like IN, US, EU etc
* @apiSuccess        {String} country_name Country name like India, United States, Europe Zone etc
* @apiSuccess        {String} currency_code Currency code like INR, USD, EUR etc
* @apiSuccess        {String} currency_title Title of the currency
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {Integer} currency_iso_number ISO number corresponding to the currency
* @apiSuccess        {Integer} is_zero_decimal 0
*
* @apiSuccessExample Success-Response:        
* [{
* "id": "XXX",
* "country_code": "XXX",
* "country_name": "XXX",
* "currency_code": "XXX",
* "currency_title": "XXX",
* "currency_symbol": "XX",
* "currency_iso_number": 0,
* "is_zero_decimal": 0
* }]
*
**/


/**
*
* @api        {POST} currencyListOfAnAccount List Store Currency 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{currencyListOfAnAccount(app_token: \"XXX\",product_key: \"XXX\",limit:10,offset:0){ fields list separated by white space } } }"
* }
*
* @apiName        List Store Currency
* @apiDescription        Fetch currency list which is set by Store owner, which will be used for it’s Storefront
* @apiGroup        Billing-Currency
*
*
* @apiSuccess        {String} country_code Country code like IN, US, EU etc
* @apiSuccess        {String} country_name Country name like India, United States, Europe Zone etc
* @apiSuccess        {String} currencyCode A short code that represents the currency's name
* @apiSuccess        {String} currency_title Title of the currency
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {Integer} is_zero_decimal 0
* @apiSuccess        {Integer} is_default 
* @apiSuccess        {Integer} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* [{
* "country_code": "XXX",
* "country_name": "XXX",
* "currencyCode": "XXX",
* "currency_title": "XXX",
* "currency_symbol": "XXX",
* "is_zero_decimal": 0,
* "is_default": 0,
* "status": 1
* }]
*
**/


/**
*
* apiPrivate
* @api        {POST} currency/add Add 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "XXX",
* "product_key": "XXX",
* "country_code":"XXX",
* "currency_code":"XXX"
* }
*
* @apiName        Add
* @apiDescription        Allow to add a new currency from default currency against an account
* @apiGroup        Billing-Currency
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} country_code Country code like IN, US, EU etc
* @apiParam        {String} currency_code Currency code like INR, USD, EUR etc
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/currency/add
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F country_code = <country_code> 
* -F currency_code = <currency_code> 
*
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }`
*
**/


/**
*
* apiPrivate
* @api        {PUT} currency/make-default Set Default 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "app001",
* "product_key": "prod001",
* "country_code":"IN",
* "currency_code":"INR"
* }
*
* @apiName        Set Default
* @apiDescription        Allow to make default currency which are added by an account
* @apiGroup        Billing-Currency
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} country_code Country code like IN, US, EU etc
* @apiParam        {String} currency_code Currency code like INR, USD, EUR etc
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/currency/make-default
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F country_code = <country_code> 
* -F currency_code = <currency_code> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} subscriptions/renew Renew User Subscription 
* @apiParamExample {json} Request-Example:        
* {
* "user_id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "store_key": "XXXX"
* }
*
* @apiName        Renew User Subscription
* @apiDescription        used for renewal of subscription plan and it is used internally only.
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/renew
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} subscriptions/free-trial-expiring/notify Free Trial Expiring Notification 
* @apiParamExample {json} Request-Example:        
* {
* "user_id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "store_key": "XXXX"
* }
*
* @apiName        Free Trial Expiring Notification
* @apiDescription        It is a REST API which is send a notification to an account holder before 2 days of free trial expires.
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/free-trial-expiring/notify
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} subscriptions/free-trial/cancel Cancel Account: Free Trial Expired 
* @apiParamExample {json} Request-Example:        
* {
* "user_id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "store_key": "XXXX"
* }
*
* @apiName        Cancel Account: Free Trial Expired
* @apiDescription        It is a REST API which is used to cancel a free trial account after 14 days.
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/free-trial/cancel
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} accounts/payment-failure/cancel Cancel Account: payment Failed 
* @apiParamExample {json} Request-Example:        
* { "user_id":"XXXX", "app_token": "XXXX", "product_key": "XXXX", "store_key": "XXXX" }
*
* @apiName        Cancel Account: payment Failed
* @apiDescription        It is a REST API which is used to cancel a customer account which has failed the recurring payment process
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/accounts/payment-failure/cancel
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} accounts/delete Delete Account 
* @apiParamExample {json} Request-Example:        
* {
* "user_id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "store_key": "XXXX"
* }
*
* @apiName        Delete Account
* @apiDescription        It is a REST API which is used to delete the account after cancellation of an account.
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/accounts/delete
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} test/request-details Api Testing 
* @apiParamExample {json} Request-Example:        
* {}
*
* @apiName        Api Testing
* @apiDescription        Test the Api Connection & availability
* @apiGroup        Billing-Testing
*
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/test/request-details
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
*     "code": 200,
*     "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {POST} subscription-plans/add Add Subscription Plan 
* @apiParamExample {json} Request-Example:        
* {
* "plan_code": "XXX",
* "price": [
* {
* "price_status": 1,
* "country_code": "XX",
* "subscription_plan_price": "XX",
* "plan_interval": 1,
* "plan_interval_unit": "XX",
* "plan_free_trial_interval": 0,
* "planFreeTrialUnit": "XXX"
* }
* ],
* "plan_name": "XXX",
* "plan_description": "XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Add Subscription Plan
* @apiDescription        Add a new subscription plan
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} plan_code A Unique Plan Code
* @apiParam        {Array} price Subscription plan price object which includes different attributes like country, currency and their prices
* @apiParam        {String} plan_name Subscription plan name
* @apiParam        {String} plan_description Subscription plan description
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/add
* -F plan_code = <plan_code> 
* -F price = <price> 
* -F plan_name = <plan_name> 
* -F plan_description = <plan_description> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {PUT} subscription-plans/update Update Subscription Plans 
* @apiParamExample {json} Request-Example:        
* {
* "id": "XXX",
* "plan_code": "XXX",
* "price": [
* {
* "id": "XXX",
* "price_status": 1,
* "country_code": "XXX",
* "subscription_plan_price": "XXX",
* "plan_interval": 0,
* "plan_interval_unit": "XXX",
* "plan_free_trial_interval": 0,
* "planFreeTrialUnit": "XXX"
* }
* ],
* "plan_name": "XXX",
* "plan_description": "XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Update Subscription Plans
* @apiDescription        Updates subscription plan
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} plan_code A Unique Plan Code
* @apiParam        {Array} price Subscription plan price object which includes different attributes like country, currency and their prices
* @apiParam        {String} plan_name Subscription plan name
* @apiParam        {String} plan_description Subscription plan description
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/update
* -F id = <id> 
* -F plan_code = <plan_code> 
* -F price = <price> 
* -F plan_name = <plan_name> 
* -F plan_description = <plan_description> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {PUT} subscription-plans/enable Enable Subscription Plan 
* @apiParamExample {json} Request-Example:        
* {
* "id":"XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Enable Subscription Plan
* @apiDescription        Allow to enable the existing subscription plan which is already in disabled state
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/enable
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {PUT} subscription-plans/disable Disable Subscription Plan 
* @apiParamExample {json} Request-Example:        
* {
* "id": "XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Disable Subscription Plan
* @apiDescription        Allow to disable the existing subscription plan which is already in enabled state
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/disable
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* { "code": 200, "status": "SUCCESS" }
*
**/


/**
*
* apiPrivate
* @api        {PUT} subscription-plans/make-default Set Default Subscription Plan 
* @apiParamExample {json} Request-Example:        
* {
* "id":"XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Set Default Subscription Plan
* @apiDescription        Allow to make default subscription plan which is useful for showing the plan list based on default one on customer’s store end
* @apiGroup        Billing-Subscription
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscription-plans/make-default
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* { "code": 200, "status": "SUCCESS" }
*
**/


/**
*
* @api        {POST} subscriptions/cancel Cancel User 
* @apiParamExample {json} Request-Example:        
* {}
*
* @apiName        Cancel User
* @apiDescription        This is used for cancelling the user subscription of an account/store
* @apiGroup        Billing-Subscription
*
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/cancel
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} subscriptions/free-trial/register Take a Free Trial 
* @apiParamExample {json} Request-Example:        
* {}
*
* @apiName        Take a Free Trial
* @apiDescription        Allows to take a free trail of product
* @apiGroup        Billing-Subscription
*
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/free-trial/register
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} subscriptionPlans Subscription Plans List 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{ subscriptionPlans(app_token:\"XXX\",product_key:\"XXX\",country_code:\"XX\",account_type:XX,is_free_plan:XX,user_type:XX,off_set:XX,limit:XX,id:\"XXX\") { fields list separated by white space }}"
* }
*
* @apiName        Subscription Plans List
* @apiDescription        Fetch all active/inactive subscription plans which is used for CMS.
* @apiGroup        Billing-Subscription
*
*
*
* @apiSuccessExample Success-Response:        
* { 
* "id": "XXX", 
* "app_token": "XX", 
* "account_type": 0, 
* "plan_name": "XX", 
* "plan_code": "XX", 
* "plan_description": "XX", 
* "plan_status": 1, 
* "is_default": "XX", 
* "is_free_plan": "XX", 
* "price": [{ 
* "id": "XX", 
* "subscription_plan_id": "XX", 
* "country_code": "XX", 
* "currency_code": "XX", 
* "subscription_plan_price": "XX", 
* "price_status": "XX", 
* "plan_interval_unit": "XX", 
* "plan_interval": "XX", 
* "plan_free_trial_unit": "XX", 
* "plan_free_trial_interval": "XX", 
* "discountType": "XX", 
* "discount_price": "XX" 
* },..] 
* }
*
**/


/**
*
* @api        {POST} isSubscriptionEnabled Is Subscription Enabled 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{isSubscriptionEnabled(app_token: \"XXX\",product_key: \"XXX\", country_code: \"XXX\", muvi_token:\"XXX\", user_id: \"XXX\", account_type:XX) { fields list separated by white space} } "
* }
*
* @apiName        Is Subscription Enabled
* @apiDescription        Check if the subscription monetization enabled for an account or not.
* @apiGroup        Billing-Subscription
*
*
* @apiSuccess        {String} code Status code
* @apiSuccess        {Integer} is_subscription_enabled Subscription is enabled or not
* @apiSuccess        {Integer} is_user_subscribed User has purchased the subscription or not
* @apiSuccess        {String} message Success/Error text message
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": "200",
* "is_subscription_enabled": true,
* "is_user_subscribed": true,
* "message": "XXXX",
* "status": "SUCCESS"
* 
* }
*
**/


/**
*
* @api        {POST} myPlans My Plans 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{myPlans(app_token: \"XXX\", product_key: \"XXX\", user_id: \"XXX\") { fields list separated by white space} } "
* }
*
* @apiName        My Plans
* @apiDescription        Get the subscription with discount detail before processing payment
* @apiGroup        Billing-Subscription
*
*
* @apiSuccess        {String} subscription_id Subscription Id
* @apiSuccess        {String} subscription_plan_id Subscription plan id
* @apiSuccess        {String} plan_name Subscription plan name
* @apiSuccess        {String} plan_description Subscription plan description
* @apiSuccess        {Integer} plan_interval Subscription plan interval (numeric digits) like 1, 12 etc
* @apiSuccess        {Integer} plan_free_trial_interval Free trial interval (numeric digits) like 7, 14 etc
* @apiSuccess        {Integer} plan_free_trial_unit Free trial unit like Day, Month
* @apiSuccess        {Integer} plan_status Subscription plan status like active or inactive
* @apiSuccess        {String} country_code Country code like IN, US, EU etc
* @apiSuccess        {String} country_name Country name like India, United States, Europe Zone etc
* @apiSuccess        {String} currency_code Currency code like INR, USD, EUR etc
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {Integer} plan_price Price corresponding to the plan
* @apiSuccess        {String} subscription_start_date Date on which the subscription was started. (The day when the lead became the customer)
* @apiSuccess        {String} last_billing_date Date on which the customer was charged previously
* @apiSuccess        {String} next_billing_date Date on which the customer will be charged next.
*
* @apiSuccessExample Success-Response:        
* [{
* "subscription_id": "XXX",
* "subscription_plan_id": "XXX",
* "plan_name": "XXX ",
* "plan_description": "XXX",
* "plan_interval": 0,
* "plan_free_trial_interval": 0,
* "plan_free_trial_unit": 0,
* "plan_status": 1,
* "country_code": "XXX",
* "country_name": "XXX",
* "currency_code": "XX",
* "currency_symbol": "XX",
* "plan_price": 0,
* "subscription_start_date": "XXX",
* "last_billing_date": "XXX",
* "next_billing_date": "XXX"
* }]
*
**/


/**
*
* @api        {POST} isContentAuthorized Is Content Authorized 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{isContentAuthorized(app_token: \"XXX\", product_key: \"XXX\", user_id: \"XXX\") { fields list separated by white space} } "
* }
*
* @apiName        Is Content Authorized
* @apiDescription        Check if the content is authorized from billing end
* @apiGroup        Billing-Subscription
*
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {Integer} authorized Authorization status to a content
* @apiSuccess        {String} message Success/Error text message
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "authorized": true,
* "message": "XXX",
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} cancellationReasons Reasons: List 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{cancellationReasons(app_token: \"XXX\",product_key: \"XXX\",id:\XXX\",account_type:XXX) { fields list separated by white space } } }"
* }
*
* @apiName        Reasons: List
* @apiDescription        Fetch list of cancellation reasons which has set by an account otherwise default reason list will come
* @apiGroup        Billing-Cancel Reasons
*
*
* @apiSuccess        {String} id Unique identification string
* @apiSuccess        {String} app_token A valid app token
* @apiSuccess        {String} cancel_reason Reason why the account was cancelled
* @apiSuccess        {Integer} status Status of the response like SUCCESS/FAILURE
* @apiSuccess        {Integer} is_default 
*
* @apiSuccessExample Success-Response:        
* [{
* "id": "XXX",
* "app_token": "XXX",
* "cancel_reason": "XXX",
* "status": 1,
* "is_default": 0
* }]
*
**/


/**
*
* apiPrivate
* @api        {POST} cancellation-reasons/add Reasons: Add 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "XXX",
* "product_key": "XXX",
* "cancel_reason": "XXX",
* "store_key": ""
* }
*
* @apiName        Reasons: Add
* @apiDescription        Allow to add cancellation reason which is useful for showing the cancellation reason list on customer’s store end when a user is trying to cancel the
* @apiGroup        Billing-Cancel Reasons
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} cancel_reason Reason why the account was cancelled
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/cancellation-reasons/add
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F cancel_reason = <cancel_reason> 
* -F store_key = <store_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {PUT} cancellation-reasons/update Reasons: Update 
* @apiParamExample {json} Request-Example:        
* {
* "id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "cancel_reason": "XXX",
* "store_key": "XXXX"
* }
*
* @apiName        Reasons: Update
* @apiDescription        Allow to update a cancellation reason
* @apiGroup        Billing-Cancel Reasons
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} cancel_reason Reason why the account was cancelled
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/cancellation-reasons/update
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F cancel_reason = <cancel_reason> 
* -F store_key = <store_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {DELETE} cancellation-reasons/delete Reasons: Delete 
* @apiParamExample {json} Request-Example:        
* {
* "id": "XXX",
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Reasons: Delete
* @apiDescription        Allow to delete a cancellation reason
* @apiGroup        Billing-Cancel Reasons
*
* @apiParam        {String} id Unique identification string
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/cancellation-reasons/delete
* -F id = <id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {POST} accounts/status Account Status 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "XXX",
* "product_key": "XXX"
* }
*
* @apiName        Account Status
* @apiDescription        Get the account status like lead, customer, cancelled, deleted etc...
* @apiGroup        Accounts
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/accounts/status
* -F app_token = <app_token> 
* -F product_key = <product_key> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} account_status Current Status of the account. for Eg: whether its a lead account/ or a paying account
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
* @apiSuccess        {String} free_trial_expiry_date The date on which the free trail of the account will expire
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "account_status": "Lead",
* "status": "SUCCESS",
* "free_trial_expiry_date": "2019-12-27 00:00:00"
* }
*
**/


/**
*
* apiPrivate
* @api        {POST} user-management/accounts User Accounts 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "XXXXXXXXX",
* "product_key": "XXXXXXXXX",
* "offset":"0",
* "limit":"10"
* }
*
* @apiName        User Accounts
* @apiDescription        Allows to get users details
* @apiGroup        Accounts
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} offset A valid offset
* @apiParam        {String} limit A valid limit
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/user-management/accounts
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F offset = <offset> 
* -F limit = <limit> 
*
* @apiSuccess        {String} data.user_id Response data
* @apiSuccess        {String} data.user_name Response data
* @apiSuccess        {String} data.user_email Response data
* @apiSuccess        {String} data.type Response data
* @apiSuccess        {String} data.plan Response data
* @apiSuccess        {data[]} Array/Object
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "data": [
* {
* "user_id": "XXXXX",
* "user_name": "XXXXx",
* "user_email": "XXXX",
* "type": "XXX",
* "plan": "XXXXX"
* },
* {
* "user_id": "XXXXX",
* "user_name": "XXXXx",
* "user_email": "XXXX",
* "type": "XXX",
* "plan": "XXXXX"
* }
* ],
* "code": 200,
* "status": "SUCCESS"
* 
* }
*
**/


/**
*
* @api        {POST} transactions/generate-sst Add Billing Log 
* @apiParamExample {json} Request-Example:        
* {
* ANY JSON FORMATTED STRING WITH TOKEN
* }
*
* @apiName        Add Billing Log
* @apiDescription        Add purchase subscription details to billing log
* @apiGroup        Billing-Transactions
*
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
* @apiSuccess        {String} sst_token The SST Token which you receive from generate SST
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS",
* "sst_token": "XXX"
* }
*
**/


/**
*
* @api        {PUT} transactions/cancel Cancelled Notification 
* @apiParamExample {json} Request-Example:        
* {
* "sst_token":"XXX",
* "status":"cancel"
* }
*
* @apiName        Cancelled Notification
* @apiDescription        Fetch list of cancellation reasons which has set by an account otherwise default reason list will come
* @apiGroup        Billing-Transactions
*
* @apiParam        {String} sst_token The SST Token which you receive from generate SST
* @apiParam        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/transactions/cancel
* -F sst_token = <sst_token> 
* -F status = <status> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {PUT} transactions/expired Expired Notification 
* @apiParamExample {json} Request-Example:        
* {
* "sst_token": "XXX",
* "status": "expire"
* }
*
* @apiName        Expired Notification
* @apiDescription        Updates the status of the billing log as expired
* @apiGroup        Billing-Transactions
*
* @apiParam        {String} sst_token The SST Token which you receive from generate SST
* @apiParam        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/transactions/expired
* -F sst_token = <sst_token> 
* -F status = <status> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} transactions/success Success Notification 
* @apiParamExample {json} Request-Example:        
* {
* "sst_token": "XXX",
* "status": "success"
* }
*
* @apiName        Success Notification
* @apiDescription        Check if the session token valid then activate the user and update the log status to as success
* @apiGroup        Billing-Transactions
*
* @apiParam        {String} sst_token The SST Token which you receive from generate SST
* @apiParam        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/transactions/success
* -F sst_token = <sst_token> 
* -F status = <status> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} transactions/invoice-details Invoice Details 
* @apiParamExample {json} Request-Example:        
* {
* "order_id":"XXXX"
* }
*
* @apiName        Invoice Details
* @apiDescription        Allows to get the invoice details
* @apiGroup        Billing-Transactions
*
* @apiParam        {String} order_id Unique Order Id
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/transactions/invoice-details
* -F order_id = <order_id> 
*
* @apiSuccess        {String} order_id Unique Order Id
* @apiSuccess        {String} billing_from A date representing the start date of the billing cycle
* @apiSuccess        {String} billing_to A date representing the end date of the billing cycle
* @apiSuccess        {String} customer_name Name of the customer
* @apiSuccess        {String} account_no Unique account number alotted to each customer
* @apiSuccess        {String} plat_form Platform Name
* @apiSuccess        {String} plan_interval Subscription plan interval (numeric digits) like 1, 12 etc
* @apiSuccess        {String} total_amount Total summed up amount
* @apiSuccess        {String} invoice_date Date on which the invoice was generated
* @apiSuccess        {String} invoice_details Html/css code for the generated invoice
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "order_id": "XXXX",
* "billing_from": "XXX",
* "billing_to": "XXX",
* "customer_name": "XXX",
* "account_no": "XXX",
* "plat_form": "XXX",
* "plan_interval": "XXX",
* "total_amount": "XXX",
* "invoice_date": "XXX",
* "invoice_details": "XXX",
* "currency_symbol": "XXX",
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* apiPrivate
* @api        {POST} payment/process-pastdue Process Past Due Payment 
* @apiParamExample {json} Request-Example:        
* {}
*
* @apiName        Process Past Due Payment
* @apiDescription        Allow to update to the existing subscription plan
* @apiGroup        Billing-Payment
*
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/payment/process-pastdue
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} paymentHistory Payment History 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{paymentHistory(app_Token: \"XXX\",product_key:\"XXX\" ,userId: \"XXX\") { fields list separated by white space} } }"
* }
*
* @apiName        Payment History
* @apiDescription        Get the transaction history detail
* @apiGroup        Billing-Payment
*
*
* @apiSuccess        {String} id Unique identification string
* @apiSuccess        {String} order_id Unique Order Id
* @apiSuccess        {String} order_type Order/Transaction description
* @apiSuccess        {String} account_name Account/Store name
* @apiSuccess        {String} user_name A user name for store/account
* @apiSuccess        {String} user_email A valid email id for store/account
* @apiSuccess        {Integer} billing_amount Billing amount of a product
* @apiSuccess        {String} item_name Name of the product
* @apiSuccess        {String} item_description Description of product
* @apiSuccess        {String} gateway_code The payment pass through the Gateway which returns a code for the gateway
* @apiSuccess        {String} gateway_transaction_id Transaction id which you find from Gateway end
* @apiSuccess        {String} payment_method Payment methods like credit card payment, Pay with PayPal, voucher etc
* @apiSuccess        {String} card_last_four_digits Card last four digits through which your payment has processed
* @apiSuccess        {String} country_name Country name like India, United States, Europe Zone etc
* @apiSuccess        {String} country_code Country code like IN, US, EU etc
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {String} currency_code Currency code like INR, USD, EUR etc
* @apiSuccess        {Integer} coupon_discount_in_amount Converted discount amount with respect to the primary currency when payment passed through coupon
* @apiSuccess        {Integer} coupon_discount Discount value for a coupon
* @apiSuccess        {Integer} coupon_type If the discount amount is in percentage(%) or flat price
* @apiSuccess        {String} additional_information Keeps an additional information with JSON/String format if required
* @apiSuccess        {String} transaction_date Transaction date when your payment has processed
* @apiSuccess        {String} transaction_status Transaction status like success/cancel/onhold etc
* @apiSuccess        {Integer} device_type The order/payment has processed through which device like web browser, Android app, iOS app etc
*
* @apiSuccessExample Success-Response:        
* [{
* "id": "XXX",
* "order_id": "XXX",
* "order_type": "XXXX",
* "account_name": "XXXX",
* "user_name": "XXX",
* "user_email": "XXX",
* "billing_amount": 0,
* "item_name": "XXXX",
* "item_description": "XXXX",
* "gateway_code": "XXX",
* "gateway_transaction_id": "XXXX",
* "payment_method": "XXX",
* "card_last_four_digits": "XXXX",
* "country_name": "XXX",
* "country_code": "XXX",
* "currency_symbol": "XXX",
* "currency_code": "XXX",
* "coupon_discount_in_amount": 0,
* "coupon_discount": 0,
* "coupon_type": 0,
* "additional_information": "XXX",
* "transaction_date": "XXXX",
* "transaction_status": "XXX",
* "device_type": 1
* }]
*
**/


/**
*
* @api        {POST} currency List Defaults 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{currency(country_code: \"XXX\",limit:10,offset:0){ fields list separated by white space } } }"
* }
*
* @apiName        List Defaults
* @apiDescription        Fetch all the default currency list which will be used for Store owner only
* @apiGroup        Billing-Currency
*
*
* @apiSuccess        {String} id Unique identification string
* @apiSuccess        {String} country_code Country code like IN, US, EU etc
* @apiSuccess        {String} country_name Country name like India, United States, Europe Zone etc
* @apiSuccess        {String} currency_code Currency code like INR, USD, EUR etc
* @apiSuccess        {String} currency_title Title of the currency
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {Integer} currency_iso_number ISO number corresponding to the currency
* @apiSuccess        {Integer} is_zero_decimal 0
*
* @apiSuccessExample Success-Response:        
* [{
* "id": "XXX",
* "country_code": "XXX",
* "country_name": "XXX",
* "currency_code": "XXX",
* "currency_title": "XXX",
* "currency_symbol": "XX",
* "currency_iso_number": 0,
* "is_zero_decimal": 0
* }]
*
**/


/**
*
* @api        {POST} currencyListOfAnAccount List Store Currency 
* @apiParamExample {json} Request-Example:        
* {
* "query": "{currencyListOfAnAccount(app_token: \"XXX\",product_key: \"XXX\",limit:10,offset:0){ fields list separated by white space } } }"
* }
*
* @apiName        List Store Currency
* @apiDescription        Fetch currency list which is set by Store owner, which will be used for it’s Storefront
* @apiGroup        Billing-Currency
*
*
* @apiSuccess        {String} country_code Country code like IN, US, EU etc
* @apiSuccess        {String} country_name Country name like India, United States, Europe Zone etc
* @apiSuccess        {String} currencyCode A short code that represents the currency's name
* @apiSuccess        {String} currency_title Title of the currency
* @apiSuccess        {String} currency_symbol Currency symbol like ₹, $, € etc
* @apiSuccess        {Integer} is_zero_decimal 0
* @apiSuccess        {Integer} is_default 
* @apiSuccess        {Integer} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* [{
* "country_code": "XXX",
* "country_name": "XXX",
* "currencyCode": "XXX",
* "currency_title": "XXX",
* "currency_symbol": "XXX",
* "is_zero_decimal": 0,
* "is_default": 0,
* "status": 1
* }]
*
**/


/**
*
* apiPrivate
* @api        {POST} currency/add Add 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "XXX",
* "product_key": "XXX",
* "country_code":"XXX",
* "currency_code":"XXX"
* }
*
* @apiName        Add
* @apiDescription        Allow to add a new currency from default currency against an account
* @apiGroup        Billing-Currency
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} country_code Country code like IN, US, EU etc
* @apiParam        {String} currency_code Currency code like INR, USD, EUR etc
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/currency/add
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F country_code = <country_code> 
* -F currency_code = <currency_code> 
*
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }`
*
**/


/**
*
* apiPrivate
* @api        {PUT} currency/make-default Set Default 
* @apiParamExample {json} Request-Example:        
* {
* "app_token": "app001",
* "product_key": "prod001",
* "country_code":"IN",
* "currency_code":"INR"
* }
*
* @apiName        Set Default
* @apiDescription        Allow to make default currency which are added by an account
* @apiGroup        Billing-Currency
*
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} country_code Country code like IN, US, EU etc
* @apiParam        {String} currency_code Currency code like INR, USD, EUR etc
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/currency/make-default
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F country_code = <country_code> 
* -F currency_code = <currency_code> 
*
* @apiSuccess        {Integer} code Status code
* @apiSuccess        {String} status Status of the response like SUCCESS/FAILURE
*
* @apiSuccessExample Success-Response:        
* {
* "code": 200,
* "status": "SUCCESS"
* }
*
**/


/**
*
* @api        {POST} subscriptions/renew Renew User Subscription 
* @apiParamExample {json} Request-Example:        
* {
* "user_id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "store_key": "XXXX"
* }
*
* @apiName        Renew User Subscription
* @apiDescription        used for renewal of subscription plan and it is used internally only.
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/renew
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} subscriptions/free-trial-expiring/notify Free Trial Expiring Notification 
* @apiParamExample {json} Request-Example:        
* {
* "user_id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "store_key": "XXXX"
* }
*
* @apiName        Free Trial Expiring Notification
* @apiDescription        It is a REST API which is send a notification to an account holder before 2 days of free trial expires.
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/free-trial-expiring/notify
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} subscriptions/free-trial/cancel Cancel Account: Free Trial Expired 
* @apiParamExample {json} Request-Example:        
* {
* "user_id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "store_key": "XXXX"
* }
*
* @apiName        Cancel Account: Free Trial Expired
* @apiDescription        It is a REST API which is used to cancel a free trial account after 14 days.
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/subscriptions/free-trial/cancel
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} accounts/payment-failure/cancel Cancel Account: payment Failed 
* @apiParamExample {json} Request-Example:        
* { "user_id":"XXXX", "app_token": "XXXX", "product_key": "XXXX", "store_key": "XXXX" }
*
* @apiName        Cancel Account: payment Failed
* @apiDescription        It is a REST API which is used to cancel a customer account which has failed the recurring payment process
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/accounts/payment-failure/cancel
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/


/**
*
* @api        {POST} accounts/delete Delete Account 
* @apiParamExample {json} Request-Example:        
* {
* "user_id":"XXXX",
* "app_token": "XXXX",
* "product_key": "XXXX",
* "store_key": "XXXX"
* }
*
* @apiName        Delete Account
* @apiDescription        It is a REST API which is used to delete the account after cancellation of an account.
* @apiGroup        Billing-Cron
*
* @apiParam        {String} user_id A valid user id for store/account
* @apiParam        {String} app_token A valid app token
* @apiParam        {String} product_key A valid product key
* @apiParam        {String} store_key A valid store key
*
* @apiExample        Example usage:        
* curl -X POST <Domain name>/accounts/delete
* -F user_id = <user_id> 
* -F app_token = <app_token> 
* -F product_key = <product_key> 
* -F store_key = <store_key> 
*
*
* @apiSuccessExample Success-Response:        
* {}
*
**/