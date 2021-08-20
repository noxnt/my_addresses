<?php

namespace Tests\Feature;

use Tests\TestCase;

class AddressTest extends TestCase
{
    public function testRedirectToIndex()
    {
        $response = $this->get('/');
        $response->assertStatus(302)->assertRedirect('addresses');
    }
}
