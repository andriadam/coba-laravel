<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Andri Adam',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus repellendus, autem ad mollitia odit magni hic. Fugiat doloremque quidem laborum ipsa dignissimos facere perferendis, sit repellendus nihil eius velit ab!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Doddy ',
            'body' => 'Lorem 2 ipsum dolor sit, amet consectetur adipisicing elit. Possimus repellendus, autem ad mollitia odit magni hic. Fugiat doloremque quidem laborum ipsa dignissimos facere perferendis, sit repellendus nihil eius velit ab!'
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
