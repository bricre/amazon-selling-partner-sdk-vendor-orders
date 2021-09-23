<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PartyIdentification extends AbstractModel
{
    /**
     * Assigned identification for the party. For example, warehouse code or vendor
     * code. Please refer to specific party for more details.
     *
     * @var string
     */
    public $partyId = null;

    /**
     * Identification of the party by address.
     *
     * @var \Amz\VendorOrders\Model\Address
     */
    public $address = null;

    /**
     * Tax registration details of the party.
     *
     * @var \Amz\VendorOrders\Model\TaxRegistrationDetails
     */
    public $taxInfo = null;
}
