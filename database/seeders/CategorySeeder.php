<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => 'Full Stack Programming',
            'slug' => 'full-stack-programming'
        ]);

        Category::create([
            'name' => 'Back End Programming',
            'slug' => 'back-end-programming'
        ]);

        Category::create([
            'name' => 'Front End Programming',
            'slug' => 'front-end-programming'
        ]);

        Category::create([
            'name' => 'UI UX Design',
            'slug' => 'ui-ux-design'
        ]);

        Category::create([
            'name' => 'Dev Ops',
            'slug' => 'dev-ops'
        ]);
    }
}
