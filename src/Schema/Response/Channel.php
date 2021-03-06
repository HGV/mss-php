<?php

namespace MssPhp\Schema\Response;

use MssPhp\Utils;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\PostDeserialize;

class Channel
{
    /**
     * @Type("string")
     */
    public $channel_id;

    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("array<MssPhp\Schema\Response\Offer>")
     * @XmlList(entry = "offer")
     */
    public $offer_description;

    /**
     * @Type("array<MssPhp\Schema\Response\RoomPrice>")
     * @XmlList(entry = "price")
     */
    public $room_price;

    /**
     * @Type("array<MssPhp\Schema\Response\Room>")
     * @XmlList(entry = "room")
     */
    public $room_description;

    /**
     * @Type("array<MssPhp\Schema\Response\Price>")
     * @XmlList(entry = "price")
     */
    public $service_price;

    /**
     * @Type("integer")
     */
    public $from_price;

    /**
     * @Type("array<MssPhp\Schema\Response\RoomPrice>")
     * @XmlList(entry = "price")
     */
    public $base_price;

    /**
     * @Type("array<MssPhp\Schema\Response\CancelPolicy>")
     * @XmlList(entry = "cancel_policy")
     */
    public $cancel_policies;

    /**
     * @Type("array<MssPhp\Schema\Response\PaymentTerm>")
     * @XmlList(entry = "payment_term")
     */
    public $payment_terms;

    /**
     * @Type("MssPhp\Schema\Response\ChannelPriceList")
     */
    public $pricelist;

    /**
     * @PostDeserialize
     */
    public function postDeserialize()
    {
        Utils::setEmptyArraysToNull(
            [
                "base_price",
                "cancel_policies",
                "offer_description",
                "payment_terms",
                "room_description",
                "room_price",
                "service_price",
            ],
            $this
        );
    }
}
