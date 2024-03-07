<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        $url = Url::all();
        return view('main', ['url' => $url]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'url' => 'required|url'

        ]);

        Url::create([
            'url' => $request->url,
            'short' => str_random(5)
        ]);

        return redirect()->route('url.index');
    }

    public function shortUrl(string $url)
    {
        $shortLink = Url::where(['short' => $url])->first();
        $shortLink->save();

        return redirect($shortLink->url);
    }
}
