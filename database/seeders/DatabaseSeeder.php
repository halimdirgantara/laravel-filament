<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        $users = User::factory(5)->create();

        $users->each(function ($user) {
            $user->assignRole(Role::inRandomOrder()->first()->name);
        });

        Category::factory(12)->create();
        Tag::factory(10)->create();

        $posts = Post::factory(100)->create();
        $posts->each(function ($post) {
            $post->tags()->attach(Tag::inRandomOrder()->first()->id);
        });
    }
}
