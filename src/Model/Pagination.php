<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Pagination extends AbstractModel
{
    /**
     * A generated string used to pass information to your next request. If NextToken
     * is returned, pass the value of NextToken to the next request. If NextToken is
     * not returned, there are no more purchase order items to return.
     *
     * @var string
     */
    public $nextToken = null;
}
