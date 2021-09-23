<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderAcknowledgement extends AbstractModel
{
    /**
     * The purchase order number. Formatting Notes: 8-character alpha-numeric code.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * Name, address and tax details of the party receiving a shipment of products.
     *
     * @var \Amz\VendorOrders\Model\PartyIdentification
     */
    public $sellingParty = null;

    /**
     * The date and time when the purchase order is acknowledged, in ISO-8601 date/time
     * format.
     *
     * @var string
     */
    public $acknowledgementDate = null;

    /**
     * A list of the items being acknowledged with associated details.
     *
     * @var \Amz\VendorOrders\Model\OrderAcknowledgementItem[]
     */
    public $items = null;
}
