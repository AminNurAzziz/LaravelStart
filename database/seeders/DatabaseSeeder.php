<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'user',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        Categories::create([
            'name' => 'Pemrogrgaman Web',
            'category_id' => '1', // 'category_id' => '1' should be 'category_id' => '0
            'slug' => 'Post1'
        ]);

        Categories::create([
            'name' => 'Pemrograman Mobile',
            'category_id' => '2', // 'category_id' => '2' should be 'category_id' => '0
            'slug' => 'Pos2'
        ]);

        Categories::create([
            'name' => 'Pemrograman Desktop',
            'category_id' => '3', // 'category_id' => '3' should be 'category_id' => '0
            'slug' => 'Post3'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas laborum impedit eligendi animi qui. Voluptatum voluptatibus quia magnam inventore et maxime vitae! Officia, sint, sunt quidem fuga praesentium officiis esse atque et sapiente quasi impedit provident illum nobis voluptatibus voluptates at accusantium odit corporis perferendis dolorem quo. At eaque excepturi nostrum veritatis nobis sunt accusamus, optio iusto unde animi placeat quia quisquam, ullam qui possimus fuga, quo commodi voluptatibus ducimus maiores a. Iure ea quasi nam et autem, expedita numquam totam accusamus mollitia maiores tempore eaque sequi assumenda. Earum quam distinctio voluptate vero qui a eos eius vel inventore nemo, rem illo ut tenetur! Corporis velit labore ullam aspernatur assumenda eveniet ab sint ducimus porro modi ex incidunt officia odit magni nesciunt earum id nisi aliquam debitis, consequuntur voluptas! Maiores molestias consequuntur aliquid eveniet! Suscipit commodi quam saepe beatae earum animi distinctio esse quo qui, nostrum obcaecati sit minus. Cumque, fugiat aliquam. Laudantium labore deserunt porro dolorum, sequi soluta? Cum totam nemo molestiae quos dignissimos minima eum accusantium. Sunt a praesentium deserunt illo omnis magnam possimus similique, distinctio odit corporis earum placeat accusamus beatae sequi labore sit, asperiores ullam aliquid suscipit natus odio debitis. Vero quae eaque ipsa. Est, quos?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas laborum impedit eligendi animi qui. Voluptatum voluptatibus quia magnam inventore et maxime vitae! Officia, sint, sunt quidem fuga praesentium officiis esse atque et sapiente quasi impedit provident illum nobis voluptatibus voluptates at accusantium odit corporis perferendis dolorem quo. At eaque excepturi nostrum veritatis nobis sunt accusamus, optio iusto unde animi placeat quia quisquam, ullam qui possimus fuga, quo commodi voluptatibus ducimus maiores a. Iure ea quasi nam et autem, expedita numquam totam accusamus mollitia maiores tempore eaque sequi assumenda. Earum quam distinctio voluptate vero qui a eos eius vel inventore nemo, rem illo ut tenetur! Corporis velit labore ullam aspernatur assumenda eveniet ab sint ducimus porro modi ex incidunt officia odit magni nesciunt earum id nisi aliquam debitis, consequuntur voluptas! Maiores molestias consequuntur aliquid eveniet! Suscipit commodi quam saepe beatae earum animi distinctio esse quo qui, nostrum obcaecati sit minus. Cumque, fugiat aliquam. Laudantium labore deserunt porro dolorum, sequi soluta? Cum totam nemo molestiae quos dignissimos minima eum accusantium. Sunt a praesentium deserunt illo omnis magnam possimus similique, distinctio odit corporis earum placeat accusamus beatae sequi labore sit, asperiores ullam aliquid suscipit natus odio debitis. Vero quae eaque ipsa. Est, quos?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas laborum impedit eligendi animi qui. Voluptatum voluptatibus quia magnam inventore et maxime vitae! Officia, sint, sunt quidem fuga praesentium officiis esse atque et sapiente quasi impedit provident illum nobis voluptatibus voluptates at accusantium odit corporis perferendis dolorem quo. At eaque excepturi nostrum veritatis nobis sunt accusamus, optio iusto unde animi placeat quia quisquam, ullam qui possimus fuga, quo commodi voluptatibus ducimus maiores a. Iure ea quasi nam et autem, expedita numquam totam accusamus mollitia maiores tempore eaque sequi assumenda. Earum quam distinctio voluptate vero qui a eos eius vel inventore nemo, rem illo ut tenetur! Corporis velit labore ullam aspernatur assumenda eveniet ab sint ducimus porro modi ex incidunt officia odit magni nesciunt earum id nisi aliquam debitis, consequuntur voluptas! Maiores molestias consequuntur aliquid eveniet! Suscipit commodi quam saepe beatae earum animi distinctio esse quo qui, nostrum obcaecati sit minus. Cumque, fugiat aliquam. Laudantium labore deserunt porro dolorum, sequi soluta? Cum totam nemo molestiae quos dignissimos minima eum accusantium. Sunt a praesentium deserunt illo omnis magnam possimus similique, distinctio odit corporis earum placeat accusamus beatae sequi labore sit, asperiores ullam aliquid suscipit natus odio debitis. Vero quae eaque ipsa. Est, quos?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
