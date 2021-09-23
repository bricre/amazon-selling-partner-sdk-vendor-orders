<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of item quantity ordered.
 */
class AcknowledgementStatusDetails extends AbstractModel
{
    /**
     * The date when the line item was confirmed by vendor. Must be in ISO-8601
     * date/time format.
     *
     * @var string
     */
    public $acknowledgementDate = null;

    /**
     * Item quantity accepted by vendor to be shipped.
     *
     * @var \Amz\VendorOrders\Model\ItemQuantity
     */
    public $acceptedQuantity = null;

    /**
     * Item quantity rejected by vendor.
     *
     * @var \Amz\VendorOrders\Model\ItemQuantity
     */
    public $rejectedQuantity = null;
}
