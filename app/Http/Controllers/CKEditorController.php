<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('storage/thumbnails'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = secure_asset('storage/thumbnails/'.$fileName);
            $msg = 'عکس با موفقیت بارگزاری شد!';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            {{ $response }};
        }
    }
}
