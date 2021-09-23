<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of item quantity ordered.
 */
class OrderedQuantityDetails extends AbstractModel
{
    /**
     * The date when the line item quantity was updated by buyer. Must be in ISO-8601
     * date/time format.
     *
     * @var string
     */
    public $updatedDate = null;

    /**
     * Item quantity ordered.
     *
     * @var \Amz\VendorOrders\Model\ItemQuantity
     */
    public $orderedQuantity = null;

    /**
     * Item quantity ordered.
     *
     * @var \Amz\VendorOrders\Model\ItemQuantity
     */
    public $cancelledQuantity = null;
}
