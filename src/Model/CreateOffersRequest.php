<?php

namespace Ebay\Sell\Negotiation\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type contains the fields needed to create an offer to a buyer that
 * is initiated by the seller.
 */
class CreateOffersRequest extends AbstractModel
{
    /**
     * If set to true, the buyer is allowed to make a counter-offer to the seller's
     * offer. Note: Currently, you must set this field to false; counter-offers are not
     * supported in this release. Default: false.
     *
     * @var bool
     */
    public $allowCounterOffer = null;

    /**
     * A seller-defined message related to the offer being made. This message is sent
     * to the list of &quot;interested&quot; buyers. To increase the conversion rate of
     * the offers a seller makes to buyers, eBay recommends you always add a customized
     * message to your offers. Maximum length: 2,000 characters.
     *
     * @var string
     */
    public $message = null;

    /**
     * The length of time the offer is valid from when it is created. The duration of
     * the offer begins at the date and time denoted by creationDate. When the span of
     * time specified by offerDuration passes beyond the creationDate, the offer
     * expires. Note: offerDuration currently defaults to 2 days and you cannot set it
     * to any other value (if specified, the unit and value fields in TimeDuration must
     * be set to DAY and 2, respectively). Default: 2 Days.
     *
     * @var \Ebay\Sell\Negotiation\Model\TimeDuration
     */
    public $offerDuration = null;

    /**
     * An array of objects where each object contains the details of an offer and the
     * ID of the listing on which the offer is being made. Note that the service does
     * not currently support the creation of multiple offers with a single call to
     * sendOfferToInterestedBuyer. With this, each request can target only one listing
     * at a time and you must populate this array with a single element that contains
     * the details of one offer.
     *
     * @var \Ebay\Sell\Negotiation\Model\OfferedItem[]
     */
    public $offeredItems = null;
}
