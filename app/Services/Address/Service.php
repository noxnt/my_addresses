<?php

namespace App\Services\Address;

use App\Models\Address;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Service
{
    public function store($data)
    {
        try {
            Db::beginTransaction();
            $address = Address::create($data);
            $this->loggingSuccess($address, 'creating');
            Db::commit();
        } catch (\Exception $exception) {
            Db::rollBack();
            $this->loggingFailed($exception, 'create');
            return $exception->getMessage();
        }
        return $address;
    }

    public function update($address, $data)
    {
        try {
            Db::beginTransaction();
            $address->update($data);
            $this->loggingSuccess($address, 'updating');
            Db::commit();
        } catch (\Exception $exception) {
            Db::rollBack();
            $this->loggingFailed($exception, 'update');
            return $exception->getMessage();
        }
        return $address->fresh();
    }

    public function destroy($address)
    {
        try {
            Db::beginTransaction();
            $deleted = $address;
            $address->delete();
            $this->loggingSuccess($address, 'deletion');
            Db::commit();
        } catch (\Exception $exception) {
            Db::rollBack();
            $this->loggingFailed($exception, 'delete');
            return $exception->getMessage();
        }
        return $deleted;
    }

    // Logs
    private function loggingSuccess($address, $action)
    {
        Log::channel('debuginfo')->info("Successful $action - address", [
            'id' => $address->id,
            'name' => $address->name,
            'area' => ['id' => $address->area->id, 'name' => $address->area->name],
            'city' => ['id' => $address->city->id, 'name' => $address->city->name],
            'street' => $address->street,
            'house' => $address->house,
            'info' => $address->info,
        ]);
    }

    private function loggingFailed($exception, $action)
    {
        Log::channel('debuginfo')->error("Failed to $action - address", [
            'error' => $exception->getMessage(),
        ]);
    }
}
