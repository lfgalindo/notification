<?php

namespace App\Contracts;

use App\Libraries\HttpResponse;

interface HttpClientContract
{
    public function get(string $url, array $params): HttpResponse;
}
