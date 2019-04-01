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

        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    /** @test */
    public function testVisitorCanCreateStories()
    {
        $this->post(route('stories/create'), ['author'=>'author','title'=>'title','body'=>'body']);
    }
//
//    /** @test */
//    public function testOnline()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }

}
