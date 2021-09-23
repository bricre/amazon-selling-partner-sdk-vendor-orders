<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getPurchaseOrdersStatus operation.
 */
class GetPurchaseOrdersStatusResponse extends AbstractModel
{
    /**
     * Current status of list of purchase orders.
     *
     * @var \Amz\VendorOrders\Model\OrderListStatus
     */
    public $payload = null;

    /**
     * @var \Amz\VendorOrders\Model\ErrorList
     */
    public $errors = null;
}
