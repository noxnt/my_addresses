<?php

namespace App\Http\Controllers\Address;


use App\Models\Address;

class DestroyController extends BaseController
{
    public function __invoke(Address $address)
    {
        $this->service->destroy($address);

        return redirect()->route('addresses.index')
            ->with('message', "Address \"{$address->name}\" was successfully deleted!");
    }
}
