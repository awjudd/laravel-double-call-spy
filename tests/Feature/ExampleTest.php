<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertNotNull(DB::spy(), 'first time - returns the spy');

        $this->assertNotNull(DB::spy(), 'second time - returns null');
    }
}
