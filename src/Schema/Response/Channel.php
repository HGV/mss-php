<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Channel {
    /**
     * @Type("integer")
     */
    public $channel_id;

    /**
     * @Type("MssPhp\Schema\Response\OfferDescription")
     */
    public $offer_description;

    /**
     * @Type("MssPhp\Schema\Response\RoomPrice")
     */
    public $room_price;

    /**
     * @Type("MssPhp\Schema\Response\RoomDescription")
     */
    public $room_description;

    /**
     * @Type("MssPhp\Schema\Response\ServicePrice")
     */
    public $service_price;
}