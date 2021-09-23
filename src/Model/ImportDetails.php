<?php

namespace Amz\VendorOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Import details for an import order.
 */
class ImportDetails extends AbstractModel
{
    /**
     * If the recipient requests, contains the shipment method of payment. This is for
     * import PO's only.
     *
     * @var string
     */
    public $methodOfPayment = null;

    /**
     * Incoterms (International Commercial Terms) are used to divide transaction costs
     * and responsibilities between buyer and seller and reflect state-of-the-art
     * transportation practices. This is for import purchase orders only.
     *
     * @var string
     */
    public $internationalCommercialTerms = null;

    /**
     * The port where goods on an import purchase order must be delivered by the
     * vendor. This should only be specified when the internationalCommercialTerms is
     * FOB.
     *
     * @var string
     */
    public $portOfDelivery = null;

    /**
     * Types and numbers of container(s) for import purchase orders. Can be a
     * comma-separated list if the shipment has multiple containers. HC signifies a
     * high-capacity container. Free-text field, limited to 64 characters. The format
     * will be a comma-delimited list containing values of the type:
     * $NUMBER_OF_CONTAINERS_OF_THIS_TYPE-$CONTAINER_TYPE. The list of values for the
     * container type is: 40'(40-foot container), 40'HC (40-foot high-capacity
     * container), 45', 45'HC, 30', 30'HC, 20', 20'HC.
     *
     * @var string
     */
    public $importContainers = null;

    /**
     * Special instructions regarding the shipment. This field is for import purchase
     * orders.
     *
     * @var string
     */
    public $shippingInstructions = null;
}
