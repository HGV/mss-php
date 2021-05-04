<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Offer
{
    /**
     * @Type("integer")
     */
    public $offer_id;

    /**
     * @Type("integer")
     */
    public $offer_gid;

    /**
     * @Type("integer")
     */
    public $offer_base_id;

    /**
     * @Type("integer")
     */
    public $offer_typ;

    /**
     * @Type("integer")
     */
    public $offer_show;

    /**
     * @Type("string")
     */
    public $offer_title;

    /**
     * @Type("string")
     */
    public $title;

    /**
     * @Type("string")
     */
    public $offer_description;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("array<MssPhp\Schema\Response\Picture>")
     * @XmlList(entry = "picture")
     */
    public $pictures;

    /**
     * @Type("array<MssPhp\Schema\Response\Theme>")
     * @XmlList(entry = "theme")
     */
    public $themes;
}
