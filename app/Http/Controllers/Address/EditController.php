<?php

namespace App\Http\Controllers\Address;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Area;
use App\Models\City;

class EditController extends Controller
{
    public function __invoke(Address $address)
    {
        $addresses = Address::all()->sortBy('name');
        $areas = Area::all();
        $cities = City::all();

        return view('address.edit', compact(['address', 'addresses', 'areas', 'cities']));
    }
}
