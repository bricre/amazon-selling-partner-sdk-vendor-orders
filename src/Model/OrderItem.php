<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderItem extends AbstractModel
{
    /**
     * Numbering of the item on the purchase order. The first item will be 1, the
     * second 2, and so on.
     *
     * @var string
     */
    public $itemSequenceNumber = null;

    /**
     * Amazon Standard Identification Number (ASIN) of an item.
     *
     * @var string
     */
    public $amazonProductIdentifier = null;

    /**
     * The vendor selected product identification of the item.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Item quantity ordered.
     *
     * @var \Amz\VendorOrders\Model\ItemQuantity
     */
    public $orderedQuantity = null;

    /**
     * When true, we will accept backorder confirmations for this item.
     *
     * @var bool
     */
    public $isBackOrderAllowed = null;

    /**
     * The price to Amazon each (cost).
     *
     * @var \Amz\VendorOrders\Model\Money
     */
    public $netCost = null;

    /**
     * The price to Amazon each (list).
     *
     * @var \Amz\VendorOrders\Model\Money
     */
    public $listPrice = null;
}
