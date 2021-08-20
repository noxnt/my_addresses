<?php

namespace App\Http\Controllers\Address;

use App\Http\Requests\Address\UpdateRequest;
use App\Models\Address;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Address $address)
    {
        $data = $request->validated();

        $this->service->update($address, $data);

        return redirect()->route('addresses.index')
            ->with('message', "Address \"{$address->name}\" has been successfully updated!");
    }
}
