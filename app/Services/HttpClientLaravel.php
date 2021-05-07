<?php

namespace App\Services;

use App\Contracts\HttpClientContract;
use Illuminate\Support\Facades\Http;
use App\Libraries\HttpResponse;

class HttpClientLaravel implements HttpClientContract
{
    private $httpResponse;

    public function __construct(HttpResponse $httpResponse)
    {
        $this->httpResponse = $httpResponse;
    }

    public function get(string $url, array $params = null): HttpResponse
    {
        $response = Http::get($url, $params);

        $this->httpResponse
                ->setHeaders($response->headers())
                ->setBody($response->body())
                ->setStatusCode($response->status());

        return $this->httpResponse;
    }
}
