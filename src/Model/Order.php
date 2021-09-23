<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Order extends AbstractModel
{
    /**
     * The purchase order number for this order. Formatting Notes: 8-character
     * alpha-numeric code.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * This field will contain the current state of the purchase order.
     *
     * @var string
     */
    public $purchaseOrderState = null;

    /**
     * Details of an order.
     *
     * @var \Amz\VendorOrders\Model\OrderDetails
     */
    public $orderDetails = null;
}
