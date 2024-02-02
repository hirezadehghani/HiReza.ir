<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        /**
         * validate the request
         * attempt to authenticate and log in the user
         * based on the provided credentials
         *
         * redirect with a success flash message
         */

        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        //auth failed
        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'اطلاعاتی که وارد کردی اشتباست! چکشون کن لطفا'
            ]);
        }

        session()->regenerate();
        return redirect()->back()->with('success','به به، ببین کی اومده ' . request()->user()->name . ' عزیز خوش برگشتی، رفیق!');


        //  return back()
        //  ->withInput()
        //  ->withErrors('email', 'اطلاعاتی که وارد کردی اشتباست! چکشون کن لطفا!'); // $errors

    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->back()->with('success', 'خدافظ، بای بای؛ قول بده زود برگردی، منتظرتیم!');
    }
}
