<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderList extends AbstractModel
{
    /**
     * @var \Amz\VendorOrders\Model\Pagination
     */
    public $pagination = null;

    /**
     * @var \Amz\VendorOrders\Model\Order[]
     */
    public $orders = null;
}
