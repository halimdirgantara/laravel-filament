<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->word();
        
        // Generate random image and save to storage
        $imageUrl = 'https://picsum.photos/640/480';
        $imageContents = file_get_contents($imageUrl);
        $imageName = 'category_image/' . $name . '.jpg';
        
        // Store the image
        Storage::disk('public')->put($imageName, $imageContents);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->sentence(),
            'image' => $imageName, // Save the path instead of URL
        ];
    }
}
