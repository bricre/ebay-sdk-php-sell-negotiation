<?php

namespace Ebay\Sell\Negotiation\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that defines an offer that a seller makes to eligible buyers.
 */
class Offer extends AbstractModel
{
    /**
     * If set to true, the buyer is allowed to make a counter-offer to the seller's
     * offer.
     *
     * @var bool
     */
    public $allowCounterOffer = null;

    /**
     * The buyer who has been sent the offer.
     *
     * @var \Ebay\Sell\Negotiation\Model\User
     */
    public $buyer = null;

    /**
     * The date and time when the seller's offer was created. The returned timestamp is
     * formatted as an ISO 8601 string, which is based on the 24-hour Coordinated
     * Universal Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z
     * Example: 2018-08-20T07:09:00.000Z.
     *
     * @var string
     */
    public $creationDate = null;

    /**
     * The eBay UserName of the user (seller) who initiated the offer.
     *
     * @var string
     */
    public $initiatedBy = null;

    /**
     * The date and time when the offer was last modified. The returned timestamp is
     * formatted as an ISO 8601 string.
     *
     * @var string
     */
    public $lastModifiedDate = null;

    /**
     * A seller-defined message related to the offer being made. This message is sent
     * to the list of &quot;interested&quot; buyers along with the offer message from
     * eBay.
     *
     * @var string
     */
    public $message = null;

    /**
     * The length of time that the offer is valid. The duration of the offer begins at
     * the date and time denoted by creationDate. When the span of time specified by
     * offerDuration passes beyond the creationDate, the offer expires.
     *
     * @var \Ebay\Sell\Negotiation\Model\TimeDuration
     */
    public $offerDuration = null;

    /**
     * The list of items associated with the offer. Currently, the offer list is
     * restricted to a single offer.
     *
     * @var \Ebay\Sell\Negotiation\Model\OfferedItem[]
     */
    public $offeredItems = null;

    /**
     * A unique eBay-assigned identifier for the offer.
     *
     * @var string
     */
    public $offerId = null;

    /**
     * The current state, or status, of an offer. Status states include PENDING,
     * COUNTERED, ACCEPTED, and DECLINED. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/negotiation/types/api:OfferStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $offerStatus = null;

    /**
     * The type of offer being made. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/negotiation/types/api:OfferTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $offerType = null;

    /**
     * A unique, eBay-assigned ID for the revision of the offer.
     *
     * @var string
     */
    public $revision = null;
}
