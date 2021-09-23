<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderItemStatus extends AbstractModel
{
    /**
     * Numbering of the item on the purchase order. The first item will be 1, the
     * second 2, and so on.
     *
     * @var string
     */
    public $itemSequenceNumber = null;

    /**
     * Buyer's Standard Identification Number (ASIN) of an item.
     *
     * @var string
     */
    public $buyerProductIdentifier = null;

    /**
     * The vendor selected product identification of the item.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * The net cost to Amazon each (cost).
     *
     * @var \Amz\VendorOrders\Model\Money
     */
    public $netCost = null;

    /**
     * The list Price to Amazon each (list).
     *
     * @var \Amz\VendorOrders\Model\Money
     */
    public $listPrice = null;

    /**
     * Ordered quantity information.
     *
     * @var object
     */
    public $orderedQuantity = null;

    /**
     * Acknowledgement status information.
     *
     * @var object
     */
    public $acknowledgementStatus = null;
}
