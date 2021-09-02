<?php

namespace Ebay\Sell\Negotiation\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that defines the offer being made to an &quot;interested&quot;
 * buyer.
 */
class OfferedItem extends AbstractModel
{
    /**
     * This value denotes the percentage that the listing in the offer will be
     * discounted from its original listed price. The seller can specify either the
     * exact price of the discounted items with the price field or they can use this
     * field to specify the percentage that the listing will be discounted, but not
     * both. Minimum: 5 Required if you do not specify a price value.
     *
     * @var string
     */
    public $discountPercentage = null;

    /**
     * This value is a unique eBay-assigned ID that identifies the listing to which the
     * offer pertains. A listingId value is generated by eBay when you list an item
     * with the Trading API.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * This value denotes the final discounted price of the listing in the offer being
     * made to the buyer. This value must be lower than the original price of the item
     * as stated in the original listing. The seller can use either this field to
     * specify the exact discounted price of the listing or they can use the
     * discountPercentage field to specify the percentage that the listing will be
     * discounted, but not both. Required if you do not specify a discountPercentage
     * value.
     *
     * @var \Ebay\Sell\Negotiation\Model\Amount
     */
    public $price = null;

    /**
     * This integer value indicates the number of items in the eBay listing for which
     * the offer is being made. The offer being made by the seller is an &quot;all or
     * nothing&quot; offer, meaning the buyer must purchase the indicated quantity of
     * items in order to receive the discount on the transaction. Default: 1.
     *
     * @var int
     */
    public $quantity = null;
}
