<?php

namespace Spatie\Sitesearch;

class Content
{
    /** @var string */
    public $title = '';

    /** @var string */
    public $body;
    private $text;

    public function __construct($title, $text)
    {
        $this->title = $title;

        $this->text = $text;
    }

}
