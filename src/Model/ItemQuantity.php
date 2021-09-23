<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of quantity ordered.
 */
class ItemQuantity extends AbstractModel
{
    /**
     * Acknowledged quantity. This value should not be zero.
     *
     * @var int
     */
    public $amount = null;

    /**
     * Unit of measure for the acknowledged quantity.
     *
     * @var string
     */
    public $unitOfMeasure = null;

    /**
     * The case size, in the event that we ordered using cases.
     *
     * @var int
     */
    public $unitSize = null;
}
