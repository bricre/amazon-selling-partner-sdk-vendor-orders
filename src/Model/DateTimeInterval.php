<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Defines a date time interval according to ISO8601. Interval is separated by
 * double hyphen (--).
 */
class DateTimeInterval extends AbstractModel
{
    protected $isRawObject = true;
}
