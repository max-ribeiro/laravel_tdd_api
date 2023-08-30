<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function teste_get_todo_list()
    {
        $this->withoutExceptionHandling();
        TodoList::create(['name' => 'Max']);

        $response = $this->getJson('api/todo-list');
        $this->assertEquals(1, count($response->json()));
    }
}
