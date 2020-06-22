<?php

use App\category;
use App\Story;
use App\tag;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = category::create([
            'name' => 'news'
        ]);

        $category2 = category::create([
            'name' => 'Marketing'
        ]);
        $category3 = category::create([
            'name' => 'Partnership'
        ]);

        $category4 = category::create([
            'name' => 'Television'
        ]);

        $tag1 = tag::create([
            'name' => 'job'
        ]);

        $tag2 = tag::create([
            'name' => 'customers'
        ]);

        $tag3 = tag::create([
            'name' => 'record'
        ]);

        $author1 = User::create([
            'name'=>'john doe',
            'email'=>'johndoe@gmail.com',
            'password'=> Hash::make('password'),
            'gender'=> 'male',
            'phone' => '018288828',
            'dateofbirth' => '02.05.1992'
            
        ]);

        $author2 = User::create([
            'name'=>'johnn doe',
            'email'=>'johndoe3@gmail.com',
            'password'=> Hash::make('password'),
            'gender'=> 'female',
            'phone' => '018288848',
            'dateofbirth' => '02.05.1993'
        ]);

        $author3 = User::create([
            'name'=>'johe doe',
            'email'=>'johndoe4@gmail.com',
            'password'=> Hash::make('password'),
            'gender'=> 'male',
            'phone' => '0182888283',
            'dateofbirth' => '02.05.1999'
        ]);


        $post1 = Story::create([
            'title' => 'We relocated our office to a new designed garage',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesitting indusrty',
            'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
            'category_id' => $category1->id,
            'image' => 'images/5.jpg',
            'user_id'=>$author1->id,

        ]);

        $post2 = Story::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesitting indusrty',
            'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
            'category_id' => $category2->id,
            'image' => 'images/6.jpg',
            'user_id'=>$author2->id,
          

        ]);

        $post3 = Story::create([
            'title' => 'Best practices for minimalist design with example',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesitting indusrty',
            'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
            'category_id' => $category3->id,
            'image' => 'images/7.jpg',
            'user_id'=>$author3->id,
            

        ]);

        $post4 = Story::create([
            'title' => 'We relocated our office to a new designed garage',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesitting indusrty',
            'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
            'category_id' => $category4->id,
            'image' => 'images/8.jpg',
            'user_id'=>$author3->id,

        ]);

        $post1-> tags() ->attach([$tag1->id, $tag2->id]);
        $post2-> tags() ->attach([$tag1->id, $tag3->id]);
        $post3-> tags() ->attach([$tag1->id, $tag2->id, $tag3->id]);
        $post4-> tags() ->attach([$tag1->id, $tag3->id]);
    }
}
