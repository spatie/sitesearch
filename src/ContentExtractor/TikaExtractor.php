<?php

namespace Spatie\Sitesearch\ContentExtractor;

use GuzzleHttp\Client;
use Spatie\Sitesearch\Content;
use Symfony\Component\DomCrawler\Crawler;

class TikaExtractor implements ContentExtractor
{
    /** @var \GuzzleHttp\Client */
    protected $tika;

    /** @var \Symfony\Component\DomCrawler\Crawler */
    private $domCrawler;

    public function __construct(Client $tikaClient)
    {
        $this->tika = $tikaClient;
    }

    public function extractHtmlContent(string $rawBody): Content
    {
        $response = $this->tika->put('/', [
            'body' => $rawBody,
            'headers' => [
                'Accept' => 'text/html',
            ]
        ]);

        $responseString = (string)$response->getBody();

        $domCrawler = new Crawler($responseString);

        $title = $domCrawler->filter('head > title')->text();

        $body = $domCrawler->filter('body')->text();

        new Content($title, $body);
    }
}