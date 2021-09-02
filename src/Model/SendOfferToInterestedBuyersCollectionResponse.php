<?php

namespace Ebay\Sell\Negotiation\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response object returned from a SendOfferToInterestedBuyers request.
 */
class SendOfferToInterestedBuyersCollectionResponse extends AbstractModel
{
    /**
     * The offers container returns a list of the offers sent to buyers who have shown
     * an interest in listings included in the offer.
     *
     * @var \Ebay\Sell\Negotiation\Model\Offer[]
     */
    public $offers = null;
}
