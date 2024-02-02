<?php

namespace App\Http\Controllers;

use App\Services\newsletter;
use Illuminate\Http\Request;
use \Illuminate\validation\ValidationException;


class NewsletterController extends Controller
{
    public function __invoke(Request $request, newsletter $newsletter)
    {
        $request->validate([
            'email' => 'email:rfc',
            'phone' =>  'min:11|max:13|nullable'
        ]);
        try {
        $newsletter->subscribe($request->email, $request->phone);
    }catch(\Exception $e) {
        throw ValidationException::withMessages(
            [
            'phone' => 'آخ! ببخشید این ایمیل یا شماره تلفن نمی تونه به لیست خبرنامه اضافه بشه. ممکنه قبلاً عضو شدید اگه این طور نیست با من از طریق فرم تماس با من تماس بگیرید تا مشکل رو حل کنم.'
            ]
        );
    }

    return back()->with('success', 'ایول، ممنون که عضو خبرنامه شدی؛ منتظر ایمیل های خفن مون بمون!');

    }
}
