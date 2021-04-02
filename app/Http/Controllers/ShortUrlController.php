<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShortUrlController extends Controller
{
    //
    public function index() {
        return view('index');
    }

    public function  shorten(Request $request){
        $random_token = Str::random(5);

        DB::table('url')->insert([
            'url' => $request['url'],
            'short_url' => URL::to('/') . '/' . "344" . $random_token,
        ]);

//        return URL::to('/') . '/' . "344" . $random_token;
        return $request['url'];
    }

    public function fetch($url) {
        $short_url = URL::to('/') . '/' . $url;
        $query = DB::table('url')->where('short_url','=',$short_url);

            if ($query->exists()) {
                return redirect($query->value('url'));
            } else {
                return 'not exists';
            }
    }
}
