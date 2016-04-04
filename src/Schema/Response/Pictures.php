<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

class Pictures {
    /**
    * @Type("array<MssPhp\Schema\Response\Picture>")
    * @XmlList(inline = true, entry = "picture")
     */
    public $picture;
}