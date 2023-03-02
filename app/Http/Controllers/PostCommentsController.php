<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class PostCommentsController extends Controller
{
    public function store(Post $post, Request $request)
    {
        // add a comment to given post
        // Guest comment
        if ($request->input('guestName')) {
            $request->validate([
                'body' => 'required|min:3',
                'guestEmail' => 'required|email'
            ]);
            $post->comments()->create([
                'guestName' => $request->input('guestName'),
                'guestEmail' => $request->input('guestEmail'),
                'guestSite' => $request->input('guestSite'),
                'user_id' => NULL,
                'body' =>  $request->input('body')
            ]);
            return back()->with('success', 'مهمان عزیز خیلی ممنون که نظرت رو گذاشتی، هر وقت جواب دادم برات ایمیل میفرستم، راستی می تونی عضو سایت هم بشی که هم بتونی راحت تر نظر ارسال کنی و کلی قابلیت های دیگه ...');
        }

        //validatoin user
        $request->validate([
            'body' => 'required|min:3'
        ]);
        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $request->input('body')
        ]);

        return back()->with('success','دمت گرم! '. $request->user()->name. ' عزیز خیلی ممنون که نظرت رو گذاشتی، هر وقت جواب دادم تو داشبوردت میتونی ببینی و یه ایمیل هم برات میاد.');
    }
}
