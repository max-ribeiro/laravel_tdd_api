<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function teste_store_todo_list()
    {
        $response = $this->getJson('api/todo-list');
        $this->assertEquals(1, count($response->json()));
    }
}
