<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function testOnline()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

//    /** @test */
//    public function testOnline()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }
//
//    /** @test */
//    public function testOnline()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }

}
