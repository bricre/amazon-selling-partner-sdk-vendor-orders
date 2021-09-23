<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of the item being acknowledged.
 */
class OrderAcknowledgementItem extends AbstractModel
{
    /**
     * Line item sequence number for the item.
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
     * The vendor selected product identification of the item. Should be the same as
     * was sent in the purchase order.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * The quantity of this item ordered.
     *
     * @var \Amz\VendorOrders\Model\ItemQuantity
     */
    public $orderedQuantity = null;

    /**
     * The cost to Amazon, which should match the cost on the invoice. This is a
     * required field. If this is left blank the file will reject in Amazon systems.
     * Price information should not be zero or negative. Indicates a net unit price.
     *
     * @var \Amz\VendorOrders\Model\Money
     */
    public $netCost = null;

    /**
     * The list price. This is required only if a vendor sells books with a list price.
     *
     * @var \Amz\VendorOrders\Model\Money
     */
    public $listPrice = null;

    /**
     * The discount multiplier that should be applied to the price if a vendor sells
     * books with a list price. This is a multiplier factor to arrive at a final
     * discounted price. A multiplier of .90 would be the factor if a 10% discount is
     * given.
     *
     * @var string
     */
    public $discountMultiplier = null;

    /**
     * This is used to indicate acknowledged quantity.
     *
     * @var \Amz\VendorOrders\Model\OrderItemAcknowledgement[]
     */
    public $itemAcknowledgements = null;
}
