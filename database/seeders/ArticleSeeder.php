<?php

namespace Database\Seeders;

use App\Models\Blogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blogs::create([
            'title' => 'How to Learn Laravel',
            'slug' => 'How-to-Learn-Laravel',
            'category' => 'Programming',
            'image' => 'learn-laravel.jpg',
            'body' => 'This article explains how to learn Laravel step by step...',
        ]);

        Blogs::create([
            'title' => 'Mastering PHP',
            'slug' => 'Mastering-PHP',
            'category' => 'Programming',
            'image' => 'master-php.jpg',
            'body' => 'PHP is a popular scripting language. Here’s how to master it...',
        ]);
    }
}
