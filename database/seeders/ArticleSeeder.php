<?php

namespace Database\Seeders;

use App\Models\Blogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $images = [
            'image1.jpg',
            'image2.jpg',
            'image3.jpg',
            // Tambahkan gambar yang ada di storage
        ];

        foreach (range(1, 20) as $index) {
            $body = $faker->paragraphs(rand(3, 5), true);

            DB::table('Blogs')->insert([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'body' => $body,
                'excerpt' => Str::limit(strip_tags($body), 90),
                'image' => 'post-images/' . $images[array_rand($images)], // Pilih gambar secara acak
                'category_id' => 1, // Pastikan ada kategori dengan ID ini
                'user_id' => 1, // Pastikan ada user dengan ID ini
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
