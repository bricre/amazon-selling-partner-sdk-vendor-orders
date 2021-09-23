<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Tax registration details of the entity.
 */
class TaxRegistrationDetails extends AbstractModel
{
    /**
     * Tax registration type for the entity.
     *
     * @var string
     */
    public $taxRegistrationType = null;

    /**
     * Tax registration number for the entity. For example, VAT ID.
     *
     * @var string
     */
    public $taxRegistrationNumber = null;
}
