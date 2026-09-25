<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that the home page redirects to the task list.
     */
    public function test_the_application_redirects_to_tasks(): void
    {
        $response = $this->get('/');

        $response->assertRedirect(route('tasks.index'));
    }
}