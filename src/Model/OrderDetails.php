<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of an order.
 */
class OrderDetails extends AbstractModel
{
    /**
     * The date the purchase order was placed. Must be in ISO-8601 date/time format.
     *
     * @var string
     */
    public $purchaseOrderDate = null;

    /**
     * The date when purchase order was last changed by Amazon after the order was
     * placed. This date will be greater than 'purchaseOrderDate'. This means the PO
     * data was changed on that date and vendors are required to fulfill the  updated
     * PO. The PO changes can be related to Item Quantity, Ship to Location, Ship
     * Window etc. This field will not be present in orders that have not changed after
     * creation. Must be in ISO-8601 date/time format.
     *
     * @var string
     */
    public $purchaseOrderChangedDate = null;

    /**
     * The date when current purchase order state was changed. Current purchase order
     * state is available in the field 'purchaseOrderState'. Must be in ISO-8601
     * date/time format.
     *
     * @var string
     */
    public $purchaseOrderStateChangedDate = null;

    /**
     * Type of purchase order.
     *
     * @var string
     */
    public $purchaseOrderType = null;

    /**
     * If the purchase order is an import order, the details for the import order.
     *
     * @var \Amz\VendorOrders\Model\ImportDetails
     */
    public $importDetails = null;

    /**
     * If requested by the recipient, this field will contain a promotional/deal
     * number. The discount code line is optional. It is used to obtain a price
     * discount on items on the order.
     *
     * @var string
     */
    public $dealCode = null;

    /**
     * Payment method used.
     *
     * @var string
     */
    public $paymentMethod = null;

    /**
     * Name/Address and tax details of the buying party.
     *
     * @var \Amz\VendorOrders\Model\PartyIdentification
     */
    public $buyingParty = null;

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
     * Name/Address and tax details of the bill to party.
     *
     * @var \Amz\VendorOrders\Model\PartyIdentification
     */
    public $billToParty = null;

    /**
     * This indicates the ship window. Format is start and end date separated by double
     * hyphen (--). For example, 2007-03-01T13:00:00Z--2007-03-11T15:30:00Z.
     *
     * @var \Amz\VendorOrders\Model\DateTimeInterval
     */
    public $shipWindow = null;

    /**
     * This indicates the delivery window. Format is start and end date separated by
     * double hyphen (--). For example, 2007-03-01T13:00:00Z--2007-03-11T15:30:00Z.
     *
     * @var \Amz\VendorOrders\Model\DateTimeInterval
     */
    public $deliveryWindow = null;

    /**
     * A list of items in this purchase order.
     *
     * @var \Amz\VendorOrders\Model\OrderItem[]
     */
    public $items = null;
}
