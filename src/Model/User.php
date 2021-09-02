<?php

namespace Ebay\Sell\Negotiation\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type identifies an eBay user.
 */
class User extends AbstractModel
{
    /**
     * The masked user name is a user name that has certain characters hidden for
     * privacy of the user.
     *
     * @var string
     */
    public $maskedUsername = null;
}
