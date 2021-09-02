<?php

namespace Ebay\Sell\Negotiation;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'findEligibleItems' => [
            '200.' => 'Ebay\\Sell\\Negotiation\\Model\\PagedEligibleItemCollection',
        ],
        'sendOfferToInterestedBuyers' => [
            '200.' => 'Ebay\\Sell\\Negotiation\\Model\\SendOfferToInterestedBuyersCollectionResponse',
        ],
    ];
}
