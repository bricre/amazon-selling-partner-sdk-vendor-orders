<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Current status of a purchase order.
 */
class OrderStatus extends AbstractModel
{
    /**
     * The buyer's purchase order number for this order. Formatting Notes: 8-character
     * alpha-numeric code.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * The status of the buyer's purchase order for this order.
     *
     * @var string
     */
    public $purchaseOrderStatus = null;

    /**
     * The date the purchase order was placed. Must be in ISO-8601 date/time format.
     *
     * @var string
     */
    public $purchaseOrderDate = null;

    /**
     * The date when the purchase order was last updated. Must be in ISO-8601 date/time
     * format.
     *
     * @var string
     */
    public $lastUpdatedDate = null;

    /**
     * Name/Address and tax details of the selling party.
     *
     * @var \Amz\VendorOrders\Model\PartyIdentification
     */
    public $sellingParty = null;

    /**
     * Name/Address and tax details of the ship to party.
     *
     * @var \Amz\VendorOrders\Model\PartyIdentification
     */
    public $shipToParty = null;

    /**
     * Detailed order status.
     *
     * @var \Amz\VendorOrders\Model\ItemStatus
     */
    public $itemStatus = null;
}
