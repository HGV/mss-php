<?php

namespace MssPhp\Schema\Request;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class SearchHotel
{
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("array<integer>")
     * @XmlList(inline = true, entry = "type")
     */
    public $type;

    /**
     * @Type("MssPhp\Schema\Request\Stars")
     */
    public $stars;

    /**
     * @Type("integer")
     */
    public $feature;

    /**
     * @Type("integer")
     */
    public $theme;

    /**
     * @Type("integer")
     */
    public $room_type;
}
