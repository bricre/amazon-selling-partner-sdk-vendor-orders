<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getPurchaseOrder operation.
 */
class GetPurchaseOrderResponse extends AbstractModel
{
    /**
     * The details of the requested order.
     *
     * @var \Amz\VendorOrders\Model\Order
     */
    public $payload = null;

    /**
     * @var \Amz\VendorOrders\Model\ErrorList
     */
    public $errors = null;
}
