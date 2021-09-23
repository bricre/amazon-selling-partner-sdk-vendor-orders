<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitAcknowledgement operation.
 */
class SubmitAcknowledgementResponse extends AbstractModel
{
    /**
     * The payload for the submitAcknowledgement operation.
     *
     * @var \Amz\VendorOrders\Model\TransactionId
     */
    public $payload = null;

    /**
     * @var \Amz\VendorOrders\Model\ErrorList
     */
    public $errors = null;
}
