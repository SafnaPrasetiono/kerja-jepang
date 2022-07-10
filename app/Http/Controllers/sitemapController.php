<?php

namespace App\Http\Controllers;

use App\Models\loker;
use App\Models\magang;
use App\Models\news;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class sitemapController extends Controller
{
    // index site maps
    public function index()
    {
        // $sitemap = Sitemap::create()
        // ->add(Url::create('/beranda'))
        // ->add(Url::create('/prosedur'));
       
        // $news = news::all();
        // $loker = loker::all();
        // $magang = magang::all();

        // foreach ($news as $post) {
        //     $sitemap->add(Url::create("/beranda/berita/{$post->slug}"));
        // }
        // $sitemap->writeToFile(public_path('sitemap.xml'));

        $news = news::all();
        $loker = loker::all();
        $magang = magang::all();
        return response()->view('sitemap', [
            'news' => $news,
            'loker' => $loker,
            'magang' => $magang
        ])->header('Content-Type', 'text/xml');
    }
}
