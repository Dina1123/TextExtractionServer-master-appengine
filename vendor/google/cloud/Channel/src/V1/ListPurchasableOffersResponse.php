<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListPurchasableOffers.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListPurchasableOffersResponse</code>
 */
class ListPurchasableOffersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of Offers requested.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PurchasableOffer purchasable_offers = 1;</code>
     */
    private $purchasable_offers;
    /**
     * A token to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Channel\V1\PurchasableOffer>|\Google\Protobuf\Internal\RepeatedField $purchasable_offers
     *           The list of Offers requested.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of Offers requested.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PurchasableOffer purchasable_offers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPurchasableOffers()
    {
        return $this->purchasable_offers;
    }

    /**
     * The list of Offers requested.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PurchasableOffer purchasable_offers = 1;</code>
     * @param array<\Google\Cloud\Channel\V1\PurchasableOffer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPurchasableOffers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\PurchasableOffer::class);
        $this->purchasable_offers = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

