<?php

namespace Spatie\Sitesearch;

interface Indexer
{
    public function index(Content $content);
}