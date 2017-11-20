<?php

namespace Spatie\Sitesearch\ContentExtractor;

use Spatie\Sitesearch\Content;

interface ContentExtractor
{
    public function extractHtmlContent(string $rawBody): Content;
}