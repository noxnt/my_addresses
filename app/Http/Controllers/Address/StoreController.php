<?php

namespace App\Http\Controllers\Address;

use App\Http\Requests\Address\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('addresses.index')->with('message', 'Address created successfully!');
    }
}
