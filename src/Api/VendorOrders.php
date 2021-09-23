<?php

namespace Amz\VendorOrders\Api;

use Amz\VendorOrders\Model\GetPurchaseOrderResponse as GetPurchaseOrderResponse;
use Amz\VendorOrders\Model\GetPurchaseOrdersResponse as GetPurchaseOrdersResponse;
use Amz\VendorOrders\Model\GetPurchaseOrdersStatusResponse as GetPurchaseOrdersStatusResponse;
use Amz\VendorOrders\Model\SubmitAcknowledgementRequest as SubmitAcknowledgementRequest;
use Amz\VendorOrders\Model\SubmitAcknowledgementResponse as SubmitAcknowledgementResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class VendorOrders extends AbstractAPI
{
    /**
     * Returns a list of purchase orders created or changed during the time frame that
     * you specify. You define the time frame using the createdAfter, createdBefore,
     * changedAfter and changedBefore parameters. The date range to search must not be
     * more than 7 days. You can choose to get only the purchase order numbers by
     * setting includeDetails to false. You can then use the getPurchaseOrder operation
     * to receive details for a specific purchase order.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'limit'		The limit to the number of records returned. Default value is 100
     *                       records.
     *                       'createdAfter'		Purchase orders that became available after this time will be
     *                       included in the result. Must be in ISO-8601 date/time format.
     *                       'createdBefore'		Purchase orders that became available before this time will be
     *                       included in the result. Must be in ISO-8601 date/time format.
     *                       'nextToken'		Used for pagination when there is more purchase orders than the
     *                       specified result size limit. The token value is returned in the previous API
     *                       call
     *                       'includeDetails'		When true, returns purchase orders with complete details.
     *                       Otherwise, only purchase order numbers are returned. Default value is true.
     *                       'changedAfter'		Purchase orders that changed after this timestamp will be
     *                       included in the result. Must be in ISO-8601 date/time format.
     *                       'changedBefore'		Purchase orders that changed before this timestamp will be
     *                       included in the result. Must be in ISO-8601 date/time format.
     *                       'isPOChanged'		When true, returns purchase orders which were modified after the
     *                       order was placed. Vendors are required to pull the changed purchase order and
     *                       fulfill the updated purchase order and not the original one. Default value is
     *                       false.
     *                       'orderingVendorCode'		Filters purchase orders based on the specified ordering
     *                       vendor code. This value should be same as 'sellingParty.partyId' in the purchase
     *                       order. If not included in the filter, all purchase orders for all of the vendor
     *                       codes that exist in the vendor group used to authorize the API client
     *                       application are returned.
     *
     * @return GetPurchaseOrdersResponse
     */
    public function getPurchaseOrders(array $queries = []): GetPurchaseOrdersResponse
    {
        return $this->client->request('getPurchaseOrders', 'GET', 'vendor/orders/v1/purchaseOrders',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a purchase order based on the purchaseOrderNumber value that you
     * specify.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $purchaseOrderNumber The purchase order identifier for the order that you
     * want. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return GetPurchaseOrderResponse
     */
    public function getPurchaseOrder($purchaseOrderNumber): GetPurchaseOrderResponse
    {
        return $this->client->request('getPurchaseOrder', 'GET', "vendor/orders/v1/purchaseOrders/{$purchaseOrderNumber}",
            [
            ]
        );
    }

    /**
     * Submits acknowledgements for one or more purchase orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param SubmitAcknowledgementRequest $Model Submits acknowledgements for one or
     *                                            more purchase orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitAcknowledgementResponse
     */
    public function submitAcknowledgement(SubmitAcknowledgementRequest $Model): SubmitAcknowledgementResponse
    {
        return $this->client->request('submitAcknowledgement', 'POST', 'vendor/orders/v1/acknowledgements',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns purchase order statuses based on the filters that you specify. Date
     * range to search must not be more than 7 days. You can return a list of purchase
     * order statuses using the available filters, or a single purchase order status by
     * providing the purchase order number.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'limit'		The limit to the number of records returned. Default value is 100
     *                       records.
     *                       'nextToken'		Used for pagination when there are more purchase orders than the
     *                       specified result size limit.
     *                       'createdAfter'		Purchase orders that became available after this timestamp will
     *                       be included in the result. Must be in ISO-8601 date/time format.
     *                       'createdBefore'		Purchase orders that became available before this timestamp
     *                       will be included in the result. Must be in ISO-8601 date/time format.
     *                       'updatedAfter'		Purchase orders for which the last purchase order update
     *                       happened after this timestamp will be included in the result. Must be in
     *                       ISO-8601 date/time format.
     *                       'updatedBefore'		Purchase orders for which the last purchase order update
     *                       happened before this timestamp will be included in the result. Must be in
     *                       ISO-8601 date/time format.
     *                       'purchaseOrderNumber'		Provides purchase order status for the specified purchase
     *                       order number.
     *                       'orderingVendorCode'		Filters purchase orders based on the specified ordering
     *                       vendor code. This value should be same as 'sellingParty.partyId' in the purchase
     *                       order. If not included in filter, all purchase orders for all the vendor codes
     *                       that exist in the vendor group used to authorize API client application are
     *                       returned.
     *                       'shipToPartyId'		Filters purchase orders for a specific buyer's Fulfillment
     *                       Center/warehouse by providing ship to location id here. This value should be
     *                       same as 'shipToParty.partyId' in the purchase order. If not included in filter,
     *                       this will return purchase orders for all the buyer's warehouses used for vendor
     *                       group purchase orders.
     *
     * @return GetPurchaseOrdersStatusResponse
     */
    public function getPurchaseOrdersStatus(array $queries = []): GetPurchaseOrdersStatusResponse
    {
        return $this->client->request('getPurchaseOrdersStatus', 'GET', 'vendor/orders/v1/purchaseOrdersStatus',
            [
                'query' => $queries,
            ]
        );
    }
}
