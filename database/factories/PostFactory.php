<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        // Generate random image and save to storage
        $imageUrl = 'https://picsum.photos/640/480';
        $imageContents = file_get_contents($imageUrl);
        $imageName = 'feature_image/' . $title . '.jpg';
        
        // Store the image
        Storage::disk('public')->put($imageName, $imageContents);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->paragraph(),
            'feature_image' => $imageName,
            'status' => 'published',
            'category_id' => Category::inRandomOrder()->first()->id,
            'created_by' => User::inRandomOrder()->first()->id,
        ];
    }
}
