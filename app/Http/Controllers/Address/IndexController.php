<?php

namespace App\Http\Controllers\Address;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Area;
use App\Models\City;

class IndexController extends Controller
{
    public function __invoke()
    {
        $addresses = Address::all()->sortBy('name');
        $areas = Area::all();
        $cities = City::all();

        return view('address.index', compact(['addresses', 'areas', 'cities']));
    }
}
