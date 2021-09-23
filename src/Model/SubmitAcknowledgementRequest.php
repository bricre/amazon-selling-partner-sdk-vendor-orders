<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the submitAcknowledgment operation.
 */
class SubmitAcknowledgementRequest extends AbstractModel
{
    /**
     * @var \Amz\VendorOrders\Model\OrderAcknowledgement[]
     */
    public $acknowledgements = null;
}
