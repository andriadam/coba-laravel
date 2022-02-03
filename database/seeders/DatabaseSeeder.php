<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Andri Adam',
            'username' => 'andriadam',
            'email' => 'andri@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur modi nam ipsam ducimus. Soluta, neque sunt? Eveniet, quisquam. Quibusdam libero mollitia quae perspiciatis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur modi nam ipsam ducimus. Soluta, neque sunt? Eveniet, quisquam. Quibusdam libero mollitia quae perspiciatis, distinctio sequi voluptatem laboriosam doloremque consectetur optio quas eum nam qui magni voluptate provident ipsam corrupti. Modi deleniti nulla possimus nam fuga inventore?</p><p> Atque laboriosam voluptate aspernatur perspiciatis molestiae inventore eum quos, neque, dolorem et asperiores, maiores labore ut vitae adipisci. Quia accusantium, impedit odio odit ea nulla praesentium accusamus commodi sunt quae nostrum assumenda voluptatum suscipit quibusdam nisi, eaque totam doloribus facere? Officia exercitationem asperiores necessitatibus maiores quam. Minus earum sunt similique accusantium voluptate, tenetur a?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur modi nam ipsam ducimus. Soluta, neque sunt? Eveniet, quisquam. Quibusdam libero mollitia quae perspiciatis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur modi nam ipsam ducimus. Soluta, neque sunt? Eveniet, quisquam. Quibusdam libero mollitia quae perspiciatis, distinctio sequi voluptatem laboriosam doloremque consectetur optio quas eum nam qui magni voluptate provident ipsam corrupti. Modi deleniti nulla possimus nam fuga inventore?</p><p> Atque laboriosam voluptate aspernatur perspiciatis molestiae inventore eum quos, neque, dolorem et asperiores, maiores labore ut vitae adipisci. Quia accusantium, impedit odio odit ea nulla praesentium accusamus commodi sunt quae nostrum assumenda voluptatum suscipit quibusdam nisi, eaque totam doloribus facere? Officia exercitationem asperiores necessitatibus maiores quam. Minus earum sunt similique accusantium voluptate, tenetur a?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur modi nam ipsam ducimus. Soluta, neque sunt? Eveniet, quisquam. Quibusdam libero mollitia quae perspiciatis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur modi nam ipsam ducimus. Soluta, neque sunt? Eveniet, quisquam. Quibusdam libero mollitia quae perspiciatis, distinctio sequi voluptatem laboriosam doloremque consectetur optio quas eum nam qui magni voluptate provident ipsam corrupti. Modi deleniti nulla possimus nam fuga inventore?</p><p> Atque laboriosam voluptate aspernatur perspiciatis molestiae inventore eum quos, neque, dolorem et asperiores, maiores labore ut vitae adipisci. Quia accusantium, impedit odio odit ea nulla praesentium accusamus commodi sunt quae nostrum assumenda voluptatum suscipit quibusdam nisi, eaque totam doloribus facere? Officia exercitationem asperiores necessitatibus maiores quam. Minus earum sunt similique accusantium voluptate, tenetur a?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur modi nam ipsam ducimus. Soluta, neque sunt? Eveniet, quisquam. Quibusdam libero mollitia quae perspiciatis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur modi nam ipsam ducimus. Soluta, neque sunt? Eveniet, quisquam. Quibusdam libero mollitia quae perspiciatis, distinctio sequi voluptatem laboriosam doloremque consectetur optio quas eum nam qui magni voluptate provident ipsam corrupti. Modi deleniti nulla possimus nam fuga inventore?</p><p> Atque laboriosam voluptate aspernatur perspiciatis molestiae inventore eum quos, neque, dolorem et asperiores, maiores labore ut vitae adipisci. Quia accusantium, impedit odio odit ea nulla praesentium accusamus commodi sunt quae nostrum assumenda voluptatum suscipit quibusdam nisi, eaque totam doloribus facere? Officia exercitationem asperiores necessitatibus maiores quam. Minus earum sunt similique accusantium voluptate, tenetur a?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
