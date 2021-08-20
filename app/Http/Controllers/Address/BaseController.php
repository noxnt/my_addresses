<?php

namespace App\Http\Controllers\Address;

use App\Http\Controllers\Controller;
use App\Services\Address\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
