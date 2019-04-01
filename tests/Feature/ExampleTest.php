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

        $response = $this->get(route('stories.index'));

        $response->assertStatus(200);

        $response = $this->get(route('stories.create'));

        $response->assertStatus(200);

    }

    /** @test */
    public function testVisitorCanCreateStories()
    {
        $response=$this->followingRedirects()->post(route('stories.store'), ['author'=>'author','title'=>'Testing-title','body'=>'Testing-body']);
        $response->assertSee('Testing-title')
                ->assertSee('Testing-body')
                ->assertStatus(200);
    }


}
