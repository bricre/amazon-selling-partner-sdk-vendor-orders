<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderItemAcknowledgement extends AbstractModel
{
    /**
     * This indicates the acknowledgement code.
     *
     * @var string
     */
    public $acknowledgementCode = null;

    /**
     * Details of quantity acknowledged with the above acknowledgement code.
     *
     * @var \Amz\VendorOrders\Model\ItemQuantity
     */
    public $acknowledgedQuantity = null;

    /**
     * Estimated ship date per line item. Must be in ISO-8601 date/time format.
     *
     * @var string
     */
    public $scheduledShipDate = null;

    /**
     * Estimated delivery date per line item. Must be in ISO-8601 date/time format.
     *
     * @var string
     */
    public $scheduledDeliveryDate = null;

    /**
     * Indicates the reason for rejection.
     *
     * @var string
     */
    public $rejectionReason = null;
}
