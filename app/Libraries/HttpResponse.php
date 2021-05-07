<?php

namespace App\Libraries;

class HttpResponse
{
    private $headers;
    private $body;
    private $statusCode;

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function body()
    {
        return $this->body;
    }

    public function headers()
    {
        return $this->headers;
    }

    public function status()
    {
        return $this->statusCode;
    }

    public function ok()
    {
        return !is_null($this->statusCode) && $this->statusCode >= 200 && $this->statusCode < 300;
    }

    public function failed()
    {
        return !is_null($this->statusCode) && $this->statusCode >= 400;
    }

    public function json()
    {
        return json_decode($this->body);
    }
}
