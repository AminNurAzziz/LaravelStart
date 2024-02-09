<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'James',
            'body' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis accusantium cum a recusandae iure consequatur! Explicabo, praesentium nam. Velit voluptatibus quas reiciendis, ipsa rerum dignissimos minus dolore impedit perspiciatis nam ab error cumque, blanditiis rem optio illum voluptatem facilis facere architecto labore aut nulla temporibus qui? Harum nisi ipsa cupiditate expedita neque facilis odit corrupti modi quidem, laboriosam, consequuntur excepturi quam sapiente, laudantium ea quo dignissimos sed. Est maiores accusantium esse aspernatur illo distinctio minus ipsam debitis corporis dolore deserunt nulla id dolorum reiciendis tempora voluptate adipisci pariatur eius, iusto inventore ad, ut quas accusamus nobis. Totam perferendis ratione et!'
        ],
        [
            'title' => 'Judul Post KeduaAA',
            'slug' => 'judul-post-kedua',
            'author' => 'James',
            'body' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate doloribus tempoum iusto.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
