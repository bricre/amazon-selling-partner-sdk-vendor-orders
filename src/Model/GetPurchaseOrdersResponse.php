<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getPurchaseOrders operation.
 */
class GetPurchaseOrdersResponse extends AbstractModel
{
    /**
     * A list of orders.
     *
     * @var \Amz\VendorOrders\Model\OrderList
     */
    public $payload = null;

    /**
     * @var \Amz\VendorOrders\Model\ErrorList
     */
    public $errors = null;
}
