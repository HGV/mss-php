<?php

namespace MssPhp\Schema\Response;

use JMS\Serializer\Annotation\Type;

class Source
{
    /**
     * @Type("integer")
     */
    public $src_id;

    /**
     * @Type("string")
     */
    public $sourcename;

    /**
     * @Type("string")
     */
    public $logkey;

    /**
     * @Type("string")
     */
    public $de;

    /**
     * @Type("string")
     */
    public $en;

    /**
     * @Type("string")
     */
    public $it;
}
