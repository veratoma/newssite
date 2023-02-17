<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndexSuccessStatus(): void
    {
        $response = $this->get(route(name: 'admin.categories.index'));

        $response->assertStatus(200);
    }


    public function testCreateSuccessStatus(): void
    {
        $response = $this->get(route(name: 'admin.categories.create'));

        $response->assertStatus(200);
    }


    public function testCreateSaveSuccessDate(): void

    {
        $data = [
            'title' => \fake()->jobTitle(),
            'description' => \fake()->text(100),
        ];
        $response = $this->post(route(name: 'admin.categories.store'), $data);

        $response->assertStatus(200)->json($data);
    }


    public function testValidateTitleData(): void

    {

        $data = [

            'description' => \fake()->text(100),
        ];
        $response = $this->post(route(name: 'admin.categories.store'), $data);

        $response->assertRedirect(url: 'http://localgost');
    }
}
