<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            dump($post->content);
        }

        //dd($posts);
    }

    public function postCreate()
    {
        $postsArr = [
            [
                'title' => 'First title',
                'content' => 'first content text',
                'likes' => 56,
                'is_published' => 1
            ],
            [
                'title' => 'Second title',
                'content' => 'Second content text',
                'likes' => 996,
                'is_published' => 1
            ],
            [
                'title' => 'Three title',
                'content' => 'three content text',
                'likes' => 333,
                'is_published' => 1
            ]
        ];

        foreach ($postsArr as $post) {
            Post::create([
                'title' => $post['title'],
                'content' => $post['content'],
                'likes' => $post['likes'],
                'is_published' => $post['is_published'],
            ]);
        }

        dd('Created!');
    }
}
?>
