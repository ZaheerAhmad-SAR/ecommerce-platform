<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductCreationTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function a_product_can_be_created()
    {
        $response = $this->post('/products', [
            'name' => 'Test Product',
            'category_id' => 1, // Replace with actual category ID
        ]);

        $response->assertRedirect('/products'); // Assuming the redirect path
        $this->assertDatabaseHas('products', ['name' => 'Test Product']);
    }


    /** @test */
    public function product_creation_requires_name_and_category()
    {
        $response = $this->post('/products', []);
        $response->assertSessionHasErrors(['name', 'category_id']);
    }




    /** @test */
    public function product_creation_requires_all_required_attributes()
    {
    // Assuming there are required attributes in the category
        $response = $this->post('/products', [
        'name' => 'Test Product',
            'category_id' => 1, // Replace with actual category ID
        // Missing required attributes
        ]);

        $response->assertSessionHasErrors(['attributes']);
    }
    
}
