<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddressTest extends TestCase
{
    use RefreshDatabase;

    // Model
    public function setUp(): void
    {
        parent::setUp();
        $this->seed(['DatabaseSeeder', 'AddressSeeder']);
    }

    // Status
    public function testStatusIndex()
    {
        $response = $this->get('/addresses');
        $response->assertStatus(200);
    }

    public function testStatusEdit()
    {
        $response = $this->get('/addresses/1/edit');
        $response->assertStatus(200);
    }

    // WEB
    public function testIndex()
    {
        $response = $this->get('/addresses');
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $response = $this->post('/addresses', [
            'name' => 'Test address',
            'area_id' => 1,
            'city_id' => 1,
            'house' => '1',
            'street' => 'Test',
            'info' => 'test',
        ]);

        $response->assertStatus(302);
    }

    public function testCreateRequired()
    {
        $response = $this->post('/addresses', [
            'name' => 'Test address 2',
            'area_id' => 1,
            'city_id' => 1,
        ]);

        $response->assertStatus(302);
    }

    public function testUpdate()
    {
        $response = $this->patch('/addresses/1', [
            'name' => 'Updated name',
        ]);

        $response->assertStatus(302);
    }

    public function testDestroy()
    {
        $response = $this->delete('/addresses/1');
        $response->assertStatus(302);
    }
}
