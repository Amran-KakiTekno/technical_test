<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Collection;

class ApiController extends Controller
{
    public function fetch()
    {
        $comments = Http::get('https://jsonplaceholder.typicode.com/comments');
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts');
        $all_comments = json_decode($comments->body());
        $all_post = json_decode($posts->body());
        $number_of_comments = [];
        $no_of_comment = [
            '1' => '0',
            '2' => '0',
            '3' => '0',
            '4' => '0',
            '5' => '0',
            '6' => '0',
            '7' => '0',
            '8' => '0',
            '9' => '0',
            '10' => '0',
            '11' => '0',
            '12' => '0',
            '13' => '0',
            '14' => '0',
            '15' => '0',
            '16' => '0',
            '17' => '0',
            '18' => '0',
            '19' => '0',
            '20' => '0',
            '21' => '0',
            '22' => '0',
            '23' => '0',
            '24' => '0',
            '25' => '0',
            '26' => '0',
            '27' => '0',
            '28' => '0',
            '29' => '0',
            '30' => '0',
            '31' => '0',
            '32' => '0',
            '33' => '0',
            '34' => '0',
            '35' => '0',
            '36' => '0',
            '37' => '0',
            '38' => '0',
            '39' => '0',
            '40' => '0',
            '41' => '0',
            '42' => '0',
            '43' => '0',
            '44' => '0',
            '45' => '0',
            '46' => '0',
            '47' => '0',
            '48' => '0',
            '49' => '0',
            '50' => '0',
            '51' => '0',
            '52' => '0',
            '53' => '0',
            '54' => '0',
            '55' => '0',
            '56' => '0',
            '57' => '0',
            '58' => '0',
            '59' => '0',
            '60' => '0',
            '61' => '0',
            '62' => '0',
            '63' => '0',
            '64' => '0',
            '65' => '0',
            '66' => '0',
            '67' => '0',
            '68' => '0',
            '69' => '0',
            '70' => '0',
            '71' => '0',
            '72' => '0',
            '73' => '0',
            '74' => '0',
            '75' => '0',
            '76' => '0',
            '77' => '0',
            '78' => '0',
            '79' => '0',
            '80' => '0',
            '81' => '0',
            '82' => '0',
            '83' => '0',
            '84' => '0',
            '85' => '0',
            '86' => '0',
            '87' => '0',
            '88' => '0',
            '89' => '0',
            '90' => '0',
            '91' => '0',
            '92' => '0',
            '93' => '0',
            '94' => '0',
            '95' => '0',
            '96' => '0',
            '97' => '0',
            '98' => '0',
            '99' => '0',
            '100' => '0',
        ];
        $i = 1;

        foreach ($all_comments as $comment) {
            $number_of_comments[$i] = $comment->postId;
            $i++;
        }

        for ($i=1; $i < count($number_of_comments) + 1; $i++) { 
            foreach ($number_of_comments as $number) {
                if ($number == $i) {
                    $no_of_comment[$i]++;
                }
            }
        }

        $results = collect();
        foreach ($all_post as $post) {  
            $results -> push([
                'post_id' => $post->id,
                'post_title' => $post->title,
                'post_body' => $post->body,
                'total_number_of_comments' => $no_of_comment[$post->id],
            ]);
        }
        
        return view('question7', compact('results'));
    }

    public function search(Request $request)
    {
        $comments = Http::get('https://jsonplaceholder.typicode.com/comments');
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts');
        $all_comments = json_decode($comments->body());
        $all_post = json_decode($posts->body());

        if (isset($request->post_id)) {
            foreach ($all_comments as $ind=>$comment) {
                if ($comment->postId != $request->post_id) {
                    unset($all_comments[$ind]);
                }
            }
        } else if (isset($request->post_title)) {
            foreach ($all_post as $ind=>$post) {
                if (str_contains($post->title, $request->post_title)) {
                    $id = $post->id;
                }
            }
            foreach ($all_comments as $ind=>$comment) {
                if ($comment->postId != $id) {
                    unset($all_comments[$ind]);
                }
            }
        } else if (isset($request->post_body)) {
            foreach ($all_post as $post) {
                if (str_contains($post->body, $request->post_body)) {
                    $id = $post->id;
                }
            }
            foreach ($all_comments as $ind=>$comment) {
                if ($comment->postId != $id) {
                    unset($all_comments[$ind]);
                }
            }
        }

        return view('question7', compact('all_comments'));
    }
}
