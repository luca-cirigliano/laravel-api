<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $post = new Project();
            $post->title = $faker->sentence(3);
            $post->slug = Str::slug($post->title, '-');
            $post->content = $faker->paragraphs(asText: true); 
            $post->cover_image = $faker->imageUrl(category: 'Posts', format: 'jpg');
            $post->save();
        }
    }
}
