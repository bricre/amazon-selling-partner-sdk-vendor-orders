<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderListStatus extends AbstractModel
{
    /**
     * @var \Amz\VendorOrders\Model\Pagination
     */
    public $pagination = null;

    /**
     * @var \Amz\VendorOrders\Model\OrderStatus[]
     */
    public $ordersStatus = null;
}
